<div id="container" class="container">
    <div class="content">
        <h1>CRUD USERS</h1>
        
        <table class="table-classic">
                <tr class="title-table-classic" colspan>
                    <th><?= "id" ?></th>
                    <th><?= "lastname" ?></th>
                    <th><?= "firstname" ?></th>
                    <th><?= "email" ?></th>
                    <th><?= "password" ?></th>
                    <th><?= "status" ?></th>
                    <th><?= "role" ?></th>
                    <th><?= "token" ?></th>
                    <th><?= "photo_id" ?></th>
                </tr>
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
        </table>

        <br><br>
        <div>  
            <?php $this->addComponent('formAdminUser', ""); ?>
        </div>
    </div>
</div>
