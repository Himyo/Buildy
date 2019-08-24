<div id="container" class="container">
    <div class="content">
        <div class="space-15"></div>
        <div class="buildy-grid-v-center col-100-center">
            <h1 class="title-h1">Gestion des commentaires</h1>
        </div>
        <div class="space-40"></div>
        <div class="col-100-center">
            <table class="dataTable">
                <thead>
                  <tr>
                      <th>Id</th>
                      <th>Contenu</th>
                      <th>Id membre</th>
                      <th>Id commentaire</th>
                      <th>Id article</th>
                  </tr>
                </thead>
                <tbody>
                  <?php foreach($comments as $key => $value): ?>
                      <tr>
                          <td><?= $value['id'] ?></td>
                          <td><?= htmlentities($value['name']) ?></td>
                          <td><?= $value['users_id'] ?></td>
                          <td><?= $value['upvotes'] ?></td>
                          <td><?= $value['downvotes'] ?></td>
                          <td>
                              <form action="/admin/dashboard/comments/delete" method="post">
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
                      <th>Contenu</th>
                      <th>Id membre</th>
                      <th>Id commentaire</th>
                      <th>Id article</th>
                  </tr>
                </tfoot>
            </table>
        </div>
        <div class="col-100-center">
            <?php $this->addComponent('formAdminComment', ""); ?>
        </div>
        </div>
    </div>
