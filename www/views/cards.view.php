
<div id="container" class="container">
    <div class="content">
        <div class="index-title">
            <h1>Cards</h1>
            <h2>Search for your favorite cards here</h2>>
            <?php
                foreach($cards as $card) {
                    $this->addComponent('card', $card);
                }
            ?>
        </div>
    </div>
</div>

