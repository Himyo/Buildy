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
        <?php else: ?>
            <h3>Oops, le deck est introuvable.</h3>
        <?php endif; ?>

        <div class="space-50"></div>
        <hr class="">
        <div class="space-50"></div>
        
        <h3 class="col-100-center title-h3">Vos cartes</h3>
        <div class="space-50"></div>
        <h4 class="col-100-center title-h4">Cliquer sur une carte pour la supprime de votre deck.</h4>
        <div class="space-20"></div>
        <div class="list-card-classic">
            <div class="list-card-classic-content" id="liste">
                <?php foreach($deckCards as $card): ?>
                <img id="<?= $card['id'] ?>" src="<?= $card['image_url'] ?>" onclick="del(this)" >
                <?php endforeach; ?>
            </div>
        </div>
        <div class="space-50"></div>

        <div class="col-100-center">
            <button class="button-classic-succes" onclick="document.location.reload(true);">Sauvegarder</button>
        </div>

        <div class="space-50"></div>
        <hr class="">
        <div class="space-50"></div>

        <h4 class="col-100-center title-h4">Cliquer sur une carte pour l'ajouter à votre deck.</h4>
        <div class="space-20"></div>
        <div class="list-card-classic">
            <div class="list-card-classic-content">
                <?php if (!empty($cards)): ?>
                  <?php foreach ($cards as $card): ?> 
                    <?php $this->addComponent('card', $card); ?>  
                  <?php endforeach; ?>       
                <?php else: ?>
                  <h3 class="col-10-center title-h3">Une erreur est survenue au chargement des cartes.</h3>
                <?php endif; ?>
            </div>
        </div>

    </div>
</div>

<script>

function del(el) {
    console.log(el.id);
    $.ajax({
        url: '/site/deck/edit/delete',
        type: 'POST',
        data: {
            cards_id: el.id,
            decks_id: <?= $_GET['id'] ?>
        },
        success: (e) => {
            $(el).remove()
        }
    })
}

$('.card').on('click', function(el) {
    
    var list = $('#liste');
    list.append(el.target);

    console.log($(el.target).parent().attr('id'));
    $.ajax({
        url: '/site/deck/edit/save',
        type: 'POST',
        data: {
            cards_id: el.target.id,
            decks_id: <?= $_GET['id'] ?>
        },
        success: (e) => {
            console.log(e);
        }
    })
})

</script>


