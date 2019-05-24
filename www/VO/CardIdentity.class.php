<?php


namespace MVC\VO;


use MVC\Lib\Supplier;

class CardIdentity
{
    use Supplier;
    private $multiverse_id;
    private $lore;
    private $name;
    private $ruling;
    private $game_id = 1;
    private $image_url;

    public function __construct(){}

    public function init(array $identity)
    {
        $this->multiverse_id = $identity['multiverse_id'];
        $this->name = $identity['name'];
        $this->lore = $identity['lore'];
        $this->image_url = $identity['image_url'];
        $this->ruling = isset($identity['ruling'][0]['text']) ? $identity['ruling'][0]['text'] : "none";
    }

    public function getAllIdentity(): array {
        return [
            'multiverse_id' => $this->multiverse_id,
            'name' => $this->name,
            'lore' => $this->lore,
            'ruling' => $this->ruling,
            'image_url' => $this->image_url,
            'game_id' => $this->game_id,
        ];
    }
}