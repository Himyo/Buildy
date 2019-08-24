<div id="container" class="container">
    <div class="content">
        <div class="space-15"></div>
        <div class="buildy-grid-v-center col-100-center">
            <h1 class="title-h1">Gestion des articles</h1>
        </div>
        <div class="space-40"></div>
        <div class="col-100-center">
            <table class="dataTable">
                <thead>
                  <tr>
                      <th>Id</th>
                      <th>Titre</th>
                      <th>Contenu</th>
                      <th>Id membre</th>
                      <th>Id catégorie</th>
                      <th>Status</th>
                      <th>Date créé</th>
                      <th>Action</th>
                  </tr>
                </thead>
                <tbody>
                  <?php foreach($articles as $key => $value): ?>
                      <tr>
                          <td><?= $value['id'] ?></td>
                          <td><?= htmlentities($value['title']) ?></td>
                          <td><?= htmlentitiies($value['content']) ?></td>
                          <td><?= $value['users_id'] ?></td>
                          <td><?= htmlentities($value['categories']) ?></td>
                          <td><?= $value['state'] ?></td>
                          <td><?= $value['created_at'] ?></td>
                          <td>
                              <form action="/admin/dashboard/articles/delete" method="post">
                                  <input type="hidden" name="id" value="<?= $value['id'] ?>">
                                  <input class="button-classic-sm-error" type="submit" value="Supprimer">
                              </form>
                          </td>
                      </tr>
                  <?php endforeach; ?>
                </tbody>
                <tfoot>
                  <tr>
                      <th>Id</th>
                      <th>Titre</th>
                      <th>Contenu</th>
                      <th>Id membre</th>
                      <th>Id catégorie</th>
                      <th>Status</th>
                      <th>Date créé</th>
                      <th>Action</th>
                  </tr>
                </tfoot>
            </table>
        </div>
        <div class="col-100-center">
            <?php $this->addComponent('formAdminArticle', ""); ?>
        </div>
    </div>
</div>
