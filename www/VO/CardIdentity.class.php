<?php


namespace MVC\VO;


class CardIdentity
{
    private $multiverseId;
    private $name;
    private $alias;
    private $game_id = 1;
    private $imageUrl;

    public function __construct(CardIdentity $identity)
    {
        $this->multiverseId = $identity['multiverseId'];
        $this->name = $identity['name'];
        $this->alias = implode(', ', $identity['alias']);
        $this->imageUrl = $identity['imageUrl'];
    }

    public function getAllIdentity(): array {
        $result = [
            'multiverseId' => $this->multiverseId,
            'name' => $this->name,
            'alias' => $this->alias,
            'imageUrl' => $this->imageUrl,
        ];
        return $result;
    }
}