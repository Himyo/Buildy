<?php
namespace MVC\Lib;

 use MVC\Core\Routing;

class Form {

    use Supplier;
    // CONFIG
    protected $id;
    protected $method;
    protected $action;
    protected $className = "class-form";
    protected $submitText = "Confirm";
    protected $resetText;
    protected $validator;
    // DATA 
    protected $fields;

    public function __construct($slug) {
        $slugData = Routing::getRoute($slug);
        $this->setMethod($slugData['method']);
        $this->setAction($slug);
        $this->validator = new Validator();
    }


    public function addField(Field $field) {
        $id = $field->getId();
        $this->fields[$id] = $field;
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
        return $this->validator->isValid();
    }

    public function validate($data) {
        $this->validator->check($this->fields, $data);
    }

    public function getErrors() {
        return $this->validator->getError();
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

    // Method format for the global variable $GLOBALS
    public function getGlobalMethod() {
        return '_'.$this->method;
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
    public function getClassname()
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