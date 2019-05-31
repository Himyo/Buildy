<?php


namespace MVC\Models;

use MVC\Core\BaseSQL;
use MVC\Lib\Form;
use MVC\Lib\InputField;

class Decks extends BaseSQL {

    private $id;
    private $name;
    private $legalities_id;
    private $users_id;
    private $image_url;

    public function __construct() {
        parent::__construct();
    }

    public function deckForm() {
        $slug = "/fillDeck";
        $name =  new InputField([
            "type"=>"text",
            "placeholder"=>"Name Of The Deck Goes There",
            "classname" => "container",
            "required"=>true,
            "id"=>"name",
            "minlength"=>5,
            "maxlength"=>50,
            "error" => "The name cannot be empty"
        ]);
        //TODO: Add img field
        $form = new Form($slug);
        $form->addField($name);

        return $form;
    }
}