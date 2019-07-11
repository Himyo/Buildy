
<div id="container" class="container">
    <div class="content">
        <div class="index-title">
            <h1>Cards</h1>
            <h2>Search for your favorite cards here</h2>
            <?php
                if(!empty($cards)) {
                    foreach ($cards as $card) {
                        $this->addComponent('card', $card);
                    }
                }
                else {
                    echo "<h3>No Card found in the BDD</h3>";
                }
            ?>
        </div>
    </div>
</div>

