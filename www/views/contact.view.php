<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Accueil</title>
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.0/css/all.css"
          integrity="sha384-lZN37f5QGtY3VHgisS14W3ExzMWZxybE1SJSEsQp9S+oqd12jhcu+A56Ebc1zFSJ" crossorigin="anonymous">
    <link rel="stylesheet" href="style.css">
    <script type="text/javascript" src="js/script.js"></script>
  </head>
  <body>
    <main>
      <?php include "header.php"; ?>
      <?php include "header_640.php"; ?>
      <div id="main-container" class="main-container">
         <?php include "side_menu_dashboard.php"; ?>
         <div id="container" class="container">
            <div class="content">
              <div class="space-15"></div>
              <div class="buildy-grid-v-center col-100-center">
                <h1 class="title-h1">Contact</h1>
              </div>
              <div class="space-40"></div>
              <div class="buildy-grid-v-start">
                <div class="col-50-center">
                  <form class="" action="contact.php" method="post">
                     <div class="column">
                       <label class="" for="email-user">Email:</label>
                       <input class="input-classic" type="text" name="" value="" placeholder="Adresse e-mail">
                     </div>
                     <div class="space-10">
                     </div>
                     <div class="column">
                       <label class="" for="email-user">Objet:</label>
                       <input class="input-classic" type="text" name="" value="" placeholder="Objet">
                     </div>
                     <div class="space-10">
                     </div>
                     <div class="column">
                       <label class="" for="email-user">Message:</label>
                       <textarea name="textarea" rows="10" cols="40"></textarea>
                     </div>
                     <div class="space-10">
                     </div>
                     <div class="column">
                       <button class="button-classic" type="submit" name="button">Envoyer</button>
                     </div>
                  </form>
                </div>
                <div class="col-50-center">
                  <div class="column">
                    <h2 class="title-h2">Informations</h2>
                    <p>242 Rue du Faubourg Saint-Antoine, 75012 Paris</p>
                    <p>01 56 06 90 41</p>
                  </div>
                </div>
              </div>
            </div>
         </div>
      </div>
      <?php include "footer.php"; ?>
    </main>
  </body>
</html>
