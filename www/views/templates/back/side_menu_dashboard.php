<div id="menu" class="buildy-grid-v-start min-width-250 grey-buildy-bg lightgrey-font">
  <div class="col-100-center">
    <div class="column width-100">
      <div class="space-40"></div>
        <?php
          use MVC\Core\Auth;
        ?>
        <?php if(Auth::isAdmin()):?>
            <a class="padding-10" href="/admin/dashboard/users"><p><i class="icon-sidemenu fas fa-users"></i> Gestion Membres</p></a>
        <?php endif; ?>
        <a class="padding-10" href="/admin/dashboard/articles"><p><i class="icon-sidemenu fas fa-newspaper"></i> Gestion Articles</p></a>
        <a class="padding-10" href="/admin/dashboard/comments"><p><i class="icon-sidemenu fas fa-comment"></i> Gestion des commentaires</p></a>
        <a class="padding-10" href="/admin/dashboard/tournaments"><p><i class="icon-sidemenu fas fa-dice-d20"></i> Gestion des tournois</p></a>
        <a class="padding-10" href="/admin/dashboard/cards"><p><i class="icon-sidemenu fab fa-wizards-of-the-coast"></i> Gestion des cartes</p></a>
        <a class="padding-10" href="/admin/dashboard/decks"><p><i class="icon-sidemenu fab fa-wizards-of-the-coast"></i> Gestions des decks</p></a>
        <a class="padding-10" href="/admin/dashboard/pages"><p><i class="icon-sidemenu fas fa-file"></i> Gestion des pages</p></a>
    </div>
  </div>
</div>
