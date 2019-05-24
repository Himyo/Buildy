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
class Cards
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
        $this->mana->init($mana, $set);
    }
    public function initType(array $type, bool $set) {
        $this->type->init($type, $set);
    }
    public function initRelease(array $release, bool $set) {
        $this->release->init($release, $set);
    }
    public function initLegalities(array $legalities, bool $set) {
        $this->legalities->init($legalities, $set);
    }
    public function save() {
        $data = [
            'releases_id' => $this->release->getId(),
            'type_id' => $this->type->getId(),
            'legalities_id' => $this->legalities->getId(),
            'mana_id' => $this->mana->getId(),

        ];
        $data = array_merge($data, $this->identity->getAllIdentity());
        $data = array_merge($data, $this->props->getAllProps());
        echo "<pre>";
        var_dump($data);
        $this->basesql->insert($this, $data);
    }
}
