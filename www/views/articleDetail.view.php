<?php require('./config/conf.inc.php'); ?>
<div id="container-user" class="container">
    <div class="content">
      <div class="space-40"></div>
        <?php if (!empty($article)): ?>

        <div class="col-100-center">
          <div class="col-10-center"></div>
          <div class="col-80-center column">
            <div class="col-100-center">
              <h1 class="title-h1"><?= $article['title'] ?></h1>
            </div>
            <div class="space-20"></div>
            <div class="col-100-center">
              <img class="max-width-800 width-100" src="<?= IMG_FOLDER.$article['image']; ?>" alt="">
            </div>
            <div class="space-20"></div>
            <p><?= $article['content'] ?></p>
            <div class="space-20"></div>
          </div>
          <div class="col-10-center"></div>
        </div>

        <div class="space-50"></div>
        <hr/>
        <div class="space-50"></div>
        
      <?php if (!empty($comments)): ?>
        <div class="col-100-center">
          <h2 class="title-h2">Commentaires</h2>
        </div>
        <div class="space-20"></div>
        <?php foreach($comments as $comment): ?>
        <div class="col-100-center">
          <div class="col-10-center"></div>
          <div class="col-80-center box-shadow">
            <div class="col-20-left column text-align-center">
              <div class="space-5"></div>
              <img class="max-width-150" src="<?= IMG_FOLDER.$comment['photo_path'] ?>" alt="">
              <div class="space-5"></div>
            </div>
            <div class="col-80-start column padding-20">
              <h4 class="title-h4"><?= strtoupper($comment['lastname']). " " . ucfirst($comment['firstname']) ?></h4>
              <div class="space-20"></div>
              <p><?= $comment['content'] ?></p>
            </div>
          </div>
          <div class="col-10-center"></div>
        </div>
        <div class="space-30"></div>
        <?php endforeach; ?>

      <?php else: ?>
        <h3 class="col-100-center title-h3">Il n'y a pas encore de commentaire, soyez le premier à en écrire un!</h3>
      <?php endif; ?>
        <div class="space-50"></div>
        <hr/>
        <div class="space-50"></div>
        
        <div class="col-100-center column">
            <div class="buildy-grid-v-center col-100-center column">
                <h3 class="title-h3">Ecrire un commentaire</h3>
            </div>
            <form action="/site/comment/save" method="post">
                <div class="col-100-space-b">
                    <div class="label-input-column-classic padding-20 width-100">
                        <textarea id="froala-editor" name="content"></textarea>
                    </div>
                </div>
                <input type="hidden" name="users_id" value="<?= $_SESSION['user']['id'] ?>">
                <input type="hidden" name="articles_id" value="<?= $_GET['id'] ?>">
                <div class="space-20"></div>
                <div class="col-100-center">
                    <input class="button-classic-succes" type="submit" value="Poster">
                </div>
                <div class="space-20"></div>
            </form>
        </div>
        <?php else: ?>
            <h3 class="col-100-center title-h3">Oops, l'article est introuvable.</h3>
        <?php endif; ?>
    </div>
</div>

<script>
  new FroalaEditor('textarea#froala-editor')
</script>


