<?php


namespace MVC\VO;


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

    public function init(array $type)
    {
        $this->supertype = $type['supertype'];
        $this->type = $type['type'];
        $this->subtype = $type['subtype'];
        $this->layout = $type['layout'];
        $this->rarity = $type['rarity'];
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
}