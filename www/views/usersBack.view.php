<div id="container" class="container">
    <div class="content">
      <div class="space-15"></div>
      <div class="buildy-grid-v-center col-100-center">
        <h1 class="title-h1">Gestion des membres</h1>
      </div>
      <div class="space-40"></div>
      <div class="width-100">
        <table class="dataTable table table-striped" id="user-table">
            <thead>
              <tr>
                <th>Id</th>
                <th>Prénom</th>
                <th>Nom</th>
                <th>Email</th>
                <th>Status</th>
                <th>Rôle</th>
                <th>Id&nbsp;photo</th>
                <th colspan="4">Action</th>
              </tr>
            </thead>
            <tbody>
              <?php foreach($users as $key => $value): ?>
                  <?php if($value['role'] != 'ADMIN'):?>
                  <tr>
                      <td><?= $value['id'] ?></td>
                      <td><?= $value['lastname'] ?></td>
                      <td><?= $value['firstname'] ?></td>
                      <td><?= $value['email'] ?></td>
                      <td><?= $value['status'] ?></td>
                      <td><?= $value['role'] ?></td>
                      <td><?= $value['token'] ?></td>
                      <td><?= $value['photo_id'] ?></td>
                      <td>
                        <form action="/dashboard/admin/users/delete" method="post">
                            <input type="hidden" name="id" value="<?= $value['id'] ?>">
                            <input  class="button-classic-sm-error" type="submit" value="Supprimer">
                        </form>
                      </td>
                  </tr>
                  <?php endif; ?>
              <?php endforeach; ?>
            </tbody>
            <tfoot>
              <tr>
                <th>Id</th>
                <th>Prénom</th>
                <th>Nom</th>
                <th>Email</th>
                <th>Status</th>
                <th>Rôle</th>
                <th>Id&nbsp;photo</th>
                <th colspan="4">Action</th>
              </tr>
            </tfoot>
        </table>
      </div>
      <div class="space-40"></div>
      <div class="col-100-center">
          <?php $this->addComponent('formAdminUser', ""); ?>
      </div>
    </div>
</div>
