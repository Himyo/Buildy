<?php
namespace MVC\Models;
use CardQueryBuilder;

class Card
{

    private $id;

    private $cardIdentity;
    private $multiverseId;
    private $name;
    private $alias; //to implode
    private $imageUrl;

    private $cardProps;
    private $toughness;
    private $power;
    private $rarity;
    private $text;


    private $cardMana;
    private $colors;
    private $manaCost;
    private $cmc;

    private $cardType;
    private $superType;
    private $types;
    private $subTypes;
    private $layout;

    private $cardSet;
    private $setName;
    private $extension;

    private $voRules;


    public function __construct($cardIdentity, $cardProps, $cardMana, $cardType, $cardSet)
    {
        $this->cardIdentity = $cardIdentity;
        $this->cardProps = $cardProps;
        $this->cardMana = $cardMana;
        $this->cardSet = $cardSet;
        $this->cardType = $cardType;
    }
}
