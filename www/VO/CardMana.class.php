<?php


namespace MVC\VO;


class CardMana
{
    private $id;
    private $colors;
    private $manaCost;
    private $cmc;

    public function __construct(array $mana)
    {
        $this->manaCost = $mana['manaCost'];
        $this->cmc = $mana['cmc'];
        $this->colors = $mana['colors'];
    }
}