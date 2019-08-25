<?php 
require('./config/conf.inc.php'); 
use MVC\Core\Text;
use MVC\Core\Auth;
?>
<div id="container-user" class="container">
    <div class="content">
      <div class="space-40"></div>
      <div class="buildy-grid-v-center col-100-center">
        <h1 class="title-h1">Tournois</h1>
      </div>
      <div class="space-40"></div>


        <div class="col-100-center column">
          <div class="col-100-space-a wrap">
            <?php if (!empty($tournaments)): ?>
                <?php foreach ($tournaments as $key => $value): ?>

                <form action="/site/tournament" method="get">
                    <div class="column padding-20 max-width-250 margin-10 box-shadow" style="background-color: #ebebeb">
                        <div class="col-100-center text-align-center">
                        <h2 class="title-h2"><?= $value['name']; ?></h2>
                        </div>
                        <div class="space-10"></div>
                        <img class="max-width-250" src="<?= IMG_FOLDER.$value['image']; ?>" alt="">
                        <div class="space-15"></div>
                        <div class="col-100-center">
                        <p class="justify"><?= Text::excerpt($value['description']); ?></p>
                        </div>
                        <div class="space-20"></div>
                        <span class="justify"><?= "Nombre de participants: " . $value['nb_contenders']; ?></span>
                        <div class="space-10"></div>
                        <span class="justify"><?= "Créé le: " . $value['created_at']; ?></span>
                        <div class="space-10"></div>
                        <div class="col-100-left">
                        <input type="hidden" name="id" value="<?= $value['id'] ?>">
                        <button class="button-classic-succes" type="submit">Détails</button>
                        </div>
                    </div>
                </form>
                <?php endforeach; ?>
            <?php else: ?>
                <h3>Il n'y a pas encore de tournois.</h3>
            <?php endif; ?>

          </div>
        </div>

        <div class="space-100"></div>
        <hr/>
        <div class="space-100"></div>
        <?php if (Auth::isAuthenticate()): ?>
            <?php $this->addComponent("formTournament", ""); ?>
        <?php else: ?>
            <h3 class="col-100-center">Connectez vous pour organiser un tournois!</h3>
        <?php endif; ?>
        <div class="space-100"></div>
    </div>
</div>

<script>
    $('.cat').click(function() {
        var value = $(this).html();
        console.log(value);
        $.ajax({
            url: '/site/blog/category',
            type: 'GET',
            data: {
                category: value
            },
            success: (response) => {
                console.log(response);
            }
        });
    });
</script>