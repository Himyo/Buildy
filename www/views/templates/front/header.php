<header id="header" class="buildy-grid-v-center grey-buildy-bg lightgrey-font" style="box-shadow: 0px 5px 5px #525374;">
    <div class="buildy-grid-v-center margin-right-10">
        <a href="/site"><img src="https://fireteam.fr/wp-content/uploads/2019/04/magic-the-gathering.png" alt="header-logo" style="width: 250px; height: 50px"></a>
    </div>
    <div class="buildy-grid-v-center margin-right-10">
        <a class="margin-right-10" href="/site/blog"><p style="color: #0c2033">Actualités</p></a>
    </div>
    <div class="buildy-grid-v-center margin-right-10">
        <a class="margin-right-10" href="/site/decks/all"><p style="color: #0c2033">Decks</p></a>
    </div>
    <div class="buildy-grid-v-center margin-right-10">
        <a class="margin-right-10" href="/site/tournaments"><p style="color: #0c2033">Tournois</p></a>
    </div>
    <?php
        use MVC\Core\Auth;
    ?>
    <?php if(Auth::isAuthenticate()):?>
        <div class="buildy-grid-v-center col-100-end margin-right-10">
            <a class="margin-left-10" href="/site/decks"><p style="color: #0c2033">Gérer mes decks</p></a>
            <a class="margin-left-10" href="/site/profile"><p style="color: #0c2033">Bonjour, <?= ucfirst(Auth::User()['firstname'])?></p></a>
            <a class="margin-left-10" href="/site/deconnexion"><p style="color: #0c2033">Se déconnecter</p></a>

            <?php if(Auth::isAdmin()):?>
                <a class="margin-left-10" href="/Admin"><p style="color: #2c2033">Accès Admin</p></a>
            <?php elseif(Auth::isModerator()):?>
                <a class="margin-left-10" href="/Admin/dashboard"><p style="color: #0c2033">Accès Moderation</p></a>
            <?php endif; ?>
        </div>
    <?php else: ?>
        <div class="buildy-grid-v-center col-100-end margin-right-10">
            <a class="margin-left-10" href="/site/login"><p style="color: #0c2033">Se connecter</p></a>
            <a class="margin-left-10" href="/site/register"><p style="color: #0c2033">S'inscrire</p></a>
        </div>
    <?php endif; ?>
</header>
