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
        $data = $this->parseLegalities($legalities);
        $dbLegalities = $this->basesql->findOne($this, $data);
        if(!$dbLegalities) {
            $this->basesql->insert($this, $data);
            if($set) {
//                $this->id = $this->basesql->lastInsertedId();
            }
        }
        else {
            $this->id = $dbLegalities[0];
        }
    }

    public function parseLegalities(array $legalities): array {
        $result = [];
        $acceptedFormat = ['legacy', 'modern', 'pauper', 'standard', 'vintage'];
        foreach ($legalities['legalities'] as $key => $value) {
            $format = strtolower($value["format"]);
            if (in_array($format, $acceptedFormat)) {
                $result[$format] = $value["legality"] == "Legal";
            }
        }
        return $result;
    }

    public function getId() {
        return $this->id;
    }
}