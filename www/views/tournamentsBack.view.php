<div id="container" class="container">
    <div class="content">
        <h1>CRUD TOURNAMENT</h1>
        
        <table class="table-classic">
                <tr class="title-table-classic" colspan>
                    <th><?= "id" ?></th>
                    <th><?= "name" ?></th>
                    <th><?= "description" ?></th>
                    <th><?= "nomber of contenders" ?></th>
                    <th><?= "created_at" ?></th>
                    <th><?= "ended_at" ?></th>
                </tr>
            <?php foreach($tournaments as $key => $value): ?>
                <tr>
                    <td><?= $value['id'] ?></td>
                    <td><?= $value['name'] ?></td>
                    <td><?= $value['description'] ?></td>
                    <td><?= $value['nb_contenders'] ?></td>
                    <td><?= $value['created_at'] ?></td>
                    <td><?= $value['ended_at'] ?></td>
                    <td>
                        <form action="/dashboard/admin/tournaments/delete" method="post">
                            <input type="hidden" name="id" value="<?= $value['id'] ?>">
                            <input type="submit" value="Delete">
                        </form>
                    </td>
                </tr>
            <?php endforeach; ?>
        </table>

        <br><br>
        <div>  
            <?php $this->addComponent('formAdminTournament', ""); ?>
        </div>
    </div>
</div>
