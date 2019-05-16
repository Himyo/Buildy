<?php

 use MVC\Core\BaseSQL;
 use MVC\Core\QueryBuilder;

 use MVC\Models\Mana;
 use MVC\Models\Type;
 use MVC\Models\Releases;

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
 use MVC\VO\CardIdentity;
 use MVC\VO\CardProps;

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
    BaseSQL::class => function($container) {
        $DbDriver = $container[DbDriver::class]($container)->getDriver();
        $DbHost = $container[DbHost::class]($container)->getHost();
        $DbName = $container[DbName::class]($container)->getName();
        $DbUser = $container[DbUser::class]($container)->getUser();
        $DbPwd = $container[DbPwd::class]($container)->getPwd();
        return BaseSQL::getConnection($DbDriver, $DbHost, $DbName, $DbUser, $DbPwd);
    },
    Mana::class => function($container){
        return new Mana($container[BaseSQL::class]($container));
    },
    Type::class => function($container){
        return new Type($container[BaseSQL::class]($container));
    },
    Releases::class => function($container){
        return new Releases($container[BaseSQL::class]($container));
    },
    CardIdentity::class => function($container){
        return new CardIdentity();
    },
    CardProps::class => function($container){
        return new CardProps();
    },
    Card::class => function($container) {
        return new Card($container[BaseSQL::class]($container));
    },
    Users::class => function($container) {
        return new Users($container[BaseSQL::class]($container));
    },
    UsersController::class => function($container) {
        $usersModel = $container[Users::class]($container);
        return new UsersController($usersModel);
    },
    CardController::class => function($container) {
        return new CardController($container[Card::class]($container));
    },
    PagesController::class => function($container) {
    return new PagesController();
    }
];
return $container;