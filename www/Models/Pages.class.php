<?php


namespace MVC\Models;


use MVC\Core\BaseSQL;

class Pages extends BaseSQL {

    protected $id;
    protected $title;
    protected $slug;
    protected $createdAt;
    protected $updatedAt;
    protected $content;

    public function __construct() {
        parent::__construct();
    }


}