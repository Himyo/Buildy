<?php
namespace MVC\Lib;

trait Supplier {

    public function supply(array $data) {
        if(empty($data)) {
            return;
        }
        //TODO test if work with low chara variable
        //TODO refacto to cleaner method
        $methods = array_flip(get_class_methods(get_class($this)));
        foreach($data as $name => $value) {
            if(property_exists($this, $name)) {
                $method = "set".ucwords($name);
                if(isset($methods[$method])) {
                    $this->$method($value);
                }
            }
        }
        return $this;
    }


    public function extract() {
        return get_object_vars($this);
    }
}