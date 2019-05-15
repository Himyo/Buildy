<?php
namespace MVC\VO;

class DbDriver {
    private $driver = 'mysql';

    public function __construct(string $driver) {
        $this->driver = $driver;
    }
    public function getDriver() {return $this->driver;}
}
