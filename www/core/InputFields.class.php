<?php

class InputFields extends Field {
    

    protected $minlength;
    protected $maxlength;

    public function __construct($data = []) {
        parent::__construct($data);
    }
    
    public function make() {

        $form = "";
        $form .= "<label>".$this->placeholder."</label>
            <input type='".$this->type."' name=
            '".$this->name."value='".$this->value."' ";
        
        if($this->maxLength >= $this->minLength +1){
            $form .="maxlength='".$this->maxlength."' ";
        }
        if($this->minLength > 0){
            $form .="minlength='".$this->minLength."' ";
        }
        $form .= "/>";
        return $form;
    }

    public function setMinlength($x) {
        $this->minlength = $x;
    }
    public function setMaxlength($x) {
        $this->maxlength = $x;
    }

    public function getMaxlength() {
        return $this->maxlength;
    }

    public function getMinlength() {
        return $this->minlength;
    }
}