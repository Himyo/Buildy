<?php 
use MVC\Core\Text;
?>
<div id="container" class="container">
    <div class="content">
      <div class="space-15"></div>
      <div class="buildy-grid-v-center col-100-center">
        <h1 class="title-h1">Gestion des tournois</h1>
      </div>
      <div class="space-40"></div>
        <div class="width-100">
          <table class="dataTable table table-striped" id="tournament-table">
              <thead>
                <tr>
                    <th>Id</th>
                    <th>Nom</th>
                    <th>Description</th>
                    <th>Nombre&nbsp;de participants</th>
                    <th>Date&nbsp;de création</th>
                    <th>Date&nbsp;de fin</th>
                    <th>Action</th>
                </tr>
              </thead>
              <tbody>
                <?php foreach($tournaments as $key => $value): ?>
                    <tr>
                        <td><?= $value['id'] ?></td>
                        <td><?= htmlentities($value['name']) ?></td>
                        <td><?= Text::excerpt(htmlentities($value['description']))?></td>
                        <td><?= $value['nb_contenders'] ?></td>
                        <td><?= $value['created_at'] ?></td>
                        <td><?= $value['ended_at'] ?></td>
                        <td>
                          <form action="/dashboard/admin/tournaments/delete" method="post">
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
                  <th>Nom</th>
                  <th>Description</th>
                  <th>Nombre&nbsp;de participants</th>
                  <th>Date&nbsp;de création</th>
                  <th>Date&nbsp;de fin</th>
                  <th>Action</th>
                </tr>
              </tfoot>
          </table>
        </div>
        <div class="space-40"></div>
        <div class="col-100-center">
            <?php $this->addComponent('formAdminTournament', ""); ?>
        </div>
    </div>
</div>
