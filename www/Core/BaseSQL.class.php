<?php
namespace MVC\Core;

use \PDO;
use \PDOException;

class BaseSQL {
    private static $instance;
	public $pdo;
    public $table;

	public function __construct(PDO $pdo = null) {
        if (!self::$instance) {
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
            }
            catch (PDOException $e) {
            echo 'The connection to PDO failed';
            $err = $e->getMessage() . "<br />";
            echo $err;
            die();
        }
	        self::$instance = new self($pdo);
        }
	    return self::$instance;
    }

	public function setId($id){
		$this->id = $id;
		//va récupérer en base de données les élements pour alimenter l'objet
		$this->getOneBy(["id"=>$id], true);
		
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
			implode(",", array_keys($dataChild) ) .") VALUES ( :". 
			implode(",:", array_keys($dataChild) ) .")";
			$query = $this->pdo->prepare($sql);
			$queryStatus = $query->execute( $dataChild );
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

    public function findAll(): array {
        $qb = QueryBuilder::GetQueryBuilder($this->table);
        $query = $qb->selectAll();
        $stmt = $this->pdo->prepare($query);
        $stmt->execute();
        return $stmt->fetchAll(PDO::FETCH_ASSOC);
    }

	public function findOne(array $data) {
	    $qb = QueryBuilder::GetQueryBuilder($this->table);
	    $query = $qb->select([0 =>'id'])->andWhere($data)->make()->getQuery();
	    $stmt = $this->pdo->prepare($query);
	    $stmt->execute($data);
        return $stmt->fetch();
    }
	public function insert($data) {
        //TODO: Probably prevent multiple query
        // Make transaction for execution

        $qb = QueryBuilder::GetQueryBuilder($this->table);
	    $query =  $qb->insert($data)->make()->getQuery();
	    $stmt = $this->pdo->prepare($query);
	    $stmtStatus = $stmt->execute($data);
	    return $stmtStatus;
    }

    public function lastInsertedId(){
	    $res = $this->pdo->lastInsertId();
	    return $res;
    }
	public function executeMany($querys, $data) {
		foreach($querys as $n => $value){
			$request = $this->pdo->prepare($querys[$n]);
			$requestStatus = $request->execute($data[$n]);
			echo $requestStatus." ".$n." ".$querys[$n]."<br />";
		}
	}
}
