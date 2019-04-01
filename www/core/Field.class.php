<?php
//TODO make abstract class ?
class Field {

    protected $id;
    protected $type;
    protected $placeholder;
    protected $classname = 'class-form-fields';
    protected $required;
    protected $error;
    protected $value;

    //TODO Generate error message
    public function __construct($data = []) {
        $this->supply($data);
    }
        
    public function getId() {
        return $this->id;
    }

    public function setId($id) {
        $this->id = $id;
    }

    public function getType() {
        return $this->type;
    }

    public function setType($type) {
        $this->type = $type;
    }

    public function getPlaceholder() {
        return $this->placeholder;
    }

    public function setPlaceholder($placeholder) {
        $this->placeholder = $placeholder;
    }

    public function getError() {
        return $this->error;
    }
    
    public function setError($error) {
        $this->error = $error;
    }

    public function getValue() {
        return $this->value;
    }

    public function setValue($value) {
        $this->value = $value;
    }

    public function getRequired() {
        return $this->required;
    }

    public function setRequired($bool) {
        $this->required = $bool;
    }

    public function setClassname($class) {
        $this->classname = $class;
    }

    public function getClassname() {
        return $this->classname;
    }
}