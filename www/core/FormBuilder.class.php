<?php

class FormBuilder {

    protected $form;
    protected $data;

    public function __construct($slug) {
        $this->setForm(new Form($slug));
        $this->data = $data;
    }
    
    public function getForm() {
        return $this->form;
    }

    public function setForm($form) {
        $this->form = $form;
    }

    public function isValid() {
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
        $class = $this->form->getClassName();
        $id = $this->form->getId();
        echo "action=".$action;
        echo "method=".$method;
        echo "class=".$class;
        echo "id=".$id;
    }

    public function getField() {
        echo '<div class="form-group"><div class="form-label-group">';
        foreach($this->form->getFields() as $field) {
            if($field->getType() === 'password') { unset($data[$field->getId()]); }
            echo '<input 
            type='.$field->getType().'
            name='.$field->getName().'
            placeholder='.$field->getPlaceholder().'
            id='.$field->getId().'
            class='.$field->getClass().'
            value='.$this->data[$field->getId()]??"".'>';

            echo '<label for="'.$field->getId().'">'.$field->getPlaceholder().'</label>';
        }
        echo '</div></div>'; 
        echo '<input type="submit" class="btn btn-primary btn-block" value="'.$this->form->getSubmit().'">"';
    }

    public function make() {
        $this->isValid();
        $this->getConfig();
        $this->getField();
    }
}
