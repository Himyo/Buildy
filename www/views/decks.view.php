<div id="container" class="container">
    <div class="content">
        <div class="index-title">
            <h1>Articles</h1>
            <h2>Search for your favorite articles here</h2>
            <?php
            if(!empty($decks)) {
                foreach ($decks as $deck) {
                    $this->addComponent('deck', $deck);
                }
            }
            else {
                echo "<h3>No Decks found in the BDD</h3>";
            }
            ?>
        </div>
    </div>
</div>
