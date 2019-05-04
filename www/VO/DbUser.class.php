<?php

namespace VO;

class DbUser {

    private  $user;

    public function __construct($user)
    {
        $this->user = $user;
    }
    public function getUser(){return $this->user;}
}