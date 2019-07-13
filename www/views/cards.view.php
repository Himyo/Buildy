<div id="container" class="container">
    <div class="content">
        <h1>Liste des cartes</h1>
        <div class="list-card-classic">
            <div class="list-card-classic-content">
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
</div>

