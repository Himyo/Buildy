<?php


trait Supplier {

    public function supply(array $data) {
        if(empty($data)) {
            return;
        }
        //TODO test if work with low chara variable
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
        $array = [];
        $methods = get_class_methods(get_class($this));
        foreach($methods as $method) {
            if(substr($method, 0, 3) == "get") {
                $array[lcfirst(substr($method, 3))] = $this->$method();
            }
        }
        return $array;
    }
}