<div id="main-container" class="main-container">
    <div id="mySidenav" class="sidenav">
        <?php include "templates/back/side_menu_dashboard.php"; ?>
    </div>
    <div id="container" class="container">
        <div class="content">
            <div class="contact-title">
                <h3>Contact</h3>
            </div>
            <div class="contact">
                <div class="form-contact">
                    <form class="" action="contact.php" method="post">
                        <label class="label-contact" for="email-user">Email:</label>
                        <input class="input-contact" type="text" name="" value="" placeholder="Adresse e-mail"><br>
                        <label class="label-contact" for="email-user">Objet:</label>
                        <input class="input-contact" type="text" name="" value="" placeholder="Objet"><br>
                        <label class="label-contact" for="email-user">Message:</label>
                        <textarea name="textarea" rows="10" cols="40"></textarea><br>
                        <input class="btn-contact" type="button" name="" value="Envoyer">
                    </form>
                </div>
                <div class="info-contact">
                    <h3>Informations</h3>
                    <p>242 Rue du Faubourg Saint-Antoine, 75012 Paris</p>
                    <p>01 56 06 90 41</p>
                </div>
            </div>
        </div>
    </div>
</div>