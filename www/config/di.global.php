<?php

 use MVC\Core\BaseSQL;

 use MVC\Models\Users;
 use MVC\Models\Card;
 use MVC\Controllers\CardController;
 use MVC\Controllers\UsersController;
 use MVC\Controllers\PagesController;

 use MVC\VO\DbDriver;
 use MVC\VO\DbHost ;
 use MVC\VO\DbName;
 use MVC\VO\DbUser;
 use MVC\VO\DbPwd;

$container = [
    DbDriver::class => function($container) {
        return new DbDriver($container['config']['db']['driver']);
    },
    DbHost::class => function($container) {
        return new DbHost($container['config']['db']['host']);
    },
    DbName::class => function($container) {
        return new DbName($container['config']['db']['name']);
    },
    DbUser::class => function($container) {
        return new DbUser($container['config']['db']['user']);
    },
    DbPwd::class => function($container) {
        return new DbPwd($container['config']['db']['password']);
    },
    Users::class => function($container) {
        $DbDriver = $container[DbDriver::class]($container)->getDbDriver();
        $DbHost = $container[DbHost::class]($container)->getHost();
        $DbName = $container[DbName::class]($container)->getName();
        $DbUser = $container[DbUser::class]($container)->getUser();
        $DbPwd = $container[DbPwd::class]($container)->getPwd();
        return new Users($DbDriver, $DbHost, $DbName, $DbUser, $DbPwd);
    },
	UsersController::class => function($container) {
		$usersModel = $container[Users::class]($container);
		return new UsersController($usersModel);
	},
	PagesController::class => function($container) {
        return new PagesController();
    },
];
return $container;