<?php
namespace MVC\Controllers;

use MVC\Models\Cards;

class CardsController {
    private $card;

    public function __construct(Cards $card)
    {
        $this->card = $card;
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
            $this->card->initMana([
                'mana_cost' => $data['manaCost']??"",
                'cmc' => $data['cmc']
            ], true);

            $this->card->initType([
                'supertype' =>  $data['supertypes'],
                'subtype' => $data['subtypes'],
                'layout' => $data['layout'],
                'rarity' => $data['rarity'],
                'type' =>$data['types']
            ], true);

            $this->card->initRelease([
                'code' => $data['set'],
                'name' => $data['setName']
            ], true);

            $this->card->initLegalities([
                'legalities' => $data['legalities']
                ], true);

            $this->card->props->init([
                'text' => $data['text']??"",
                'power' => $data['power']??0,
                'toughness' => $data['toughness']??0
            ]);

            $this->card->identity->init([
                'name' => $data['name'],
                'lore' => $data['flavor']??"",
                'ruling' => $data['rulings'],
                'multiverse_id' => $data['multiverseid'],
                'image_url' => $data['imageUrl'],
            ]);

            $data = [
                'releases_id' => $this->card->getRelease()->getId(),
                'type_id' => $this->card->getType()->getId(),
                'legalities_id' => $this->card->getLegalities()->getId(),
                'mana_id' => $this->card->getMana()->getId(),

            ];
            $data = array_merge($data, $this->card->identity->getAllIdentity());
            $data = array_merge($data, $this->card->props->getAllProps());
            $this->card->insert($data);
        }

    }
}