<?php


namespace MVC\VO;


class CardType
{
    private $supertype;
    private $type;
    private $subtype;
    private $layout;
    private $rarity;

    public function __construct(array $type)
    {
        $this->supertype = $type['supertype'];
        $this->type = $type['type'];
        $this->subtype = $type['subtype'];
        $this->layout = $type['layout'];
        $this->rarity = $type['rarity'];
    }
}