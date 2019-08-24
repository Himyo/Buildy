<?php


namespace MVC\Controllers;


use MVC\Core\Routing;
use MVC\Core\View;

abstract class Controller
{

    public function listAction(array $data = ['*'], $editable = []) {
        $class = get_called_class();
        $modelName = substr($class, 0, strlen($class)-strlen('Controller'));
        $modelName = lcfirst(substr($modelName, strrpos($modelName, '\\') +1));
        $databaseData = $this->$modelName->find($data);
        $databaseData['editable'] =  $editable;
        $databaseData['modelName'] = $modelName;

        $view = new View('database', 'back');
        $view->assign("data", $databaseData);
    }

    public function deleteAction() {
        $method = Routing::getMethod('/delete');
        $data = $GLOBALS['_'.$method];

        $class = get_called_class();
        $modelName = substr($class, 0, strlen($class) - strlen('Controller'));
        $modelName = lcfirst(substr($modelName, strrpos($modelName, '\\') + 1));

        if ($_SERVER['REQUEST_METHOD'] == $method && !empty($data)) {
            $this->$modelName->delete($data);
        }
        header('Location: /list/'.$modelName);
        exit();
    }

    public function editAction() {
        $method = Routing::getMethod('/edit');
        $data = $GLOBALS['_'.$method];

        $class = get_called_class();
        $modelName = substr($class, 0, strlen($class) - strlen('Controller'));
        $modelName = lcfirst(substr($modelName, strrpos($modelName, '\\') + 1));

        if ($_SERVER['REQUEST_METHOD'] == $method && !empty($data && isset($data['id']))) {
           $id = $data['id'];
           unset($data['id']);
           $this->$modelName->edit($data, ['id' => $id]);
        }
        header('Location: /list/'.$modelName);
        exit();
    }

    public function createAction() {
        $method = Routing::getMethod('/create');
        $data = $GLOBALS['_'.$method];

        $class = get_called_class();
        $modelName = substr($class, 0, strlen($class) - strlen('Controller'));
        $modelName = lcfirst(substr($modelName, strrpos($modelName, '\\') + 1));


        if($_SERVER['REQUEST_METHOD'] == $method && !empty($data)) {
            //TODO: Auth object to stock id an send it with the form
            $data['users_id'] = 2;
            $this->$modelName->insert($data);
        }
        header('Location: /list/'.$modelName);
        exit();

    }
}