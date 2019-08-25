<?php 
require('./config/conf.inc.php'); 
use MVC\Core\Text;

?>
<div id="container-user" class="container">
    <div class="content">
      <div class="space-40"></div>
      <div class="buildy-grid-v-center col-100-center">
        <h1 class="title-h1">Decks</h1>
      </div>
      <div class="space-40"></div>


        <div class="col-100-center column">
          <div class="col-100-space-a wrap">
            <?php if (!empty($decks)): ?>
                <?php foreach ($decks as $key => $value): ?>

                <div class="column padding-20 max-width-250 margin-10 box-shadow" style="background-color: #ebebeb">
                    <div class="col-100-center text-align-center">
                    <h2 class="title-h2"><?= $value['name']; ?></h2>
                    </div>
                    <div class="space-15"></div>
                    <p>Par: <?= strtoupper($value['lastname']) . " " . ucfirst($value['firstname']) ?></p>
                    <div class="col-100-center">
                    </div>
                    <div class="space-10"></div>
                    <div class="col-100-left">
                    <form action="/site/deck" method="get">
                        <input type="hidden" name="id" value="<?= $value['id'] ?>">
                        <button class="button-classic-succes" type="submit">Détails</button>
                    </form>
                    </div>
                </div>
                
                <?php endforeach; ?>
            <?php else: ?>
                <h3>Vous n'avez pas de decks.</h3>
            <?php endif; ?>

          </div>
        </div>
    </div>
</div>