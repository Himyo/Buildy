<div id="container" class="container">
    <div class="content">
      <div class="space-15"></div>
      <div class="buildy-grid-v-center col-100-center">
        <h1 class="title-h1">CRUD PAGES</h1>
      </div>
      <div class="space-40"></div>

        <div class="col-100-center">
          <table class="table-blue">
            <tr class="title-table-blue">
                <th><?= "id" ?></th>
                <th><?= "title" ?></th>
                <th><?= "slug" ?></th>
                <th><?= "content" ?></th>
                <th><?= "created_at" ?></th>
                <th><?= "updated_at" ?></th>
                <th>Action</th>
            </tr>
            <?php foreach($pages as $key => $value): ?>
            <tr>
                <td><?= $value['id'] ?></td>
                <td><?= $value['title'] ?></td>
                <td><?= $value['slug'] ?></td>
                <td><?= $value['content'] ?></td>
                <td><?= $value['created_at'] ?></td>
                <td><?= $value['updated_at'] ?></td>
                <td>
                    <form action="/dashboard/admin/pages/delete" method="post">
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
            <?php $this->addComponent('formAdminPage', ""); ?>
        </div>
    </div>
</div>
