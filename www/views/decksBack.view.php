<div id="container" class="container">
    <div class="content">
        <h1>CRUD DECKS</h1>

        <table class="table-classic">
            <tr class="title-table-classic" colspan>
                <th><?= "id" ?></th>
                <th><?= "name" ?></th>
                <th><?= "users_id" ?></th>
                <th><?= "upvotes" ?></th>
                <th><?= "downvotes" ?></th>
            </tr>
            <?php foreach($decks as $key => $value): ?>
                <tr>
                    <td><?= $value['id'] ?></td>
                    <td><?= $value['name'] ?></td>
                    <td><?= $value['users_id'] ?></td>
                    <td><?= $value['upvotes'] ?></td>
                    <td><?= $value['downvotes'] ?></td>
                    <td>
                        <form action="/dashboard/admin/decks/delete" method="post">
                            <input type="hidden" name="id" value="<?= $value['id'] ?>">
                            <input type="submit" value="Delete">
                        </form>
                    </td>
                </tr>
            <?php endforeach; ?>
        </table>

        <br><br>
        <div>
            <?php $this->addComponent('formAdminDeck', ""); ?>
        </div>
    </div>
</div>
