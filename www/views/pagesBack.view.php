<?php 
use MVC\Core\Text;
?>
<div id="container" class="container">
    <div class="content">
        <div class="space-15"></div>
        <div class="buildy-grid-v-center col-100-center">
            <h1 class="title-h1">Gestion des pages</h1>
        </div>
        <div class="space-40"></div>
        <div class="width-100">
            <table class="dataTable table table-striped" id="page-table">
                <thead>
                  <tr>
                      <th>Id</th>
                      <th>Titre</th>
                      <th>Route</th>
                      <th>Contenu</th>
                      <th>Date&nbsp;de création</th>
                      <th>Date&nbsp;de modification</th>
                      <th>Action</th>
                  </tr>
                </thead>
                <tbody>
                  <?php foreach($pages as $key => $value): ?>
                      <tr>
                          <td><?= $value['id'] ?></td>
                          <td><?= htmlentities($value['title']) ?></td>
                          <td><?= htmlentities($value['slug']) ?></td>
                          <td><?= Text::excerpt(htmlentities($value['content'])) ?></td>
                          <td><?= $value['created_at'] ?></td>
                          <td><?= $value['updated_at'] ?></td>
                          <td>
                            <form action="/dashboard/admin/pages/delete" method="post">
                                <input type="hidden" name="id" value="<?= $value['id'] ?>">
                                <input  class="button-classic-sm-error" type="submit" value="Supprimer">
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
                    <th>Date&nbsp;de création</th>
                    <th>Date&nbsp;de modification</th>
                    <th>Action</th>
                  </tr>
                </tfoot>
            </table>
        </div>
        <div class="space-40"></div>
        <div class="col-100-center">
            <?php $this->addComponent('formAdminPage', ""); ?>
        </div>
    </div>
</div>
