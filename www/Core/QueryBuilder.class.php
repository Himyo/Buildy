<?php
namespace MVC\Core;

class QueryBuilder {
    private $query = "";
    private $table;
    private $items= [];

    //TODO: Take only the data key and not the full data array;
    public function __construct(string $table) {
        $this->table = $table;
    }
 //TODO: INNER/OUTER JOIN, LIKE, BETWEEN, EXISTS, HAVING, ALTER, DROP, CHECK
    public static function SQL_PARSER($format){
        switch ($format) {
            case 'SELECT':
                return function ($items) {
                    $format = "(" . implode(" ,", $items) . ")";
                    return $format;
                };
            // Make transaction for execution
                break;
            case 'INSERT':
                return function ($items) {
                    $keys = array_keys($items);
                    $format = "(" . implode(",", $keys) . ") VALUES (:"
                        . implode(",:", $keys) . ")";
                    //TODO: Remove or figure out this part
                    if(isset($items['ADDITIONAL'])) {
                        $format.= implode(",", $items["ADDITIONAL"]);
                    }
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
            case 'INSERT MANY':
            //TODO: Clean this cancer
                return function($items) {
                    $keys = array_keys($items[0]);
                    $format = "(" . implode(" ,", $keys) . ") VALUES ";
                    $values = "";
                    foreach($items as $i => $values){
                        $values .= "(".implode(',:'.$i, $items[$i])."),";
                    }
                    trim($values, ",");

                    return $format.$values;
                };
                break;
            case 'AND WHERE':
                return function($items) {
                    $format = "";
                    $keys = array_keys($items);
                    foreach ($keys as $k) {
                        $format .= " AND ".$k." = :".$k;
                    }
                    return $format;
                };
                break;
            case 'OR WHERE':
                return function($items) {
                    $format = "";
                    $keys = array_keys($items);
                    foreach ($keys as $k) {
                        $format .= " OR ".$k." = :".$k;
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
        $this->items['SELECT'] = $items;
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

    public function insertMany(array $items): QueryBuilder{
        $this->items = ['INSERT MANY' => $items];
        return $this;
    }

    public function update(array $items): QueryBuilder {
        $this->items = ['UPDATE' => $items];
        return $this;
    }
    public function addInsert(array $items): QueryBuilder {
        isset($this->items['ADDITIONAL']) ? array_push($this->items['ADDITIONAL'], $items) : $this->items['ADDITIONAL'] = $items;
        return $this;
    }

    public function where($item): QueryBuilder {
        $this->items['WHERE'] = $item;

        return $this;
    }

    public function andWhere($item): QueryBuilder{
        if(!isset($this->items['WHERE'])) {
            $this->items['WHERE'] = [array_keys($item)[0] => array_shift($item)];
        }
        foreach ($item as $key => $value) {
            $this->items['AND WHERE'][$key] = $value;
        }
        return $this;
    }

    public function orWhere($item): QueryBuilder{
        if(!isset($this->items['WHERE'])) {
            $this->items['WHERE'] = [array_keys($item)[0] => array_shift($item)];
        }
        foreach ($item as $key => $value) {
            $this->items['OR WHERE'][$key] = $value;
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
                    $this->query = "SELECT ".QueryBuilder::SQL_PARSER('SELECT')($data)." FROM ".$this->table;
                    break;
                case 'INSERT':
                    $this->query = "INSERT INTO ".$this->table." ".QueryBuilder::SQL_PARSER('INSERT')($data);
                    break;
                case 'UPDATE':
                    $this->query = "UPDATE TABLE ".$this->table." SET ".QueryBuilder::SQL_PARSER('UPDATE')($data);
                    break;
                case 'DELETE':
                    $this->query = "DELETE ".QueryBuilder::SQL_PARSER('DELETE')($data)." FROM ".$this->table;
                    break;
                case 'INSERT MANY':
                    $this->query = "INSERT INTO ".$this->table." ".QueryBuilder::SQL_PARSER('INSERT MANY')($data);
                    break;
                case 'AND WHERE':
                    $this->query .= QueryBuilder::SQL_PARSER('AND WHERE')($data);
                    break;
                case 'OR WHERE':
                    $this->query .= QueryBuilder::SQL_PARSER('OR WHERE')($data);
                    break;
                default:
                    $this->query .= " ".$keyword." ".QueryBuilder::SQL_PARSER('DEFAULT')($data);
                    break;
            }
        }
        $this->query.=";";
        return $this;
    }

    public function from($table): QueryBuilder {
        $this->table = $table;
        return $this;
    }
    public function join(QueryBuilder $join): QueryBuilder    {
        $this->make();
        $this->query = trim($this->query, ';');
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

    public static function getQueryBuilder($class): self {
        $calledClass = get_class($class)??$class;
        $table = substr($calledClass, strrpos($calledClass, '\\') +1);
        return new self($table);
    }
}