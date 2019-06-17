<?php


namespace MVC\Models;

use MVC\Core\BaseSQL;
use MVC\Lib\Form;
use MVC\Lib\InputField;

class Tournaments extends BaseSQL
{
    private $id;
    private $createdAt;
    private $endedAt;
    private $title;
    private $description;
    private $nbContenders;
    private $gamesId = 1;

    public function __construct() {
        parent::__construct();
    }

    public function tournamentsForm() {
        $slug = "/create/tournament";
        $name = new InputField([
            "type"=>"text",
            "placeholder"=>"Title Goes There",
            "classname" => "container",
            "required"=>true,
            "id"=>"title",
            "minlength"=>5,
            "maxlength"=>75,
            "error" => "The title cannot be empty"
        ]);
        $description = new InputField([
            "type"=>"text",
            "placeholder"=>"Description Goes There",
            "classname" => "container",
            "required"=>true,
            "id"=>"content",
            "minlength"=>250,
            "error" => "No content was written"
        ]);
        $nbContenders = new InputField([
            "type"=>"number",
            "placeholder"=>"Number of Contenders Goes There",
            "classname" => "container",
            "required"=>true,
            "id"=>"content",
            "error" => "No number above 0 was given"
        ]);
        $startAt = new InputField([
            "type"=>"date",
            "placeholder"=>"Number of Contenders Goes There",
            "classname" => "container",
            "required"=>true,
            "id"=>"content",
            "error" => "Not valid date given "
        ]);
        $endAt = new InputField([
            "type"=>"date",
            "placeholder"=>"Number of Contenders Goes There",
            "classname" => "container",
            "required"=>true,
            "id"=>"content",
            "error" => "Not valid date given "
        ]);
        $form = new Form($slug);
        $fields = [$name, $description, $nbContenders, $startAt, $endAt];
        $form->addFields($fields);

        return $form;
    }

}