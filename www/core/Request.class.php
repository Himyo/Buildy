<?php


namespace Core;


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
        if (!empty($this->getArgs)) {
            foreach ($this->getArgs as $key => $value) {
                if ($key == $name) {
                    return $value;
                }
            }
        } else if (!empty($this->postArgs)) {
            foreach ($this->postArgs as $key => $value) {
                if ($key == $name) {
                    return $value;
                }
            }
        }
        return null;
    }



}