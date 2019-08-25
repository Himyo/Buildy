<header id="header-640" class="buildy-grid-v-center blue-buildy-bg lightgrey-font">
  <div class="buildy-grid-v-center margin-right-10">
    <a href="/"><img src="../../../public/assets/buildy-good-logo.png" alt="header-logo" width="250px" height="60px"></a>
  </div>
  <div class="buildy-grid-v-center col-100-end margin-right-10">
    <div class="dropdown">
      <a href="#"><i class="title-h2 fas fa-bars"></i></a>
      <div class="dropdown-content" onclick="">
        <?php
            use MVC\Core\Auth;
        ?>
        <a class="dark-grey-font margin-10" href="/Admin/dashboard"><p>Tableau&nbsp;de&nbsp;bord</p></a>
         <?php if(Auth::isAdmin()):?>
            <a class="dark-grey-font margin-10" href="/Admin/mysite"><p>Mon&nbsp;Site</p></a>
          <?php endif;?>
        <a class="dark-grey-font margin-10" href="/site"><p>Accès&nbsp;au&nbsp;site&nbsp;front</p></a>

        <hr>

        <a class="margin-10 dark-grey-font" href="/admin/dashboard/users"><p><i class="icon-sidemenu fas fa-users"></i> Gestion Membres</p></a>
        <a class="margin-10 dark-grey-font" href="/admin/dashboard/articles"><p><i class="icon-sidemenu fas fa-newspaper"></i> Gestion Articles</p></a>
        <a class="margin-10 dark-grey-font" href="/admin/dashboard/comments"><p><i class="icon-sidemenu fas fa-comment"></i> Gestion des commentaires</p></a>
        <a class="margin-10 dark-grey-font" href="/admin/dashboard/tournaments"><p><i class="icon-sidemenu fas fa-dice-d20"></i> Gestion des tournois</p></a>
        <a class="margin-10 dark-grey-font" href="/admin/dashboard/cards"><p><i class="icon-sidemenu fab fa-wizards-of-the-coast"></i> Gestion des cartes</p></a>
        <a class="margin-10 dark-grey-font" href="/admin/dashboard/decks"><p><i class="icon-sidemenu fab fa-wizards-of-the-coast"></i> Gestions des decks</p></a>
        <a class="margin-10 dark-grey-font" href="/admin/dashboard/pages"><p><i class="icon-sidemenu fas fa-file"></i> Gestion des pages</p></a>

        <hr>

        <a class="padding-10 dark-grey-font" href="/admin/mysite/page"><p><i class="icon-sidemenu fas fa-file"></i> Gestion des Pages</p></a>
        <a class="padding-10 dark-grey-font" href="/admin/mysite/addPage"><p><i class="icon-sidemenu fas fa-file"></i> Ajouter une Page</p></a>
        <a class="padding-10 dark-grey-font" href="/admin/mysite/cards"><p><i class="icon-sidemenu fab fa-wizards-of-the-coast"></i> Liste des Cards</p></a>
      </div>
    </div>
  </div>
</header>

<script type="text/javascript">
  $(".dropdown").on("click",function(){
    $(".dropdown-content").toggle();
  });
</script>
