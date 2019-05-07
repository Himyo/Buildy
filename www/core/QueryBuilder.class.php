<?php
namespace Core;

class QueryBuilder {
    private $query = "";
    private $table;
    private $items= [];

    public function __construct() {}
  
    public static function SQL_PARSER($format){
        switch ($format) {
            case 'SELECT':
                return function ($items) {
                    $format = "(:" . implode(",:", $items) . ")";
                    return $format;
                };
                break;
            case 'INSERT':
                return function ($items) {
                    $keys = array_keys($items);
                    $format = "(" . implode(",", $keys) . ") VALUES (:"
                        . implode(",:", $keys) . ")";
                    return $format;
                };
                break;
            case 'UPDATE':
                return function ($items) {
                    $keys = array_keys($items);
                    $format = "";
                    foreach ($keys as $k) {
                        $format .= $k . " = :" . $k;
                    }
                    return $format;
                };
                break;
            case 'DELETE':
                return function ($items) {
                    $keys = array_keys($items);
                    $format = "";
                    foreach ($keys as $k) {
                        $format .= $k . " = :" . $k;
                    }
                    return $format;
                };
                break;
            default:
                return function ($items) {
                    $keys = array_keys($items);
                    $format = "";
                    foreach ($keys as $k) {
                        $format .= $k . " = :" . $k;
                    }
                    return $format;
                };
                break;
        }
    }

    public function select(array $items): QueryBuilder{
        $this->query = "SELECT";
        $this->items = ['SELECT' => $items];
        return $this;
    }
    public function delete(array $items): QueryBuilder{
        $this->query = "DELETE";
        $this->items = ['DELETE' => $items];
        return $this;
    }
    public function insert(array $items): QueryBuilder{
        $this->query = "INSERT INTO";
        $this->items = ['INSERT' => $items];
        return $this;
    }
        public function update(array $items): QueryBuilder {
        $this->query = "UPDATE";
        $this->items = ['UPDATE' => $items];
        return $this;
    }

    public function where($item): QueryBuilder {
        $this->items['WHERE'] = $item;
        return $this;
    }

    public function andWhere($item): QueryBuilder{
        if(isset($this->items['WHERE'])){
           $this->items['AND WHERE'] = isset($this->items['AND WHERE']) ? array_merge($this->items['AND WHERE'], $item) : $item;
        }
        return $this;
    }

    public function orWhere($item): QueryBuilder{
        if(isset($this->items['WHERE'])){
           $this->items['OR WHERE'] = isset($this->items['OR WHERE']) ? array_merge($this->items['OR WHERE'], $item) : $item;
        }
        return $this;
    }

    public function make(): QueryBuilder {
        foreach ($this->items as $item) {
            switch($item) {
                case 'SELECT':
                    $this->query.= " ".QueryBuilder::SQL_PARSER('SELECT')($this->items[item]);
                    break;
                case 'INSERT':
                    break;
                case 'UPDATE':
                    break;
                case 'DELETE':
                    break;
                default:
                    break;
            }
        }
        return $this;
    }

    public function from($table): QueryBuilder {
        $this->table = $table;
        return $this;
    }
    public function join($item): QueryBuilder    {
        return $this;
    }
}