<?php


namespace MVC\Models;


use MVC\Core\BaseSQL;

class Legalities extends BaseSQL {
    private $id;

    public function __construct() {
        parent::__construct();
    }

    public function init(array $legalities, bool $set = false) {
        $data = $this->parseLegalities($legalities);
        $dbLegalities = $this->findOne($data);
        if(!$dbLegalities) {
            $this->insert($data);
            if($set) {
                $this->id = $this->lastInsertedId();
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