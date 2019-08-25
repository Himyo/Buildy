<?php
    use MVC\Core\Auth;
    $profile = Auth::get();
?>
<div id="container-user" class="container">
    <div class="content">
        <div class="space-40"></div>
        <div class="col-100-center">
              <h1 class="title-h1">Profile</h1>
        </div>
        <div class="col-100-center">
        <ul>
          <li><h4 class="title-h4">Prénom: <?= ucfirst($profile['firstname']) ?></h4></li>
          <div class="space-30"></div>
          <li><h4 class="title-h4">Nom : <?= strtoupper($profile['lastname']) ?></h4></li>
          <div class="space-30"></div>
          <li><h4 class="title-h4">Email: <?= $profile['email'] ?></h4></li>
          <div class="space-30"></div>
          <li><h4 class="title-h4">Role: <?= $profile['role'] ?></h4></li>
        </ul>
        </div>

        <div class="space-50"></div>
        <hr/>
        <div class="space-50"></div>
    
        <?php if (!empty($articles)): ?>
        <div class="col-100-center">
              <h3 class="title-h3">Vos articles</h3>
        </div>
        <div class="col-100-center">
          <ul>
            <?php foreach($articles as $value): ?>
            <li><a style="color: blue" href="/site/article?id=<?= $value['id'] ?>" ><?= $value['title'] ?></a></li>
            <?php endforeach; ?> 
          </ul>
          <?php else: ?>
          <h3 class="col-100-center title-h3">Vous n'avez pas rédigé d'article.</h3>
          <?php endif; ?>
        </div>

        <div class="space-50"></div>
        <hr/>
        <div class="space-50"></div>

        <?php if (!empty($decks)): ?>
        <div class="col-100-center">
              <h3 class="title-h3">Vos decks</h3>
        </div>
        <div class="col-100-center">
          <ul>
            <?php foreach($decks as $value): ?>
            <li><a style="color: blue" href="/site/deck?id=<?= $value['id'] ?>" ><?= $value['name'] ?></a></li>
            <?php endforeach; ?> 
          </ul>
          <?php else: ?>
          <h3 class="col-100-center title-h3">Vous n'avez pas créé de deck.</h3>
          <?php endif; ?>
        </div>

        <div class="space-50"></div>
        <hr/>
        <div class="space-50"></div>

        <?php if (!empty($tournaments)): ?>
        <div class="col-100-center">
              <h3 class="title-h3">Vos tournois</h3>
        </div>
        <div class="col-100-center">
          <ul>
            <?php foreach($tournaments as $value): ?>
            <li><a style="color: blue" href="/site/tournament?id=<?= $value['id'] ?>" ><?= $value['name'] ?></a></li>
            <?php endforeach; ?> 
          </ul>
          <?php else: ?>
          <h3 class="col-100-center title-h3">Vous n'avez pas créé de tournois.</h3>
          <?php endif; ?>
        </div>

        <div class="space-50"></div>


    </div>
</div>

