<?php
namespace MVC\Models;

use \MVC\Core\BaseSQL;
use \MVC\VO\CardIdentity;
use \MVC\VO\CardProps;

//TODO: Override save method for each VO to return query
// merged and executed by Card

//Maybe change save to an abstract method -> not a priority

//Maybe do a Card QueryBuilder
// would imply to probably do a <Entity> QueryBuilder
class Card
{

    private $id;

    public $identity;

    public $props;

    private $mana;

    private $type;

    private $release;

    private $legalities;

    public $basesql;


    public function __construct(BaseSQL $bsql,
                                CardIdentity $identity,
                                CardProps $props,
                                Mana $mana,
                                Type $type,
                                Releases $release,
                                Legalities $legalities)
    {
        $this->identity = $identity;
        $this->props = $props;
        $this->mana = $mana;
        $this->type = $type;
        $this->release = $release;
        $this->legalities = $legalities;
        $this->basesql = $bsql;
    }

    public function initMana(array $mana, bool $set) {
        $this->mana->init($mana);
    }
    public function initType(array $type, bool $set) {
        $this->type->init($type);
    }
    public function initRelease(array $release, bool $set) {
        $this->release->init($release);
    }
    public function initLegalities(array $legalities, bool $set) {
        $this->legalities->init($legalities);
    }
    public function save() {
        $data = [
            'releases_id' => $this->release->getId(),
            'type_id' => $this->type->getId(),
            'legalities_id' => $this->legalities->getId(),
            'mana_id' => $this->mana->getId(),

        ];
        array_push($data, $this->identity->getAllIdentity());
        array_push($data, $this->props->getAllProps());
        $this->basesql->insert($this, $data);
    }
}
