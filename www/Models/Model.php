<?php


namespace MVC\Models;


class Model {

    protected $baseSql = "DBHOST = bidule, DBNAME = biduel";

    /**
     * Model constructor.
     * @param $baseSql
     */
    public function __construct($baseSql) { $this->baseSql = $baseSql; }


}