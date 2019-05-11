<?php


namespace MVC\VO;


class CardIdentity
{
    private $multiverseId;
    private $name;
    private $alias; //TODO: implode
    private $game_id = 1;
    private $imageUrl;

    public function __construct(array $identity)
    {
        $this->multiverseId = $identity['multiverseId'];
        $this->name = $identity['name'];
        $this->alias = implode($identity['alias']);
        $this->imageUrl = $identity['imageUrl'];
    }
}