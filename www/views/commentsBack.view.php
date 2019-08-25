<?php
    use MVC\Core\Text;
?>
<div id="container" class="container">
    <div class="content">
        <div class="space-15"></div>
        <div class="buildy-grid-v-center col-100-center">
            <h1 class="title-h1">Gestion des commentaires</h1>
        </div>
        <div class="space-40"></div>
        <div class="width-100">
            <table class="dataTable table table-striped" id="comment-table">
                <thead>
                  <tr>
                      <th>Id</th>
                      <th>Contenu</th>
                      <th>Id&nbsp;membre</th>
                      <th>Id&nbsp;commentaire</th>
                      <th>Id&nbsp;article</th>
                      <th>Action</th>
                  </tr>
                </thead>
                <tbody>
                  <?php foreach($comments as $key => $value): ?>
                      <tr>
                          <td><?= $value['id'] ?></td>
                          <td><?= Text::excerpt(htmlentities($value['content'])) ?></td>
                          <td><?= $value['users_id'] ?></td>
                          <td><?= $value['comments_id']   ?></td>
                          <td><?= $value['articles_id'] ?></td>
                          <td>
                            <form action="/dashboard/admin/comments/delete" method="post">
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
                      <th>Contenu</th>
                      <th>Id&nbsp;membre</th>
                      <th>Id&nbsp;commentaire</th>
                      <th>Id&nbsp;article</th>
                      <th>Action</th>
                  </tr>
                </tfoot>
            </table>
        </div>

        <div class="space-50"></div>
        <hr class="">
        <div class="space-50"></div> 


        <div class="col-100-center">
            <?php $this->addComponent('formAdminComment', ""); ?>
        </div>
        </div>
    </div>
