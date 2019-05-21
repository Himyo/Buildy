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
        $dbType = $this->basesql->findOne($type);
        if(!$dbType) {
            //TODO: Probaly prevent multiple query
            // Make transaction for execution
            var_dump($type);
            $this->basesql->insert($this, $type);
            if($set) {
                $this->id = $this->basesql->pdo->lastInsertId();
            }
        }
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

    public function getId(): integer {
        return $this->id;
    }
}