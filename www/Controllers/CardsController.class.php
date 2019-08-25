<?php
namespace MVC\Controllers;

use MVC\Core\Routing;
use MVC\Core\View;
use MVC\Models\Cards;
use MVC\Models\Tournaments;

class CardsController extends Controller{
    protected $cards;

    public function __construct(Cards $cards)
    {
        $this->cards = $cards;
    }


    public function frontCardsAction() {
        $querys = [
            'select' => [
                'Cards.id', 'Cards.image_url',
                'Cards.name', 'Cards.toughness',
                'Cards.power', 'Mana.mana_cost',
                'Mana.cmc', 'Releases.code'
            ],
            'innerJoin' => [
                'Mana' => ['Mana.id', 'Cards.mana_id'],
                'Releases' => ['Releases.id', 'Cards.releases_id']
            ]
        ];
        $cards = $this->cards->executeSql($querys);
        $view = new View('cards', 'front');
        $view->assign('cards', $cards);
    }

    public function backCardsAction() {
        $cards = $this->cards->findJoin(
            [
                'Cards.id', 'Cards.image_url',
                'Cards.name', 'Cards.toughness',
                'Cards.power', 'Mana.mana_cost',
                'Mana.cmc', 'Releases.code'
            ],
            [
                'Mana' => ['Mana.id', 'Cards.mana_id'],
                'Releases' => ['Releases.id', 'Cards.releases_id']
            ]
        );
        $view = new View('cards', 'back');
        $view->assign('cards', $cards);
    }
    
}