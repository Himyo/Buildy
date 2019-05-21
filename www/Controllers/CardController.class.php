<?php
namespace MVC\Controllers;

use MVC\Models\Card;

class CardController {
    private $card;

    public function __construct(Card $card)
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

            $this->card->initMana([
                'manaCost' => $data['manaCost'],
                'cmc' => $data['cmc']
            ], true);

            $this->card->initType([
                'supertype' => $data['supertypes'],
                'subtype' => $data['subtypes'],
                'layout' => $data['layout'],
                'rarity' => $data['rarity'],
                'type' => $data['types']
            ], true);

            $this->card->initRelease([
                'set' => $data['set'],
                'setName' => $data['setName']
            ], true);

            $this->card->initLegalities([
                'ruling' => $data['rulings']
                ], true);

            $this->card->props->supply([
                'text' => $data['text'],
                'power' => $data['power'],
                'toughness' => $data['toughness']
            ]);

            $this->card->identity->supply([
                'name' => $data['name'],
                'lore' => $data['flavor'],
                'multiverse_id' => $data['multiverseid'],
                'image_url' => $data['imageUrl'],
            ]);

            $this->card->save();
        }

    }
}