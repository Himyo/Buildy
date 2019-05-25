<?php


namespace MVC\Controllers;


abstract class Controller
{
    public function displayTable(String $modelName) {
        $model = new $modelName();
        $model->findAll();
    }
}