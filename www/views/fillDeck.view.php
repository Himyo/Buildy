<div id="container" class="container">
    <div class="content">
        <div class="index-title">
            <h1>Make Decks</h1>
            <h2>Draft your Decks here</h2>
            <form action='/saveDeck' method="post">
            <?php
                //TODO: Make a slider component which take array type of data + info on auto slide or note
                // Feed it with cards component
            foreach($data['deck'] as $key => $value) {
                echo "<input type='hidden' name='{$key}' value='{$value}'>";
            }
            foreach ($data['cards'][0] as $card) {
                $this->addComponent('card', $card);
                echo "<input type='checkbox' name=cards[]['cards_id'] value='{$card['id']}'> Add <br>";
            }
            ?>
            <input type='submit' value='Submit'>
            </form>
        </div>
    </div>
</div>