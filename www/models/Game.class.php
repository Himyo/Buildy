<?php
namespace Model;

class Game {

    private $id;
    private $name;
    private $extension;
    private $type;
    private $url;
    private $apiKey;

    /**
     * Game constructor.
     * @param $id
     * @param $name
     * @param $extension
     * @param $type
     * @param $url
     */
    public function __construct($name, $extension, $type, $url) {
        $this->name = $name;
        $this->extension = $extension;
        $this->type = $type;
        $this->apiKey = $url;
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
    public function getType() {
        return $this->type;
    }

    /**
     * @param mixed $type
     */
    public function setType($type): void {
        $this->type = $type;
    }

    /**
     * @return mixed
     */
    public function getApiKey() {
        return $this->apiKey;
    }

    /**
     * @param mixed $apiKey
     */
    public function setApiKey($apiKey): void {
        $this->apiKey = $apiKey;
    }

    /**
     * @return mixed
     */
    public function getUrl() {
        return $this->url;
    }

    /**
     * @param mixed $url
     */
    public function setUrl($url): void {
        $this->url = $url;
    }





}