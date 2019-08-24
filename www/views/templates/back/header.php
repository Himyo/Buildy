<header id="header" class="buildy-grid-v-center blue-buildy-bg lightgrey-font">
  <div class="buildy-grid-v-center margin-right-10">
    <a href="/"><img src="../../../public/assets/buildy-good-logo.png" alt="header-logo" width="250px" height="60px"></a>
  </div>
    <?php
        use MVC\Core\Auth;
    ?>
  <div class="buildy-grid-v-center margin-right-10">
    <a class="margin-right-10" href="/Admin/dashboard"><p>Tableau&nbsp;de&nbsp;bord</p></a>

     <?php if(Auth::isAdmin()):?>
        <a class="margin-right-10" href="/Admin/mysite"><p>Mon&nbsp;Site</p></a>
      <?php endif;?>

  </div>
  <div class="buildy-grid-v-center col-100-end margin-right-10">
    <a href="/site"><p>Accès au site front</p></a>
  </div>
</header>
