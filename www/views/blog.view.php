<?php 
require('./config/conf.inc.php'); 
use MVC\Core\Text;
use MVC\Core\Auth;
?>
<div id="container-user" class="container">
    <div class="content">
    <?php if (isset($_GET['errors'])):  ?>
    <?php $errors = $_GET['errors'] ?>
    <p><?= $errors ?></p>
    <?php endif; ?>
      <div class="space-40"></div>
      <div class="buildy-grid-v-center col-100-center">
        <h1 class="title-h1">Actualités</h1>
      </div>
      <div class="space-40"></div>
        <h3 class="col-100-center">Rechercher par catégorie</h3>
        <div class="col-100-center">
          <button class="button-classic" type="submit" id="General" value="1" onclick="sortByCat(this.id)">General</button>
          <button class="button-classic" type="submit" id="Deck" value="2" onclick="sortByCat(this.id)">Deck</button>
          <button class="button-classic" type="submit" id="Tournois" value="3" onclick="sortByCat(this.id)">Tournament</button>
        </div>
        <div class="space-40"></div>


        <div class="col-100-center column">
          <div class="col-100-space-a wrap">
            <?php if (!empty($articles)): ?>
                <?php foreach ($articles as $key => $value): ?>

                <form action="/site/article" method="get">
                    <div class="column padding-20 max-width-250 margin-10 box-shadow" style="background-color: #ebebeb">
                        <div class="col-100-center text-align-center">
                        <h2 class="title-h2"><?= $value['title']; ?></h2>
                        </div>
                        <div class="space-10"></div>
                        <img class="max-width-250" src="<?= IMG_FOLDER.$value['image']; ?>" alt="">
                        <?php
                            $cat = '';
                            if ($value['categories'] == 1) {
                                $cat = "General";
                            } else if ($value['categories'] == 2) {
                                $cat = "Tournois";
                            } else if ($value['categories'] == 3) {
                                $cat = "Deck";
                            }
                        ?>
                        <span class="cat"><?= $cat ?></span>
                        <div class="space-15"></div>
                        <div class="col-100-center">
                        <p class="justify"><?= Text::excerpt($value['content']); ?></p>
                        </div>
                        <div class="space-10"></div>
                        <div class="col-100-left">
                        <input type="hidden" name="id" value="<?= $value['id']?>"></input>
                        <button class="button-classic-succes" type="submit">Lire la suite</button>
                        </div>
                    </div>
                </form>
                <?php endforeach; ?>
            <?php else: ?>
                <h3>Il n'y a pas encore d'article.</h3>
            <?php endif; ?>

          </div>
        </div>

        <div class="space-100"></div>
        <hr/>
        <div class="space-100"></div>
        <?php if (Auth::isAuthenticate()): ?>
            <?php $this->addComponent("formArticle", ""); ?>
        <?php else: ?>
            <h3 class="col-100-center">Connectez vous pour écrire un article!</h3>
        <?php endif; ?>
        <div class="space-100"></div>
    </div>
</div>

<script>
    function sortByCat(button_id) {

        var id = $('#'+button_id);
        if (id.hasClass('active')) {
            id.removeClass('active');
            id.removeAttr('style');
        } else {
            id.addClass('active');
            id.css('background-color', 'blue');
        }
        
        if(id.hasClass('active')) {
            var cats = $('span.cat');
            cats.each(function(e) {
                if ($(this).text() !== button_id) {
                    $(this).parent().hide();
                }
            })
        } else {
            var cats = $('span.cat');
                cats.each(function(e) {
                    if ($(this).text() !== button_id) {
                        $(this).parent().show();
                    }
                })
        }
    }
</script>