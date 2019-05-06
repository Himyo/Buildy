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
    'DELETE' => function($items) {
        $keys = array_keys($items);
        $format = "";
        foreach ($keys as $k) {
            $format.= $k." = :".$k;
        }
        return $format;
    },
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

    public function select(array $items): void{
        $this->query = "SELECT";
        $this->items = $items;
    }
    public function delete(array $items): void{
        $this->query = "DELETE";
        $this->items = $items;
    }
    public function insert(array $items): void{
        $this->query = "INSERT";
        $this->items = $items;
    }
        public function update(array $items): voidgi{
        $this->query = "UPDATE";
        $this->items = $items;
    }

    public function addItem($item){}

    public function from($item){}

    public function where($item){}

    public function join($item){}

    public function andWhere(){}

    public function orWhere(){}

    public function execute() {}
}