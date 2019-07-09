<?php


namespace MVC\Models;

use MVC\Core\BaseSQL;

class Role extends BaseSQL {

    protected $id;
    protected $right;

    public function __construct() {
        parent::__construct();
    }
}