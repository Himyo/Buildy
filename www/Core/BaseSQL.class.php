<?php
namespace MVC\Core;

use \PDO;
use \PDOException;

class BaseSQL{
    private static $instance;
	private $pdo;

	public function __construct(string $driver, string $host, string $name, string $user, string $pwd) {
        try{
            $this->pdo = new PDO($driver. ":host=" . $host. ";dbname=" . $name, $user, $pwd);
        }
        catch(PDOException $e) {
            echo 'The connection to PDO failed';
            $err = $e->getMessage() . "<br />";
            echo $err;
            die();
        }
    }

    public static function getConnection($driver, $host, $name, $user, $pwd): BaseSQL{
	    if(!self::$instance) {
	        self::$instance = new self($driver, $host, $name, $user, $pwd);
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
	public function getOneBy($class, array $where, $object = false){
        $calledClass = get_class($class);
        $table = substr($calledClass, strrpos($calledClass, '\\') +1);
		// $where = ["id"=>$id, "email"=>"y.skrzypczyk@gmail.com"];
		$sqlWhere = [];
		foreach ($where as $key => $value) {
			$sqlWhere[]=$key."=:".$key;
		}
		$sql = " SELECT * FROM ".$table." WHERE  ".implode(" AND ", $sqlWhere).";";
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
	public function save($class){
	    $calledClass = get_class($class);
        $table = substr($calledClass, strrpos($calledClass, '\\') +1);
		$dataObject = get_object_vars($class);
		//TODO: Change this to a more consistent solution
        unset($dataObject['basesql']);
		$dataChild = array_diff_key($dataObject, get_class_vars($class));

		if( is_null($dataChild["id"])){
			//INSERT
            unset($dataChild["id"]) ;
			$sql ="INSERT INTO ".$table." ( ".
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
			$sql ="UPDATE ".$table." SET ".implode(",", $sqlUpdate)." WHERE id=:id";
			$query = $this->pdo->prepare($sql);
			$queryStatus = $query->execute( $dataChild );
			return $queryStatus;
		}
	}

	public function executeMany($querys, $data) {
		foreach($querys as $n => $value){
			$request = $this->pdo->prepare($querys[$n]);
			$requestStatus = $request->execute($data[$n]);
			echo $requestStatus." ".$n." ".$querys[$n]."<br />";
			var_dump($data[$n]);
		}
	}
}
