<?php
namespace MVC\Controllers;

use MVC\Core\Routing;
use MVC\Core\View;
use MVC\Models\Cards;

class CardsController extends Controller{
    protected $cards;

    public function __construct(Cards $cards)
    {
        $this->cards = $cards;
    }


    public function frontCardsAction() {
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