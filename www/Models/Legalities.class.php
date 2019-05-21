<?php


namespace MVC\Models;


use MVC\Core\BaseSQL;

class Legalities
{
    private $id;
    public $basesql;

    public function __construct(BaseSQL $bsql)
    {
        $this->basesql = $bsql;
    }

    public function init(array $legalities, bool $set = false) {
        $dbLegalities = $this->basesql->findOne($legalities);
        if(!$dbLegalities) {
            $this->basesql->insert($this, $legalities);
            if($set) {
                $this->id = $this->basesql->lastInsertedId();
            }
        }
    }

    public function getId(): integer {
        return $this->id;
    }
}