<div id="container" class="container">
    <div class="content">
        <div class="space-15"></div>
        <div class="buildy-grid-v-center col-100-center">
            <h1 class="title-h1">Gestion des cartes</h1>
        </div>
        <div class="space-40"></div>

        <div class="col-100-center">
            <table class="dataTable">
              <thead>
                <tr>
                    <th>Id</th>
                    <th>Nom</th>
                    <th>Endurance</th>
                    <th>Puissance</th>
                    <th>Coût en mana</th>
                </tr>
              </thead>
              <tbody>
                <?php foreach($cards as $key => $value): ?>
                    <tr>
                        <td><?= $value['id'] ?></td>
                        <td><?= $value['name'] ?></td>
                        <td><?= $value['toughness'] ?></td>
                        <td><?= $value['power'] ?></td>
                        <td><?= $value['mana_cost'] ?></td>
                    </tr>
                <?php endforeach; ?>
              </tbody>
              <tfoot>
                <tr>
                  <th>Id</th>
                  <th>Nom</th>
                  <th>Endurance</th>
                  <th>Puissance</th>
                  <th>Coût en mana</th>
                </tr>
              </tfoot>
            </table>
        </div>
        <div class="space-40"></div>
    </div>
</div>
