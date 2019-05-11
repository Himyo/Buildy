<?php


namespace MVC\VO;


class CardProps
{
    private $toughness;
    private $power;
    private $text;

    public function __construct(array $props)
    {
        $this->toughness = $props['toughness'];
        $this->power = $props['power'];
        $this->text = $props['text'];
    }

}