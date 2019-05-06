<?php
namespace Core;
$SQL_FROMAT = [
    'SELECT' => function($items) {
        $format = "(:".implode(",:", $items).")";
        return $format;
    },
    'INSERT' => function($items) {
        $keys = array_keys($items);
        $format = "(".implode(",", $keys).") VALUES (:"
            .implode(",:", $keys).")";
        return $format;
    },
    'UPDATE' => function($items) {
        $keys = array_keys($items);
        $format = "";
        foreach ($keys as $k) {
            $format.= $k." = :".$k;
        }
        return $format;
    },
    'DELETE',
];
class QueryBuilder {
    private $pdo;
    private $query = "";
    private $table;
    private $items = [];
    public function __construct(BaseSQL $pdo){
        $this->pdo = $pdo;
        $this->table = substr(get_called_class(), strpos(get_called_class(), '\\') +1);
    }

    public function select($item){$this->query = "SELECT ".$item." FROM ".$this->table;}
    public function delete($field, $item){$this->query = "DELETE FROM ".$this->table."WHERE ".$field."=".$item;}
    public function insert($item){
        $this->query = "INSERT ".$item." FROM ".$this->table;
    }
    public function update($item){
        $this->query = "UPDATE ".$this->table." SET ";
    }

    public function addItem($item){}

    public function from($item){}

    public function where($item){}

    public function join($item){}

    public function andWhere(){}

    public function orWhere(){}

    public function execute() {}
}