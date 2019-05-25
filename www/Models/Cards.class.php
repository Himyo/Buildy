<?php
namespace MVC\Models;

use \MVC\Core\BaseSQL;
use MVC\Lib\Supplier;
use \MVC\VO\CardIdentity;
use \MVC\VO\CardProps;

//TODO: Override save method for each VO to return query
// merged and executed by Card

//Maybe change save to an abstract method -> not a priority

//Maybe do a Card QueryBuilder
// would imply to probably do a <Entity> QueryBuilder
class Cards extends BaseSQL {

    use Supplier;

    private $id;

    public $identity;

    public $props;

    /**
     * @return Mana
     */
    public function getMana(): Mana
    {
        return $this->mana;
    }

    /**
     * @return Type
     */
    public function getType(): Type
    {
        return $this->type;
    }

    /**
     * @return Releases
     */
    public function getRelease(): Releases
    {
        return $this->release;
    }

    /**
     * @return Legalities
     */
    public function getLegalities(): Legalities
    {
        return $this->legalities;
    }

    private $mana;

    private $type;

    private $release;

    private $legalities;


    public function __construct(
                                CardIdentity $identity,
                                CardProps $props,
                                Mana $mana,
                                Type $type,
                                Releases $release,
                                Legalities $legalities)
    {
        parent::__construct();
        $this->identity = $identity;
        $this->props = $props;
        $this->mana = $mana;
        $this->type = $type;
        $this->release = $release;
        $this->legalities = $legalities;
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

}
