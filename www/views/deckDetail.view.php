<?php require('./config/conf.inc.php'); ?>
<div id="container-user" class="container">
    <div class="content">
      <div class="space-40"></div>
        <?php if (!empty($deck)): ?>

        <div class="col-100-center">
          <div class="col-10-center"></div>
          <div class="col-80-center column">
            <div class="col-100-center">
              <h1 class="title-h1"><?= $deck['name'] ?></h1>
            </div>
            <div class="space-20"></div>
          </div>
          <div class="col-10-center"></div>
        </div>

        <div class="space-50"></div>
        <hr class="">
        <div class="space-50"></div>
        
        <h3 class="col-100-center title-h3">Cartes</h3>
        <div class="space-50"></div>
        <div class="list-card-classic">
            <div class="list-card-classic-content" id="liste">
                <?php foreach($deckCards as $card): ?>
                <img id="<?= $card['id'] ?>" src="<?= $card['image_url'] ?>" onclick="del(this)" >
                <?php endforeach; ?>
            </div>
        </div>
        <div class="space-50"></div>

        <?php else: ?>
            <h3>Oops, le deck est introuvable.</h3>
        <?php endif; ?>

    </div>
</div>


