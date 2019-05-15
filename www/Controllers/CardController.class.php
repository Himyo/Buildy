<?php
namespace MVC\Controllers;

use MVC\Models\Card;

class CardController {
    private $card;

    public function __construct(Card $card)
    {
        $this->card = $card;
    }
}