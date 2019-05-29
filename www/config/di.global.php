<?php

 use MVC\VO\CardIdentity;
 use MVC\VO\CardProps;
 use MVC\Models\Mana;
 use MVC\Models\Type;
 use MVC\Models\Releases;
 use MVC\Models\Legalities;
 use MVC\Models\Cards;
 use MVC\Controllers\CardsController;

 use MVC\Models\Articles;
 use MVC\Controllers\ArticlesController;

 use MVC\Models\Users;
 use MVC\Controllers\UsersController;

 use MVC\Controllers\PagesController;


$container = [
    // Card
    CardIdentity::class => function($container){
        return new CardIdentity();
    },
    CardProps::class => function($container){
        return new CardProps();
    },
    Mana::class => function($container){
        return new Mana();
    },
    Type::class => function($container){
        return new Type();
    },
    Releases::class => function($container){
        return new Releases();
    },
    Legalities::class => function($container){
        return new Legalities();
    },
    Cards::class => function($container) {
        return new Cards(
            $container[CardIdentity::class]($container),
            $container[CardProps::class]($container),
            $container[Mana::class]($container),
            $container[Type::class]($container),
            $container[Releases::class]($container),
            $container[Legalities::class]($container)
            );
    },
    CardsController::class => function($container) {
        return new CardsController($container[Cards::class]($container));
    },
    //Articles
    Articles::class => function($container) {
        return new Articles();
    },
    ArticlesController::class => function($container) {
        return new ArticlesController($container[Articles::class]($container));
    },
    //Users
    Users::class => function($container) {
        return new Users();
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