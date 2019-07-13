<div id="container" class="container">
    <div class="content">
        <h1>CRUD ARTICLE</h1>
        
        <table class="table-classic">
                <tr class="title-table-classic" colspan>
                    <th><?= "id" ?></th>
                    <th><?= "title" ?></th>
                    <th><?= "content" ?></th>
                    <th><?= "users_id" ?></th>
                    <th><?= "categories_id" ?></th>
                    <th><?= "state" ?></th>
                    <th><?= "created_at" ?></th>
                </tr>
            <?php foreach($articles as $key => $value): ?>
                <tr>
                    <td><?= $value['id'] ?></td>
                    <td><?= $value['title'] ?></td>
                    <td><?= $value['content'] ?></td>
                    <td><?= $value['users_id'] ?></td>
                    <td><?= $value['categories_id'] ?></td>
                    <td><?= $value['state'] ?></td>
                    <td><?= $value['created_at'] ?></td>
                    <td>
                        <form action="/dashboard/admin/articles/delete" method="post">
                            <input type="hidden" name="id" value="<?= $value['id'] ?>">
                            <input type="submit" value="Delete">
                        </form>
                    </td>
                </tr>
            <?php endforeach; ?>
        </table>

        <br><br>
        <div>  
            <?php $this->addComponent('formAdminArticle', ""); ?>
        </div>
    </div>
</div>
