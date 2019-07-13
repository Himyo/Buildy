<div id="container" class="container">
    <div class="content">
        <h1>LISTE DE CARTES</h1>
       
        <table class="table-classic">
        <tr class="title-table-classic" colspan>
                    <th><?= "id" ?></th>
                    <th><?= "name" ?></th>
                    <th><?= "toughness" ?></th>
                    <th><?= "power" ?></th>
                    <th><?= "mana_cost" ?></th>
                </tr>
            <?php foreach($cards as $key => $value): ?>
                <tr>
                    <td><?= $value['id'] ?></td>
                    <td><?= $value['name'] ?></td>
                    <td><?= $value['toughness'] ?></td>
                    <td><?= $value['power'] ?></td>
                    <td><?= $value['mana_cost'] ?></td>
                </tr>
            <?php endforeach; ?>
        </table>
    </div>
</div>