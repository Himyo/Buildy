<div id="container" class="container">
    <div class="content">
        <h1>CRUD PAGES</h1>
        
        <table class="table-classic">
            <?php foreach($pages as $key => $value): ?>
                <tr class="title-table-classic" colspan>
                    <th><?= "id" ?></th>
                    <th><?= "title" ?></th>
                    <th><?= "slug" ?></th>
                    <th><?= "content" ?></th>
                    <th><?= "created_at" ?></th>
                    <th><?= "updated_at" ?></th>
                </tr>
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

        <br><br>
        <div>  
            <?php $this->addComponent('formAdminPage', ""); ?>
        </div>
    </div>
</div>
