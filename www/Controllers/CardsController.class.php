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

    public function downloadAction() {
        $url = 'https://api.magicthegathering.io/v1/cards';
        $file = json_decode(file_get_contents(__DIR__."/../data/cards.json"), true);
        echo 'Loading the cards';
//TODO: Static method which get result of insert
// put the result in a array, then execute
// should cost less than feeding object
        foreach($file['cards'] as $data) {

            if(!isset($data['multiverseid']) || !isset($data['imageUrl']))
            {
                echo "<br />".$data['name'];
                continue;
            }
            $this->cards->initMana([
                'mana_cost' => $data['manaCost']??"",
                'cmc' => $data['cmc']
            ], true);

            $this->cards->initType([
                'supertype' =>  $data['supertypes'],
                'subtype' => $data['subtypes'],
                'layout' => $data['layout'],
                'rarity' => $data['rarity'],
                'type' =>$data['types']
            ], true);

            $this->cards->initRelease([
                'code' => $data['set'],
                'name' => $data['setName']
            ], true);

            $this->cards->initLegalities([
                'legalities' => $data['legalities']
                ], true);

            $this->cards->props->init([
                'text' => $data['text']??"",
                'power' => $data['power']??0,
                'toughness' => $data['toughness']??0
            ]);

            $this->cards->identity->init([
                'name' => $data['name'],
                'lore' => $data['flavor']??"",
                'ruling' => $data['rulings'],
                'multiverse_id' => $data['multiverseid'],
                'image_url' => $data['imageUrl'],
            ]);

            $data = [
                'releases_id' => $this->cards->getRelease()->getId(),
                'type_id' => $this->cards->getType()->getId(),
                'legalities_id' => $this->cards->getLegalities()->getId(),
                'mana_id' => $this->cards->getMana()->getId(),

            ];
            $data = array_merge($data, $this->cards->identity->getAllIdentity());
            $data = array_merge($data, $this->cards->props->getAllProps());
            $this->cards->insert($data);
        }

    }

    public function getCardsViewAction() {
        $cards = $this->cards->findJoin(
            [
                'Cards.id', 'Cards.image_url',
                'Cards.name', 'Cards.toughness',
                'Cards.power', 'Mana.mana_cost',
                'Mana.cmc', 'Releases.name'
            ],
            [
                'Mana' => ['Mana.id', 'Cards.mana_id'],
                'Releases' => ['Releases.id', 'Cards.releases_id']
            ]
        );
        $view = new View("cards", "back");
        $view->assign("cards", $cards) ;
    }
}