<?php
namespace Lib;


class FormBuilder {

    protected $form;
    protected $data;

    //TODO: Check the type of $form to be Form.class
    public function __construct(Form $form) {
        $this->setForm($form);
    }

    public function getForm() {
        return $this->form;
    }

    public function setForm($form) {
        $this->form = $form;
    }

    public function getErrors() {
        if(!$this->form->isValid()) {
            echo '<div class="alert alert-danger">
                    <ul>';
            foreach($this->form->getErrors() as $errors) {
                echo '<li>'.$errors.'</li>';
            }
            echo '</ul></div>';
        }
    }
    public function setData($data) {
        $this->data = $data;
    }

    public function getConfig() {
        $action = $this->form->getAction();
        $method = $this->form->getMethod();
        $class = $this->form->getClassname();
        $id = $this->form->getId();
        return ' id="'.$id.'" action="'.$action.'" method="'.$method.'" class="'.$class.'" ';
    }

    public function getField() {
        $fieldsHtml = "";
        foreach($this->form->getFields() as $field) {
            if($field->getType() === 'password') { unset($this->data[$field->getId()]); }
            $data = $this->data[$field->getPlaceholder()]??"";
            $fieldsHtml .='
                <input
                type="'.$field->getType().'"
                name="'.$field->getId().'"
                placeholder="'.$field->getPlaceholder().'"
                id="'.$field->getId().'"
                class="'.$field->getClassname().'"
                value="'.$data.'"><br>';
        }
        $fieldsHtml .= '<input type="submit" class="btn btn-primary btn-block" value="Submit">';
        return $fieldsHtml;
    }

    public function make() {
        $this->getErrors();
        echo '<form '.$this->getConfig().'> '
        .$this->getField().
        '</form>';
    }
}
