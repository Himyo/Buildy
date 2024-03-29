<?php 
use MVC\Core\Text;
?>
<div id="container" class="container">
    <div class="content">
        <div class="space-15"></div>
        <div class="buildy-grid-v-center col-100-center">
            <h1 class="title-h1">Gestion des articles</h1>
        </div>
        <div class="space-40"></div>
        <div class="width-100">
            <table class="dataTable table table-striped" id="article-table">
                <thead>
                  <tr>
                      <th>Id</th>
                      <th>Titre</th>
                      <th>Contenu</th>
                      <th>Id&nbsp;membre</th>
                      <th>Id&nbsp;catégorie</th>
                      <th>Status</th>
                      <th>Date&nbsp;créé</th>
                      <th>Action</th>
                  </tr>
                </thead>
                <tbody>
                  <?php foreach($articles as $key => $value): ?>
                      <tr>
                          <td><?= $value['id'] ?></td>
                          <td><?= htmlentities($value['title']) ?></td>
                          <td><?= Text::excerpt(htmlentities($value['content'])) ?></td>
                          <td><?= $value['users_id'] ?></td>
                          <td><?= $value['categories_id'] ?></td>
                          <td><?= $value['state'] ?></td>
                          <td><?= $value['created_at'] ?></td>
                          <td>
                            <form action="/dashboard/admin/articles/delete" method="post">
                                <input type="hidden" name="id" value="<?= $value['id'] ?>">
                                <input class="button-classic-sm-error" type="submit" value="Supprimer">
                            </form>
                          </td>
                      </tr>
                  <?php endforeach; ?>
                </tbody>
                <tfoot>
                  <tr>
                      <th>Id</th>
                      <th>Titre</th>
                      <th>Contenu</th>
                      <th>Id&nbsp;membre</th>
                      <th>Id&nbsp;catégorie</th>
                      <th>Status</th>
                      <th>Date&nbsp;créé</th>
                      <th>Action</th>
                  </tr>
                </tfoot>
            </table>
        </div>

        <div class="space-50"></div>
        <hr class="">
        <div class="space-50"></div>
        
        <div class="col-100-center">
            <?php $this->addComponent('formAdminArticle', ""); ?>
        </div>
    </div>
</div>
