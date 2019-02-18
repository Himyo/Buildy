<?php

class FormBuilder {

    protected $form;

    public function __construct($slug) {
        $this->setForm(new Form($slug));
    }

    abstract public function make();
    
    public function getForm()
    {
        return $this->form;
    }

    public function setForm($form)
    {
        $this->form = $form;

        return $this;
    }

}