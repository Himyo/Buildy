<?php
class Form extends Validator {

    // CONFIG
    protected $id;
    protected $method;
    protected $action;
    protected $className;
    protected $submitText;
    protected $resetText;
    
    // DATA 
    protected $fields;

    public function __construct($slug) {
        //TODO Add id if neccesary
        $method = Routing::getRoute($slug)["m"];
        $this->setMethod("_".$method);
        $this->setAction($slug);
    }


    public function addField($field) {
        $label= $field->getLabel();
        $fields[$label] = $field;
    }
    public function removeField($fieldName) {
        unset($this->fields[$fieldName]);
    }

    public function makeView() {
        $view = "";
        foreach($this->fields as $field) {
            $view.=$field->make().'<br />';
        }
        return $view;
    }

    public function isValid() {
        foreach($this->fields as $field){
            if(!$field->isValid()){
                return false;
            }
        }
        return true;
    }


    public function getFields() {
        return $this->fields;
    }    

    /**
     * Get the value of id
     */ 
    public function getId()
    {
        return $this->id;
    }

    /**
     * Set the value of id
     *
     */ 
    public function setId($id)
    {
        $this->id = $id;
    }

    /**
     * Get the value of method
     */ 
    public function getMethod()
    {
        return $this->method;
    }

    /**
     * Set the value of method
     *
     */ 
    public function setMethod($method)
    {
        $this->method = $method;
    }

    /**
     * Get the value of action
     */ 
    public function getAction()
    {
        return $this->action;
    }

    /**
     * Set the value of action
     *
     */ 
    public function setAction($action)
    {
        $this->action = $action;
    }

    /**
     * Get the value of className
     */ 
    public function getClassName()
    {
        return $this->className;
    }

    /**
     * Set the value of className
     *
     */ 
    public function setClassName($className)
    {
        $this->className = $className;
    }

    /**
     * Get the value of submitText
     */ 
    public function getSubmitText()
    {
        return $this->submitText;
    }

    /**
     * Set the value of submitText
     *
     */ 
    public function setSubmitText($submitText)
    {
        $this->submitText = $submitText;
    }

    /**
     * Get the value of resetText
     */ 
    public function getResetText()
    {
        return $this->resetText;
    }

    /**
     * Set the value of resetText
     *
     */ 
    public function setResetText($resetText)
    {
        $this->resetText = $resetText;
    }
}