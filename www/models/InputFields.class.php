<?php

class InputFields extends Field {
    

    protected $minLength;
    protected $maxLength;

    public function make() {

        $form = "";
        $form .= "<label>".$this->label."</label><input
            type='".$this->type."' name='".$this->name."' ";
        $form .="value ='".$this->value."' ";
        
        if($this->maxlength >= $this->minlength +1){
            $form .="maxlength='".$this->maxlength."' ";
        }
        if($this->minlength > 0){
            $form .="minlength='".$this->minlength."' ";
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