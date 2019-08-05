<div id="menu" class="buildy-grid-v-start min-width-250 grey-buildy-bg lightgrey-font">
  <div class="col-100-center">
    <div class="column width-100">
      <div class="space-40"></div>
        <?php
                use MVC\Core\Auth;
        ?>
        <?php if(Auth::isAdmin()):?>
            <a class="padding-10" href="/Admin/dashboard/users"><p><i class="fas fa-users"></i> Gestion Membres</p></a>
        <?php endif; ?>
        <a class="padding-10" href="/Admin/dashboard/articles"><p><i class="fas fa-newspaper"></i> Gestion Articles</p></a>
        <a class="padding-10" href="/Admin/dashboard/comments"><p><i class="fas fa-comment"></i> Gestion des commentaires</p></a>
        <a class="padding-10" href="/Admin/dashboard/tournaments"><p><i class="fas fa-dice-d20"></i> Gestion des tournois</p></a>
        <a class="padding-10" href="/Admin/dashboard/cards"><p><i class="fab fa-wizards-of-the-coast"></i> Gestion des cartes</p></a>
        <a class="padding-10" href="/Admin/dashboard/decks"><p><i class="fab fa-wizards-of-the-coast"></i> Gestions des decks</p></a>
        <a class="padding-10" href="/Admin/dashboard/pages"><p><i class="fas fa-file"></i> Gestion des pages</p></a>
    </div>
  </div>
</div>
