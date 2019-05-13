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

    public function getAllProps(): array {
        $result = [
            'toughness' => $this->toughness,
            'power' => $this->power,
            'text' => $this->text,
        ];
        return $result;
    }
}