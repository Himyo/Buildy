<?php

namespace MVC\Core;
use MVC\Model\Users;

class Auth {

    
    private $id;
    private $lastname;
    private $firstname;
    private $email;
    private $token;

    /**
     * Auth constructor.
     * @param $token
     */
    public function __construct(Users $user) {
        if (!isset($_SESSION["token"])) {
            die("AUCUN UTILISATEUR CONNECTE");
        } else {
            $this->token = $_SESSION["token"];
        }
        $this->id = $user->getId();
        $this->lastname = $user->getLastname();
        $this->firstname = $user->getFirstname();
        $this->email = $user->getEmail();
    }



    /**
     * @return null
     */
    public function getId() {
        return $this->id;
    }

    /**
     * @return mixed
     */
    public function getLastname() {
        return $this->lastname;
    }

    /**
     * @return mixed
     */
    public function getFirstname() {
        return $this->firstname;
    }

    /**
     * @return mixed
     */
    public function getEmail() {
        return $this->email;
    }

    /**
     * @return mixed
     */
    public function getToken() {
        return $this->token;
    }

}