<?php
namespace Model;

class Extension {

    private $id;
    private $name;
    private $releaseDate;
    private $border;

    /**
     * Set constructor.
     * @param $id
     * @param $name
     * @param $releaseDate
     * @param $border
     */
    public function __construct($id, $name, $releaseDate, $border) {
        $this->id = $id;
        $this->name = $name;
        $this->releaseDate = $releaseDate;
        $this->border = $border;
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
    public function getBorder() {
        return $this->border;
    }

    /**
     * @param mixed $border
     */
    public function setBorder($border): void {
        $this->border = $border;
    }

    //API METHODS

}