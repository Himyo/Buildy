<div id="container-user" class="container">
    <div class="content">
      <div class="space-15"></div>
      <div class="buildy-grid-v-center col-100-center">
        <h1 class="title-h1">Liste des cartes</h1>
      </div>
      <div class="space-40"></div>
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
