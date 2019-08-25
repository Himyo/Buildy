<div id="container" class="container">
    <div class="content">
        <div class="space-15"></div>
        <div class="buildy-grid-v-center col-100-center">
            <h1 class="title-h1">Gestion des decks</h1>
        </div>
        <div class="space-40"></div>

        <div class="width-100">
            <table class="dataTable table table-striped" id="deck-table">
                <thead>
                  <tr>
                      <th>Id</th>
                      <th>Nom</th>
                      <th>Id&nbsp;membre</th>
                      <th>Like</th>
                      <th>Dislike</th>
                      <th>Action</th>
                  </tr>
                </thead>
                <tbody>
                  <?php foreach($decks as $key => $value): ?>
                      <tr>
                          <td><?= $value['id'] ?></td>
                          <td><?= htmlentities($value['name'])?></td>
                          <td><?= $value['users_id'] ?></td>
                          <td><?= $value['upvotes'] ?></td>
                          <td><?= $value['downvotes'] ?></td>
                          <td>
                            <form action="/dashboard/admin/decks/delete" method="post">
                                <input type="hidden" name="id" value="<?= $value['id'] ?>">
                                <input  class="button-classic-sm-error" type="submit" value="Supprimer">
                            </form>
                          </td>
                      </tr>
                  <?php endforeach; ?>
                </tbody>
                <tfoot>
                  <tr>
                      <th>Id</th>
                      <th>Nom</th>
                      <th>Id&nbsp;membre</th>
                      <th>Like</th>
                      <th>Dislike</th>
                      <th>Action</th>
                  </tr>
                </tfoot>
            </table>
        </div>

        <div class="space-50"></div>
        <hr class="">
        <div class="space-50"></div>
        
        <div class="space-40"></div>
        <div class="col-100-center">
            <?php $this->addComponent('formAdminDeck', ""); ?>
        </div>
        <div class="space-40"></div>
    </div>
</div>
