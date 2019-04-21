<?php

class InputField extends Field {
    

    protected $minLength;
    protected $maxLength;

    public function __construct($data = []) {
        parent::__construct($data);
    }
    
    public function make() {

        $form = "";
        $form .= "<label>".$this->placeholder."</label>
            <input type='".$this->type."' name=
            '".$this->name."value='".$this->value."' ";
        
        if($this->maxLength >= $this->minLength +1){
            $form .="maxlength='".$this->maxLength."' ";
        }
        if($this->minLength > 0){
            $form .="minlength='".$this->minLength."' ";
        }
        $form .= "/>";
        return $form;
    }

    public function setMinLength($x) {
        $this->minLength = $x;
    }
    public function setMaxLength($x) {
        $this->maxLength = $x;
    }

    public function getMaxLength() {
        return $this->maxLength;
    }

    public function getMinLength() {
        return $this->minLength;
    }
}