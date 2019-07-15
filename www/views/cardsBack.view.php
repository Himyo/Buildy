<div id="container" class="container">
    <div class="content">
        <div class="space-15"></div>
        <div class="buildy-grid-v-center col-100-center">
            <h1 class="title-h1">CRUD CARDS</h1>
        </div>
        <div class="space-40"></div>

        <div class="col-100-center">
            <table class="table-blue">
            <tr class="title-table-blue" colspan>
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
        <div class="space-40"></div>
    </div>
</div>