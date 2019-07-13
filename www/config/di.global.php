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
 
 use MVC\Controllers\HomeController;
 use MVC\Controllers\AdminArticlesController;
 use MVC\Controllers\AdminCardsController;
 use MVC\Controllers\AdminDecksController;
 use MVC\Controllers\AdminTournamentsController;
 use MVC\Controllers\AdminCommentsController;
 use MVC\Controllers\AdminUsersController;
 use MVC\Controllers\DashboardController;
use MVC\Controllers\SiteController;
use MVC\Controllers\AdminPagesController;

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
        $pages = $container[Pages::class]($container);
        return new PagesController($pages);
    },

    //Home
    HomeController::class => function($container) {
        return new HomeController();
    },

    //Articles
    Articles::class => function($container) {
        return new Articles();
    },
    ArticlesController::class => function($container) {
        $articlesModel = $container[Articles::class]($container);
        return new ArticlesController($articlesModel);
    },

    //Comments
    Comments::class => function($container) {
        return new Comments();
    },
    CommentsController::class => function($container) {
        $commentsModel = $container[Comments::class]($container);
        return new CommentsController($commentsModel);
    },

    //Decks
    Decks::class => function($container) {
        return new Decks();
    },
    DecksController::class => function($container) {
        $decksModel = $container[Decks::class]($container);
        return new DecksController($decksModel);
    },

    //Tournaments
    Tournaments::class => function($container) {
        return new Tournaments();
    },
    TournamentsController::class => function($container) {
        $tournamentsModel = $container[Tournaments::class]($container);
        return new TournamentsController($tournamentsModel);
    },

    //SITE
    SiteController::class => function($container) {
        return new SiteController();
    },

    //ADMIN

    //Dashboard
    DashboardController::class => function($container) {
        return new DashboardController();
    },

    //Admin Users
    AdminUsersController::class => function($container) {
        $usersModel = $container[Users::class]($container);
        return new AdminUsersController($usersModel);
    },

    //Admin Articles
    AdminArticlesController::class => function($container) {
        $articlesModel = $container[Articles::class]($container);
        return new AdminArticlesController($articlesModel);
    },

    //Admin Comments
    AdminCommentsController::class => function($container) {
        $commentsModel = $container[Comments::class]($container);
        return new AdminCommentsController($commentsModel);
    },

    //Admin Tournaments
    AdminTournamentsController::class => function($container) {
        $tournamentsModel = $container[Tournaments::class]($container);
        return new AdminTournamentsController($tournamentsModel);
    },

    //Admin Decks
    AdminDecksController::class => function($container) {
        $decksModel = $container[Decks::class]($container);
        return new AdminDecksController($decksModel);
    },

    //Admin Cards
    AdminCardsController::class => function($container) {
        $cardsModel = $container[Cards::class]($container);
        return new AdminCardsController($cardsModel);
    },

    AdminPagesController::class => function($container) {
        $pagesModel = $container[Pages::class]($container);
        return new AdminPagesController($pagesModel);
    }




];
return $container;