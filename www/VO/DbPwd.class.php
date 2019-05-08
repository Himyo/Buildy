<?php

namespace MVC\VO;

class DbPwd {

    private $pwd;

    public function __construct($pwd)
    {
        $this->pwd = $pwd;
    }
    public function getPwd(){return $this->pwd;}
}
