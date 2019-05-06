<?php
namespace VO;

class DbDriver {
    private $dbDriver = 'mysql';

    public function __construct(string $driver) {
        $this->dbDriver = $driver;
    }
    public function getDbDriver() {return $this->dbDriver;}
}
