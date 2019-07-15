<div id="container" class="container">
    <div class="content">
        <div class="space-15"></div>
        <div class="buildy-grid-v-center col-100-center">
            <h1 class="title-h1">CRUD COMMENTS</h1>
        </div>
        <div class="space-40"></div>
        <div class="col-100-center">
            <table class="table-blue">
                <tr class="title-table-blue" colspan>
                    <th>Id</th>
                    <th>Content</th>
                    <th>Users_ID</th>
                    <th>Comments_ID</th>
                    <th>Articles_ID</th>
                </tr>
                <?php foreach($comments as $key => $value): ?>
                    <tr>
                        <td><?= $value['id'] ?></td>
                        <td><?= $value['name'] ?></td>
                        <td><?= $value['users_id'] ?></td>
                        <td><?= $value['upvotes'] ?></td>
                        <td><?= $value['downvotes'] ?></td>
                        <td>
                            <form action="/dashboard/admin/comments/delete" method="post">
                                <input type="hidden" name="id" value="<?= $value['id'] ?>">
                                <input type="submit" value="Delete">
                            </form>
                        </td>
                    </tr>
                <?php endforeach; ?>
            </table>
        </div>
        <div class="col-100-center">
            <?php $this->addComponent('formAdminComment', ""); ?>
        </div>
        </div>
    </div>
