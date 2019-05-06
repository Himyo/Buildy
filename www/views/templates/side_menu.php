<div class="side-menu">
  <div class="menu-title"><a href="/"><i class="fas fa-home"></i> Accueil</a></div>
  <div class="menu-title"><a href="/addPage"><i class="fas fa-plus"></i> Ajouter une page</a></div>
  <div class="menu-title"><a href="/modifyPage"><i class="fas fa-file-medical"></i> Modifier une page</a></div>
  <div class="menu-title"><a onclick="dropdown()"><i class="fas fa-database"></i> Base de données</a></div>
  <ul id="dropdown" class="dropdown" style="visibility: hidden; height: 0;">
      <li><a href="/articlesBack" id="Articles" onclick="getDatabase(this.id)"> Gestion des articles</a></li>
      <li><a href="/cardsBack" id="Cards" onclick="getDatabase(this.id)"> Gestion des cartes</a></li>
      <li><a href="/gamesBack" id="Games" onclick="getDatabase(this.id)"> Gestion des jeux</a></li>
      <li><a href="/usersBack" id="Users" onclick="getDatabase(this.id)"> Gestion des users</a></li>
      <li><a href="/tournamentsBack" id="Tournaments" onclick="getDatabase(this.id)"> Gestion des tournois</a></li>
  </ul>
  <!-- <div class="menu-title"><a href="../preview.view.php"><i class="fas fa-database"></i> Visualiser la page</a></div> -->
</div>
