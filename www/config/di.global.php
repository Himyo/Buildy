<?php

 use MVC\VO\CardIdentity;
 use MVC\VO\CardProps;
 use MVC\Models\Mana;
 use MVC\Models\Type;
 use MVC\Models\Releases;
 use MVC\Models\Legalities;
 use MVC\Models\Cards;
 use MVC\Controllers\CardsController;

use MVC\Models\Tournaments;
use MVC\Controllers\TournamentsController;

 use MVC\Models\Decks;
 use MVC\Controllers\DecksController;

 use MVC\Models\Articles;
 use MVC\Controllers\ArticlesController;

 use MVC\Models\Users;
 use MVC\Controllers\UsersController;

 use MVC\Models\Pages;
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
    //Decks
    Decks::class => function($container) {
        return new Decks();
    },
    DecksController::class => function($container) {
        return new DecksController($container[Decks::class]($container));
    },
    //Tournaments
    Tournaments::class => function($container) {
        return new Tournaments();
    },
    TournamentsController::class => function($container) {
    return new TournamentsController($container[Tournaments::class]($container));

    },
    \MVC\Controllers\DashboardController::class => function($container) {
        return new \MVC\Controllers\DashboardController();
    },
    //Articles
    Articles::class => function($container) {
        return new Articles();
    },
    ArticlesController::class => function($container) {
        $articlesModel = $container[Articles::class]($container);
        return new ArticlesController($articlesModel);
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
    Pages::class => function($container) {
        return new Pages();
    },
    PagesController::class => function($container) {
        $pagesModel = $container[Pages::class]($container);
        return new PagesController($pagesModel);
    }
];
return $container;