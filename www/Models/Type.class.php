<?php


namespace MVC\Models;


use MVC\Core\BaseSQL;

class Type extends BaseSQL{
    private $id;
    private $supertype;
    private $type;
    private $subtype;
    private $layout;
    private $rarity;

    public function __construct() {
        parent::__construct();
    }

    public function init(array $type, bool $set = false)
    {
        $data = $this->parseType($type);
        $dbType = $this->findOne($data);
        if(!$dbType) {
            //TODO: Probaly prevent multiple query
            // Make transaction for execution
            $this->insert($data);
            if($set) {
                $this->id = $this->lastInsertedId();
            }
        }
        else {
            $this->id = $dbType[0];
        }
    }

    public function parseType(array $type): array {
        $type["supertype"] = implode(" ", $type["supertype"]);
        $type["subtype"] = implode(" ", $type["subtype"]);
        $type["type"] = implode(" ", $type["type"]);
        return $type;
    }

    public function getAllType(): array {
        $result = [
            'supertype' => $this->supertype,
            'type' => $this->type,
            'subtype' => $this->subtype,
            'layout' => $this->layout,
            'rarity' => $this->rarity,
        ];
        return $result;
    }

    public function getId() {
        return $this->id;
    }
}