<?php
namespace MVC\Core;

use MVC\Utils\Utils;
use \PDO;
use \PDOException;

class BaseSQL {
    protected static $instance;
	protected $pdo;
    private $table;

	public function __construct(PDO $pdo = null) {
        if (!self::$instance && $pdo !== null) {
            $this->pdo = $pdo;
        }
        else {
            $this->pdo = self::$instance->pdo;

            $calledClass = get_called_class();
            $this->table = substr($calledClass, strrpos($calledClass, '\\') +1);
        }
    }

    public static function getConnection($driver, $host, $name, $user, $pwd): BaseSQL{
        if(!self::$instance) {
            try {
                $pdo = new PDO($driver . ":host=" . $host . ";dbname=" . $name, $user, $pwd);
                self::$instance = new self($pdo);
            }
            catch (PDOException $e) {
            echo 'The connection to PDO failed';
            $err = $e->getMessage() . "<br />";
            echo $err;
            die();
            }
        }
        return self::$instance;
    }

    public function setId($id){
        $this->id = $id;
        //va récupérer en base de données les élements pour alimenter l'objet
        $this->getOneBy(["id"=>$id], true);

    }


	public static function ALL(array $column = ['*'], array $where = []) {
        $calledClass = get_called_class();
        $table = substr($calledClass, strrpos($calledClass, '\\') +1);
        $instance = self::$instance;
        $instance->setTable($table);
        $data = $where == [] ? $instance->find($column) : $instance->findAndWhere($column, $where);
        return $data;
    }

    public function setTable($table) {
        $this->table = $table;
    }
    // $where -> tableau pour créer notre requête sql
    // $object -> si vrai aliment l'objet $this sinon retourn un tableau
    public function getOneBy(array $where, $object = false){
        // $where = ["id"=>$id, "email"=>"y.skrzypczyk@gmail.com"];
        $sqlWhere = [];
        foreach ($where as $key => $value) {
            $sqlWhere[]=$key."=:".$key;
        }
        $sql = " SELECT * FROM ".$this->table." WHERE  ".implode(" AND ", $sqlWhere).";";
        $query = $this->pdo->prepare($sql);

        if($object){
            //modifier l'objet $this avec le contenu de la bdd
            $query->setFetchMode( PDO::FETCH_INTO, $this);
        }else{
            //on retourne un simple table php
            $query->setFetchMode( PDO::FETCH_ASSOC);
        }
        $query->execute( $where );
        return $query->fetch();
    }

    public function save(){
        $dataObject = get_object_vars($this);
        $dataChild = array_diff_key($dataObject, get_class_vars(get_class()));
        if( is_null($dataChild["id"])){
            //INSERT
            unset($dataChild["id"]) ;
			$sql ="INSERT INTO ".$this->table." ( ".
			implode(", ", array_keys($dataChild) ) .") VALUES ( :".
			implode(", :", array_keys($dataChild) ) .")";
			$query = $this->pdo->prepare($sql);
			$queryStatus = $query->execute( $dataChild );
			$this->id = $this->lastInsertedId();
			return $queryStatus;
		}
		else {
			//UPDATE
			$sqlUpdate = [];
			foreach ($dataChild as $key => $value) {
				if( $key != "id")
				$sqlUpdate[]=$key."=:".$key;
			}
			$sql ="UPDATE ".$this->table." SET ".implode(",", $sqlUpdate)." WHERE id=:id";
			$query = $this->pdo->prepare($sql);
			$queryStatus = $query->execute( $dataChild );
			return $queryStatus;
		}
	}
    public function customQuery($query, array $data) {
	   $stmt = $this->pdo->prepare($query);
	   return $stmt->fetchAll(PDO::FETCH_ASSOC);
    }

    public function executeSql(array $querys) {
	    $qb = QueryBuilder::GetQueryBuilder($this->table);
	    foreach ($querys as $command => $data) {
	        $qb = $qb->$command($data);
        }
	    $query = $qb->make()->getQuery();
	    $stmt = $this->pdo->prepare($query);
	    $stmt->execute($qb->getData());
	    var_dump($query);
        var_dump($stmt->errorInfo());
	    die();
	    return $stmt->fetchAll(PDO::FETCH_ASSOC);
    }

    public function findAll(): array
    {
        $qb = QueryBuilder::GetQueryBuilder($this->table);
        $query = $qb->selectAll();
        $stmt = $this->pdo->prepare($query);
        $stmt->execute();
        return $stmt->fetchAll(PDO::FETCH_ASSOC);
    }

    public function find(array $data): array {
        $qb = QueryBuilder::GetQueryBuilder($this->table);
        $query = $qb->select($data)->make()->getQuery();
        $stmt = $this->pdo->prepare($query);
        $stmt->execute();
        return $stmt->fetchAll(PDO::FETCH_ASSOC);
    }
    public function findAndWhere(array $data = ["*"], array $where = []): array {
        $qb = QueryBuilder::GetQueryBuilder($this->table);
        $query = $qb->select($data)->andWhere($where)->make()->getQuery();
        $stmt = $this->pdo->prepare($query);
        $stmt->execute($where);
        return $stmt->fetchAll(PDO::FETCH_ASSOC);
    }

    public function findOrWhere(array $data = ['*'], array $where = []):  array  {
        $qb = QueryBuilder::GetQueryBuilder($this->table);
        $query = $qb->select($data)->orWhere($where)->make()->getQuery();
        $stmt = $this->pdo->prepare($query);
        $stmt->execute($where);
        return $stmt->fetchAll(PDO::FETCH_ASSOC);
    }

    public function findOne(array $data) {
        $qb = QueryBuilder::GetQueryBuilder($this->table);
        $query = $qb->select(['id'])->andWhere($data)->make()->getQuery();
        $stmt = $this->pdo->prepare($query);
        $stmt->execute($data);
        return $stmt->fetch();
    }

    public function findJoin(array $data, array $join) {
	    $qb = QueryBuilder::GetQueryBuilder($this->table);
	    $query = $qb->select($data)->where(['state'=>'ACCEPTED'])->innerJoin($join)->make()->getQuery();
	    $stmt = $this->pdo->prepare($query);
	    $stmtStatus = $stmt->execute();
	    return $stmt->fetchAll();
    }

    public function insert(array $data) {
        $qb = QueryBuilder::GetQueryBuilder($this->table);
        $query =  $qb->insert($data)->make()->getQuery();
        $stmt = $this->pdo->prepare($query);
        $stmtStatus = $stmt->execute($data);
        return $stmtStatus;
    }

    public function delete(array $data) {
        $qb = QueryBuilder::GetQueryBuilder($this->table);
        $query = $qb->delete($data)->make()->getQuery();
        $stmt = $this->pdo->prepare($query);
        $stmtStatus = $stmt->execute($data);
        return $stmtStatus;
    }

    public function edit(array $data, array $where) {
        $qb = QueryBuilder::GetQueryBuilder($this->table);
        $query = $qb->update($data)->where($where)->make()->getQuery();
        foreach($where as $key => $value) {
            $data[$key] =  $value;
        }
        $stmt = $this->pdo->prepare($query);
        $stmtStatus = $stmt->execute($data);
        return $stmtStatus;
    }

    public function lastInsertedId(){
	    $res = $this->pdo->lastInsertId();
	    return $res;
    }

    public function insertMany(array $data) {
	    $qb = QueryBuilder::GetQueryBuilder($this->table);
	    $parsedData = $this->insertManyParse($data);
        $flat = Utils::flattenArray($parsedData);
        $query =  $qb->insertMany($parsedData)->make()->getQuery();
	    $stmt = $this->pdo->prepare($query);
	    $stmtStatus = $stmt->execute($flat);

        return $stmtStatus;
    }
	public function executeMany($querys, $data) {
		foreach($querys as $n => $value){
			$request = $this->pdo->prepare($querys[$n]);
			$requestStatus = $request->execute($data[$n]);
			echo $requestStatus." ".$n." ".$querys[$n]."<br />";
		}
	}

    public function insertManyParse(array $data): array {
        $preparedData = [];
        $keys = array_keys($data[0]);
        $tmp = $data[0];
        unset($data[0]);
        $preparedData[0] = $tmp;
        foreach($data as $i => $values) {
            foreach($keys as $key) {
                $preparedData[$i][$i.$key] = $values[$key];
            }
        }
        return $preparedData;
    }

}
