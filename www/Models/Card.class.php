<?php
namespace MVC\Models;

use CardQueryBuilder;
use \MVC\Core\BaseSQL;
use \MVC\VO\CardIdentity;
use \MVC\VO\CardProps;
use MVC\VO\Mana;
use MVC\VO\Type;

//TODO: Override save method for each VO to return query
// merged and executed by Cardo

//Maybe change save to an abstract method -> not a priority

//Maybe do a Card QueryBuilder
// would imply to probably do a <Entity> QueryBuilder
class Card
{

    private $id;

    private $identity;

    private $props;

    private $mana;

    private $type;

    private $release;

    private $voRules;

    public $basesql;


    public function __construct(BaseSQL $bsql, CardIdentity $identity, CardProps $props, Mana $mana, Type $type, Releases $release)
    {
        $this->identity = $identity;
        $this->props = $props;
        $this->mana = $mana;
        $this->type = $type;
        $this->release = $release;
        $this->basesql = $bsql;
    }

}
