<?php

use \Core\BaseSQL;

use \Model\Users;
use \Model\Card;
use \Controller\CardController;
use \Controller\UsersController;
use \Controller\PagesController;

use \VO\DbDriver;
use \VO\DbHost;
use \VO\DbName;
use \VO\DbUser;
use \VO\DbPwd;

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
    Card::class => function($container) {
        $DbDriver = $container[DbDriver::class]($container)->getDbDriver();
        $DbHost = $container[DbHost::class]($container)->getHost();
        $DbName = $container[DbName::class]($container)->getName();
        $DbUser = $container[DbUser::class]($container)->getUser();
        $DbPwd = $container[DbPwd::class]($container)->getPwd();
        return new Card(new BaseSQL($DbDriver, $DbHost, $DbName, $DbUser, $DbPwd));
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
    CardController::class => function($container) {
        return new CardController();
    }
];
return $container;