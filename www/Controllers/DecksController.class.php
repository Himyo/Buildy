<?php


namespace MVC\Controllers;


use MVC\Core\Routing;
use MVC\Core\View;
use MVC\Models\Cards;
use MVC\Models\Decks;
use MVC\Models\Legalities;


//TODO: Fix Validator
class DecksController extends Controller {

    protected $decks;

    public function __construct(Decks $decks) {
        $this->decks = $decks;
    }

    public function getDecksFormAction() {
        $deck = $this->decks;
        $view = new View('createDeck', 'back');
        $view->assign("form", $deck->deckForm());
    }

    public function getLegalCardsAction() {
        $data = $GLOBALS['_GET'];
        if($_SERVER['REQUEST_METHOD'] === 'GET' && (isset($data['legalities']) && isset($data['name']))){
            $legalities = [];
            foreach ($data['legalities'] as $key => $value){
               $legalities[$value] = 1;
            }
            $name = $data['name'];
//          $users_id = Auth::ID();
            //TODO: Find better method than serialize array in bdd
            $legalitiesId = Legalities::ALL(['id'], $legalities)[0]["id"];

            $cards = Cards::ALL(
                [
                    'Cards.id', 'Cards.image_url',
                    'Cards.name', 'Cards.toughness',
                    'Cards.power', 'Mana.mana_cost',
                    'Cards.legalities_id',
                    'Mana.cmc', 'Releases.code'
                ],
                [
                    'legalities_id' => $legalitiesId
                ]);

            $deckData = [
                'deck' => [
                    'name' => $name,
                    'legalities_id' => $legalitiesId,
                ],
                'cards' => [
                    $cards
                ]
            ];
        }
        $view = new View('fillDeck', 'back');
        $view->assign('data', $deckData);
    }

    public function getSaveConfirmationAction() {
        $method = Routing::getMethod('/saveDeck');
        $data = $GLOBALS["_".$method];
        if($_SERVER['REQUEST_METHOD'] == $method && !empty($data)) {
            $deck = [
                'name' => $data['name'],
                'legalities_id' => $data['legalities_id'],
                'users_id' => 2
                // TODO: Auth object
                // users_id' => Auth::ID()
            ];
//            $this->decks->insert($deck);
//            $deckId = $this->decks->lastInsertedId();
            $decksId = 2;
            foreach($data['cards'] as $i => $values) {
                $data['cards'][$i]['decks_id'] = $decksId;
            }
            $this->decks->setTable('Decks_cards');
            $this->decks->insertMany($data['cards']);
            $this->decks->setTable('Decks');
        }
    }


}