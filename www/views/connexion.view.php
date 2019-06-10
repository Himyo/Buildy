<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Connexion</title>
    <link href="https://fonts.googleapis.com/css?family=Josefin+Sans|Montserrat|Quicksand" rel="stylesheet">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.0/css/all.css"
          integrity="sha384-lZN37f5QGtY3VHgisS14W3ExzMWZxybE1SJSEsQp9S+oqd12jhcu+A56Ebc1zFSJ" crossorigin="anonymous">
    <link rel="stylesheet" href="style.css">
  </head>
  <body>
    <div class="width100">
      <div class="buildy-grid-v-center height-100">
        <div class="col-50-center height-100 blue-buildy-bg lightgrey-font">
          <div class="buildy-grid-v-center">
            <div class="column white">
              <h1 class="title-h1">Buildy</h1>
              <h2 class="title-h2">Backoffice</h2>
            </div>
          </div>
        </div>
        <div class="col-50-center">
          <div class="column">
            <h1 class="title-h1">Connexion</h1>
            <form action="index.php" method="post">
              <div class="space-10"></div>
              <div class="column">
                 <label class="" for="email-user">Email:</label>
                 <input class="" type="text" name="" value="" placeholder="Adresse e-mail"><br>
              </div>
              <div class="space-10"></div>
              <div class="column">
                 <label class="" for="pwd-user">Mot de passe:</label>
                 <input class="" type="password" name="" value="" placeholder="Mot de passe">
              </div>
              <div class="space-10"></div>
              <div class="row">
                <input type="checkbox" id="scales" name="scales">
                <label for="scales">Rester connecté</label>
              </div>
              <div class="space-10"></div>
              <div class="column">
                <button class="button-classic" type="button" name="button">Connexion</button>
                <a href="#">Mot de passe oublié ?</a>
              </div>
            </form>
          </div>
        </div>
      </div>
    </div>
    <?php include 'footer.php'; ?>
  </body>
</html>
