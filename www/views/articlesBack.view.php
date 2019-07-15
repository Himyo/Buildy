<div id="container" class="container">
    <div class="content">
        <div class="space-15"></div>
        <div class="buildy-grid-v-center col-100-center">
            <h1 class="title-h1">CRUD ARTICLES</h1>
        </div>
        <div class="space-40"></div>
        <div class="col-100-center">
            <table class="table-blue">
                <tr class="title-table-blue" colspan>
                    <th>Id</th>
                    <th>Titre</th>
                    <th>Contenu</th>
                    <th>Id membre</th>
                    <th>Id catégorie</th>
                    <th>Status</th>
                    <th>Date créé</th>
                    <th>Action</th>
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
        </div>
        <div class="col-100-center">
            <?php $this->addComponent('formAdminArticle', ""); ?>
        </div>
    </div>
</div>
