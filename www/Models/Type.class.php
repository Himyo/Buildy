<?php


namespace MVC\Models;


use MVC\Core\BaseSQL;

class Type
{
    private $id;
    private $supertype;
    private $type;
    private $subtype;
    private $layout;
    private $rarity;
    public $basesql;

    public function __construct(BaseSQL $bsql)
    {
        $this->basesql = $bsql;
    }

    public function init(array $type, bool $set = false)
    {
        $data = $this->parseType($type);
        $dbType = $this->basesql->findOne($this, $data);
        if(!$dbType) {
            //TODO: Probaly prevent multiple query
            // Make transaction for execution
            $this->basesql->insert($this, $data);
            if($set) {
                $this->id = $this->basesql->pdo->lastInsertId();
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