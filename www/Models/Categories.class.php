<?php


namespace MVC\Models;

use MVC\Core\BaseSQL;

class Categories extends BaseSQL {

    protected $id;
    protected $name;

    public function __construct() {
        parent::__construct();
    }
}