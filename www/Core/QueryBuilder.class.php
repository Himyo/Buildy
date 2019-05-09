<?php
namespace MVC\Core;

class QueryBuilder {
    private $query = "";
    private $table;
    private $items= [];

    public function __construct() {}
 //TODO: INNER/OUTER JOIN, LIKE, BETWEEN, EXISTS, HAVING, ALTER, DROP, CHECK
    public static function SQL_PARSER($format){
        switch ($format) {
            case 'SELECT':
                return function ($items) {
                    $format = "(" . implode(" ,", $items) . ")";
                    return $format;
                };
                break;
            case 'INSERT':
                return function ($items) {
                    $keys = array_keys($items);
                    $format = "(" . implode(" ,", $keys) . ") VALUES ( :"
                        .implode(" , :", $keys) . ")";
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
                    $format = "(" . implode(",", $items) . ")";
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
        $this->items = ['SELECT' => $items];
        return $this;
    }
    public function delete(array $items, $opt=[]): QueryBuilder{
        $this->items['DELETE'] = $opt;
        $this->where($items);
        return $this;
    }
    public function insert(array $items): QueryBuilder{
        $this->items = ['INSERT' => $items];
        return $this;
    }
        public function update(array $items): QueryBuilder {
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
    
    public function groupBy($items): QueryBuilder {
        $this->items['GROUP BY'] = $items;
        return $this;
    }

    public function orderBy($items): QueryBuilder {
        $this->items['ORDER BY'] = $items;
        return $this;
    }

    public function in($items): QueryBuilder {
        $this->items['IN'] = $items;
        return $this;
    }

    public function make(): QueryBuilder {

        foreach ($this->items as $keyword => $data) {
            switch($keyword) {
                case 'SELECT':
                    $this->query.= "SELECT ".QueryBuilder::SQL_PARSER('SELECT')($data)." FROM ".$this->table;
                    break;
                case 'INSERT':
                    $this->query.= "INSERT INTO ".$this->table." ".QueryBuilder::SQL_PARSER('INSERT')($data);
                    break;
                case 'UPDATE':
                    $this->query.= "UPDATE TABLE ".$this->table." SET ".QueryBuilder::SQL_PARSER('UPDATE')($data);
                    break;
                case 'DELETE':
                    $this->query.= "DELETE ".QueryBuilder::SQL_PARSER('DELETE')($data)." FROM ".$this->table;
                    break;
                default:
                    $this->query.= " ".$keyword." ".QueryBuilder::SQL_PARSER('DEFAULT')($data);
                    break;
            }
        }
        return $this;
    }

    public function from($table): QueryBuilder {
        $this->table = $table;
        return $this;
    }
    public function join(QueryBuilder $join): QueryBuilder    {
        $this->make();
        $this->query.= " JOIN ".$join->makeQuery()->getQuery();
        foreach ($join->getItems() as $joinKeyword => $joinData) {
            $this->items[$joinKeyword] = isset($this->items[$joinKeyword]) ? array_merge($this->items[$joinKeyword], $join->getItems()[$joinKeyword])
                : $join->getItems()[$joinKeyword];
        }
        return $this;
    }
    
    public function getItems(): array {
        return $this->items;
    }
    public function getQuery(): string {
        return $this->query;
    }
}