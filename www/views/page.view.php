<div id="container" class="container">
    <div class="content">
      <div class="space-15"></div>
      <div class="buildy-grid-v-center col-100-center">
        <h1 class="title-h1">Liste des pages</h1>
      </div>
      <?php foreach ($pages as $key => $value): ?>
        <form action="/mysite/page/edit" method="get">
          <input type="hidden" name="id" value="<?= $value['id'] ?>">
          <div class="space-40"></div>
          <div class="col-100-center">
            <div class="card-row width-100">
              <div class="buildy-grid-v-center col-25 space-around column">
                <h4 class="title-h1"><?= $value['title']; ?></h4>
                <input class="button-classic-succes" type="submit" value="Editer">
              </div>
              <div class="col-75-center">
                  <div width="100%" height="400"><?= $value['content']; ?></div>
              </div>
            </div>
          </div>
        </form>
      <?php endforeach; ?>
        <div class="space-100"></div>
    </div>
</div>
