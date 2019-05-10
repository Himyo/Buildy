<?php
namespace MVC\Models;

class Card extends Game {

    private $id;
    private $name;
    private $colors;
    private $superType;
    private $types;
    private $subTypes;
    private $rarity;
    private $extension;
    private $setName;
    private $text;
    private $toughness;
    private $power;
    private $manaCost;
    private $imageUrl;
    private $releaseDate;
    private $gameFormat;

    /**
     * Card constructor.
     * @param $id
     * @param $name
     * @param $colors
     * @param $superType
     * @param $types
     * @param $subTypes
     * @param $rarity
     * @param $set
     * @param $setName
     * @param $text
     * @param $toughness
     * @param $power
     * @param $manaCost
     * @param $imageUrl
     * @param $releaseDate
     * @param $gameFormat
     */
    public function __construct($id, $name, $colors, $superType, $types, $subTypes, $rarity, $set, $setName, $text, $toughness, $power, $manaCost, $imageUrl, $releaseDate, $gameFormat) {
        $this->id = $id;
        $this->name = $name;
        $this->colors = $colors;
        $this->superType = $superType;
        $this->types = $types;
        $this->subTypes = $subTypes;
        $this->rarity = $rarity;
        $this->extension = $set;
        $this->setName = $setName;
        $this->text = $text;
        $this->toughness = $toughness;
        $this->power = $power;
        $this->manaCost = $manaCost;
        $this->imageUrl = $imageUrl;
        $this->releaseDate = $releaseDate;
        $this->gameFormat = $gameFormat;
    }

    /**
     * @return mixed
     */
    public function getId() {
        return $this->id;
    }

    /**
     * @param mixed $id
     */
    public function setId($id): void {
        $this->id = $id;
    }

    /**
     * @return mixed
     */
    public function getName() {
        return $this->name;
    }

    /**
     * @param mixed $name
     */
    public function setName($name): void {
        $this->name = $name;
    }

    /**
     * @return mixed
     */
    public function getColors() {
        return $this->colors;
    }

    /**
     * @param mixed $colors
     */
    public function setColors($colors): void {
        $this->colors = $colors;
    }

    /**
     * @return mixed
     */
    public function getSuperType() {
        return $this->superType;
    }

    /**
     * @param mixed $superType
     */
    public function setSuperType($superType): void {
        $this->superType = $superType;
    }

    /**
     * @return mixed
     */
    public function getTypes() {
        return $this->types;
    }

    /**
     * @param mixed $types
     */
    public function setTypes($types): void {
        $this->types = $types;
    }

    /**
     * @return mixed
     */
    public function getSubTypes() {
        return $this->subTypes;
    }

    /**
     * @param mixed $subTypes
     */
    public function setSubTypes($subTypes): void {
        $this->subTypes = $subTypes;
    }

    /**
     * @return mixed
     */
    public function getRarity() {
        return $this->rarity;
    }

    /**
     * @param mixed $rarity
     */
    public function setRarity($rarity): void {
        $this->rarity = $rarity;
    }

    /**
     * @return mixed
     */
    public function getExtension() {
        return $this->extension;
    }

    /**
     * @param mixed $extension
     */
    public function setExtension($extension): void {
        $this->extension = $extension;
    }

    /**
     * @return mixed
     */
    public function getSetName() {
        return $this->setName;
    }

    /**
     * @param mixed $setName
     */
    public function setSetName($setName): void {
        $this->setName = $setName;
    }

    /**
     * @return mixed
     */
    public function getText() {
        return $this->text;
    }

    /**
     * @param mixed $text
     */
    public function setText($text): void {
        $this->text = $text;
    }

    /**
     * @return mixed
     */
    public function getToughness() {
        return $this->toughness;
    }

    /**
     * @param mixed $toughness
     */
    public function setToughness($toughness): void {
        $this->toughness = $toughness;
    }

    /**
     * @return mixed
     */
    public function getPower() {
        return $this->power;
    }

    /**
     * @param mixed $power
     */
    public function setPower($power): void {
        $this->power = $power;
    }

    /**
     * @return mixed
     */
    public function getManaCost() {
        return $this->manaCost;
    }

    /**
     * @param mixed $manaCost
     */
    public function setManaCost($manaCost): void {
        $this->manaCost = $manaCost;
    }

    /**
     * @return mixed
     */
    public function getImageUrl() {
        return $this->imageUrl;
    }

    /**
     * @param mixed $imageUrl
     */
    public function setImageUrl($imageUrl): void {
        $this->imageUrl = $imageUrl;
    }

    /**
     * @return mixed
     */
    public function getReleaseDate() {
        return $this->releaseDate;
    }

    /**
     * @param mixed $releaseDate
     */
    public function setReleaseDate($releaseDate): void {
        $this->releaseDate = $releaseDate;
    }

    /**
     * @return mixed
     */
    public function getGameFormat() {
        return $this->gameFormat;
    }

    /**
     * @param mixed $gameFormat
     */
    public function setGameFormat($gameFormat): void {
        $this->gameFormat = $gameFormat;
    }


    //API METHODS

    public function getOne($gameUrl, $id) {
        $response = json_decode(file_get_contents("{$gameUrl}/{$id}"));

        return $response;
    }

    public function getByColors($gameUrl, $colors) {
    }

    public function getByPower($gameUrl, $power) {
    }

    public function getByTypes($gameUrl, $types) {
    }

    public function getByManaCost($gameUrl, $manaCost) {
    }

    public function getByName($gameUrl, $name) {
    }


}