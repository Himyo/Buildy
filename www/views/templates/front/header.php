<header id="header" class="buildy-grid-v-center blue-buildy-bg lightgrey-font">
  <div class="buildy-grid-v-center margin-right-10">
    <a href="/site"><img src="https://via.placeholder.com/250x60" alt="header-logo"></a>
  </div>
  <div class="buildy-grid-v-center margin-right-10">
    <a class="margin-right-10" href="#"><p>Hello</p></a>
    <a class="margin-right-10" href="/site/cards"><p>Voir les cartes</p></a>
    <?php if(isset($_SESSION['user'])): ?>
      <a class="margin-left-10" href="/site/profile"><p>Bonjour, <?= ucfirst($_SESSION['user']['firstname']) ?></p></a>
      <a class="margin-left-10" href="/site/deconnexion"><p>Se déconnecter</p></a>
    <?php else: ?>
      <a class="margin-left-10" href="/site/login"><p>Se connecter</p></a>
      <a class="margin-left-10" href="/site/register"><p>S'inscrire</p></a>
    <?php endif; ?>
  </div>
</header>
