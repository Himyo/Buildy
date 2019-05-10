<?php

namespace MVC\VO;

class DbName {
    private $name;

    public function __construct($name)
    {
        $this->name = $name;
    }

    public function getName() {return $this->name;}
}