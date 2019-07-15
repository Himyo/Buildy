<div id="container" class="container">
    <div class="content">
      <div class="space-15"></div>
      <div class="buildy-grid-v-center col-100-center">
        <h1 class="title-h1">CRUD USERS</h1>
      </div>
      <div class="space-40"></div>
      <div class="width-100" style="overflow-x: scroll">
        <table class="table-blue">
            <thead>
              <tr class="title-table-blue">
                <th><?= "id" ?></th>
                <th><?= "lastname" ?></th>
                <th><?= "firstname" ?></th>
                <th><?= "email" ?></th>
                <th><?= "password" ?></th>
                <th><?= "status" ?></th>
                <th><?= "role" ?></th>
                <th><?= "token" ?></th>
                <th><?= "photo_id" ?></th>
                <th colspan="4">Action</th>
            </tr>
            </thead>
            <tbody>
              <?php foreach($users as $key => $value): ?>
                  <tr>
                      <td><?= $value['id'] ?></td>
                      <td><?= $value['lastname'] ?></td>
                      <td><?= $value['firstname'] ?></td>
                      <td><?= $value['email'] ?></td>
                      <td><?= $value['password'] ?></td>
                      <td><?= $value['status'] ?></td>
                      <td><?= $value['role'] ?></td>
                      <td><?= $value['token'] ?></td>
                      <td><?= $value['photo_id'] ?></td>
                      <td>
                          <form action="/dashboard/admin/users/delete" method="post">
                              <input type="hidden" name="id" value="<?= $value['id'] ?>">
                              <input type="submit" value="Delete">
                          </form>
                      </td>
                  </tr>
              <?php endforeach; ?>
            </tbody>
        </table>
      </div>
      <div class="space-40"></div>
      <div class="col-100-center">
          <?php $this->addComponent('formAdminUser', ""); ?>
      </div>
    </div>
</div>
