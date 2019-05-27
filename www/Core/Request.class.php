<?php


namespace MVC\Core;


class Request {

    private $getArgs;
    private $postArgs;

    /**
     * Request constructor.
     */
    public function __construct() {
        $this->getArgs = $_GET;
        $this->postArgs = $_POST;
    }

    /**
     * @param $name
     * @return mixed|string
     */
    public function get($name) {
        $result = [];
        if (!empty($this->getArgs)) {
            return $this->getArgs[$name];
        } else if (!empty($this->postArgs)) {
            return $this->postArgs[$name];
        }
        return $result;
    }



}