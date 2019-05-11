<?php
namespace MVC\Models;
use CardQueryBuilder;
use \MVC\Core\BaseSQL;
use \MVC\VO\CardIdentity;
use \MVC\VO\CardProps;
use \MVC\VO\CardMana;
use \MVC\VO\CardType;
use \MVC\VO\CardSet;

//TODO: Override save method for each VO to return query
// merged and executed by Cardo

//Maybe change save to an abstract method -> not a priority

//Maybe do a Card QueryBuilder
// would imply to probably do a <Entity> QueryBuilder
class Card extends BaseSQL
{

    private $id;

    private $cardIdentity;

    private $cardProps;

    private $cardMana;

    private $cardType;

    private $cardSet;

    private $voRules;


    public function __construct(CardIdentity $cardIdentity, CardProps $cardProps, CardMana $cardMana, CardType $cardType, CardSet $cardSet)
    {
        $this->cardIdentity = $cardIdentity;
        $this->cardProps = $cardProps;
        $this->cardMana = $cardMana;
        $this->cardType = $cardType;
        $this->cardSet = $cardSet;
    }

}
