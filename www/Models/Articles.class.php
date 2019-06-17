<?php


namespace MVC\Models;


use MVC\Core\BaseSQL;
use MVC\Lib\InputField;
use MVC\Lib\Form;

class Articles extends BaseSQL {

    public $id = null;
    public $name;
    public $content;
    public $created_at;
    public $users_id;

    public function __construct()
    {
        parent::__construct();

    }

    public function articleForm() {
        $slug = "/create/articles";
        $title = new InputField([
            "type"=>"text",
            "placeholder"=>"Title Goes There",
            "classname" => "container",
            "required"=>true,
            "id"=>"title",
            "minlength"=>5,
            "maxlength"=>50,
            "error" => "The title cannot be empty"
        ]);

        $content = new InputField([
            "type"=>"text",
            "placeholder"=>"Actual Content Goes There",
            "classname" => "container",
            "required"=>true,
            "id"=>"content",
            "minlength"=>250,
            "error" => "No content was written"
        ]);
        $form = new Form($slug);
        $fields = [$title, $content];
        $form->addFields($fields);

        return $form;
    }

}