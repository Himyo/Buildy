<div id="container" class="container">
    <div class="content">
      <div class="space-15"></div>
      <div class="buildy-grid-v-center col-100-center">
        <h1 class="title-h1">Gestion des tournois</h1>
      </div>
      <div class="space-40"></div>
        <div class="col-100-center">
          <table class="dataTable">
              <thead>
                <tr>
                    <th>Id</th>
                    <th>Nom</th>
                    <th>Description</th>
                    <th>Nombre de participants</th>
                    <th>Date de création</th>
                    <th>Date de fin</th>
                </tr>
              </thead>
              <tbody>
                <?php foreach($tournaments as $key => $value): ?>
                    <tr>
                        <td><?= $value['id'] ?></td>
                        <td><?= htmlentities($value['name']) ?></td>
                        <td><?= htmlentities($value['description'])?></td>
                        <td><?= $value['nb_contenders'] ?></td>
                        <td><?= $value['created_at'] ?></td>
                        <td><?= $value['ended_at'] ?></td>
                        <td>
                            <form action="/admin/dashboard/tournaments/delete" method="post">
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
                  <th>Nom</th>
                  <th>Description</th>
                  <th>Nombre de participants</th>
                  <th>Date de création</th>
                  <th>Date de fin</th>
                </tr>
              </tfoot>
          </table>
        </div>

        <br><br>
        <div class="col-100-center">
            <?php $this->addComponent('formAdminTournament', ""); ?>
        </div>
    </div>
</div>
