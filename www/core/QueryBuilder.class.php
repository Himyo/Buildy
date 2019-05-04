<?php
namespace Core;

class QueryBuilder {
    private $query = "";

    public function __construct(){}
    // SELECT items FROM table;
    public function select($item){$this->query = 'SELECT';}
    public function delete($item){$this->query = 'DELETE';}
    public function insert($item){$this->query = 'INSERT';}
    public function update($item){$this->query = 'UPDATE';}

    public function addItem($item){}

    public function from($item){}

    public function where($item){}

    public function join($item){}

    public function andWhere(){}

    public function orWhere(){}
}