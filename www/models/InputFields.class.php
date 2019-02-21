<?php

class InputFields extends Field {
    

    protected $minLength;
    protected $maxLength;

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

    public function setMinLength($x) {
        $this->minlength = $x;
    }
    public function setMaxLength($x) {
        $this->maxlength = $x;
    }

    public function getMaxLength() {
        return $this->maxlength;
    }

    public function getMinLength() {
        return $this->minlength;
    }
}