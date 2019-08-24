<div id="container" class="container">
    <div class="content">
        <div class="space-15"></div>
        <div class="buildy-grid-v-center col-100-center">
            <h1 class="title-h1">Gestion des pages</h1>
        </div>
        <div class="space-40"></div>
        <div class="col-100-center">
            <table class="dataTable">
                <thead>
                  <tr>
                      <th>Id</th>
                      <th>Titre</th>
                      <th>Route</th>
                      <th>Contenu</th>
                      <th>Date de création</th>
                      <th>Date de modification</th>
                      <th>Action</th>
                  </tr>
                </thead>
                <tbody>
                  <?php foreach($pages as $key => $value): ?>
                      <tr>
                          <td><?= $value['id'] ?></td>
                          <td><?= $value['title'] ?></td>
                          <td><?= $value['slug'] ?></td>
                          <td><?= htmlentities($value['content']) ?></td>
                          <td><?= $value['created_at'] ?></td>
                          <td><?= $value['updated_at'] ?></td>
                          <td>
                              <form action="/dashboard/admin/pages/delete" method="post">
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
                    <th>Route</th>
                    <th>Contenu</th>
                    <th>Date de création</th>
                    <th>Date de modification</th>
                    <th>Action</th>
                  </tr>
                </tfoot>
            </table>
        </div>

        <br><br>
        <div class="col-100-center">
            <?php $this->addComponent('formAdminPage', ""); ?>
        </div>
    </div>
</div>
