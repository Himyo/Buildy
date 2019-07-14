<div id="container" class="container">
    <div class="content">
      <div class="space-15"></div>
      <div class="buildy-grid-v-center col-100-center">
        <h1 class="title-h1">CRUD TOURNOIS</h1>
      </div>
      <div class="space-40"></div>
        <div class="col-100-center">
          <table class="table-blue">
                  <tr class="title-table-blue" colspan>
                      <th><?= "id" ?></th>
                      <th><?= "name" ?></th>
                      <th><?= "description" ?></th>
                      <th><?= "nomber of contenders" ?></th>
                      <th><?= "created_at" ?></th>
                      <th><?= "ended_at" ?></th>
                  </tr>
              <?php foreach($tournaments as $key => $value): ?>
                  <tr>
                      <td><?= $value['id'] ?></td>
                      <td><?= $value['name'] ?></td>
                      <td><?= $value['description'] ?></td>
                      <td><?= $value['nb_contenders'] ?></td>
                      <td><?= $value['created_at'] ?></td>
                      <td><?= $value['ended_at'] ?></td>
                      <td>
                          <form action="/dashboard/admin/tournaments/delete" method="post">
                              <input type="hidden" name="id" value="<?= $value['id'] ?>">
                              <input type="submit" value="Delete">
                          </form>
                      </td>
                  </tr>
              <?php endforeach; ?>
          </table>
        </div>

        <br><br>
        <div class="col-100-center">
            <?php $this->addComponent('formAdminTournament', ""); ?>
        </div>
    </div>
</div>
