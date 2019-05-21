<?php


namespace MVC\VO;


use MVC\Lib\Supplier;

class CardProps
{
    use Supplier;
    private $toughness;
    private $power;
    private $text;

    public function __construct(){}

    public function init(array $props)
    {
        $this->toughness = $props['toughness'];
        $this->power = $props['power'];
        $this->text = $props['text'];
    }

    public function getAllProps(): array {
        $result = [
            'toughness' => $this->toughness,
            'power' => $this->power,
            'text' => $this->text,
        ];
        return $result;
    }
}