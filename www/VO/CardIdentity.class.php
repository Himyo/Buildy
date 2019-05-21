<?php


namespace MVC\VO;


use MVC\Lib\Supplier;

class CardIdentity
{
    use Supplier;
    private $multiverse_id;
    private $lore;
    private $name;
    private $game_id = 1;
    private $image_url;

    public function __construct(){}

    public function _init(array $identity)
    {
        $this->multiverseId = $identity['multiverse_id'];
        $this->name = $identity['name'];
        $this->image_url = $identity['imageUrl'];
    }

    public function getAllIdentity(): array {
        $result = [
            'multiverse_id' => $this->multiverse_id,
            'name' => $this->name,
            'image_url' => $this->image_url,
            'game_id' => $this->game_id,
        ];
        return $result;
    }
}