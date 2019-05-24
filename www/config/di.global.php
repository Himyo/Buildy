<?php

 use MVC\Core\BaseSQL;
 use MVC\Core\QueryBuilder;

 use MVC\VO\CardIdentity;
 use MVC\VO\CardProps;
 use MVC\Models\Mana;
 use MVC\Models\Type;
 use MVC\Models\Releases;
 use MVC\Models\Legalities;
 use MVC\Models\Cards;
 use MVC\Controllers\CardController;

 use MVC\Models\Users;
 use MVC\Controllers\UsersController;

 use MVC\Controllers\PagesController;

 use MVC\VO\DbDriver;
 use MVC\VO\DbHost ;
 use MVC\VO\DbName;
 use MVC\VO\DbUser;
 use MVC\VO\DbPwd;

$container = [
    //Database
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
    // Card
    CardIdentity::class => function($container){
        return new CardIdentity();
    },
    CardProps::class => function($container){
        return new CardProps();
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
    Legalities::class => function($container){
        return new Legalities($container[BaseSQL::class]($container));
    },
    Cards::class => function($container) {
        return new Cards(
            $container[BaseSQL::class]($container),
            $container[CardIdentity::class]($container),
            $container[CardProps::class]($container),
            $container[Mana::class]($container),
            $container[Type::class]($container),
            $container[Releases::class]($container),
            $container[Legalities::class]($container)
            );
    },
    CardController::class => function($container) {
        return new CardController($container[Cards::class]($container));
    },
    //Users
    Users::class => function($container) {
        return new Users($container[BaseSQL::class]($container));
    },
    UsersController::class => function($container) {
        $usersModel = $container[Users::class]($container);
        return new UsersController($usersModel);
    },
    //Pages
    PagesController::class => function($container) {
    return new PagesController();
    }
];
return $container;