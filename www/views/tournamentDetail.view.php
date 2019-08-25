<?php 
require('./config/conf.inc.php'); 
use MVC\Core\Auth;
?>
<div id="container-user" class="container">
    <div class="content">
        <div class="space-40"></div>
        <?php if (!empty($tournament)): ?>

        <div class="col-100-center">
              <h1 class="title-h1"><?= $tournament['name'] ?></h1>
        </div>
        <div class="col-100-center">
          <ul>
            <li>Description: <?= $tournament['description'] ?></li>
            <li>Nombre de participants: <?= $tournament['nb_contenders'] ?></li>
            <li>Date de création: <?= $tournament['created_at'] ?></li>
          </ul>
        </div>
        <?php else: ?>
            <h3>Oops, le tournois est introuvable.</h3>
        <?php endif; ?>

        <div class="space-20"></div>
        <h3 class="col-100-center title-h3">Liste des participants</h3>
        <div class="col-100-center">
          <?php if (!empty($members) || $members == null): ?>
          <ul>
            <?php foreach($members as $value): ?>
            <li><?= strtoupper($value['lastname']). " " . ucfirst($value['firstname']) ?></li>
            <?php endforeach; ?> 
          </ul>
          <?php else: ?>
          <h3>Il n'y a pas encore de participant.</h3>
          <?php endif; ?>
        </div>
        <div class="space-50"></div>
        <hr/>
        <div class="space-50"></div>
        <?php $signedup = false; ?>
        <?php foreach($members as $value): ?>
          <?php if ($value['id'] == Auth::User()['id']):?>
          <?php $signedup = true; ?>
          <h3 class="col-100-center title-h3">Vous êtes déjà inscris au tournois</h3>
          <?php endif; ?>
        <?php endforeach;?>

        <?php if ($signedup == false): ?>
          <div class="col-100-center">
              <form action="/site/tournament/signup" method="post">
                  <input type="hidden" name="users_id" value="<?= $_SESSION['user']['id'] ?>">
                  <input type="hidden" name="tournament_id" value="<?= $_GET['id'] ?>">
                  <button class="button-classic-succes">S'inscrire au tournois</button>
              </form>
          </div>
        <?php elseif ( !Auth::isAuthenticate() ): ?>
          <h3 class="col-100-center title-h3">Connectez vous pour rejoindre ce tournois</h3>

        <?php elseif ( count($members) >=  $tournament['nb_contenders']): ?>
          <h3 class="col-100-center title-h3">Le tournois est complet</h3>
        <?php endif;?>
    </div>
</div>


