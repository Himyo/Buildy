<div id="container" class="container">
    <div class="content">
        <div class="space-15"></div>
        <div class="buildy-grid-v-center col-100-center">
            <h1 class="title-h1">CRUD DECKS</h1>
        </div>
        <div class="space-40"></div>

        <div class="col-100-center">
            <table class="table-blue">
                <tr class="title-table-blue" colspan>
                    <th>ID</th>
                    <th>Nom</th>
                    <th>ID membre</th>
                    <th>Like</th>
                    <th>Dislike</th>
                    <th>Action</th>
                </tr>
                <?php foreach($decks as $key => $value): ?>
                    <tr>
                        <td><?= $value['id'] ?></td>
                        <td><?= $value['name'] ?></td>
                        <td><?= $value['users_id'] ?></td>
                        <td><?= $value['upvotes'] ?></td>
                        <td><?= $value['downvotes'] ?></td>
                        <td>
                            <form action="/Admin/dashboard/decks/delete" method="post">
                                <input type="hidden" name="id" value="<?= $value['id'] ?>">
                                <input type="submit" value="Delete">
                            </form>
                        </td>
                    </tr>
                <?php endforeach; ?>
            </table>
        </div>
        <div class="space-40"></div>
        <div class="col-100-center">
            <?php $this->addComponent('formAdminDeck', ""); ?>
        </div>
        <div class="space-40"></div>
    </div>
</div>
