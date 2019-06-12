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
                <h1 class="title-h1">Mon compte</h1>
              </div>
              <div class="space-40"></div>
              <div class="buildy-grid-v-start media-column">
                 <div class="col-25-start column">
                   <div class="col-100-start">
                     <h2 class="title-h2">Mes&nbsp;informations</h2>
                   </div>
                   <h2 class="title-h2"></h2>
                   <div class="space-15"></div>
                   <div class="label-input-column-classic">
                      <label class="label-classic" for="">Nom&nbsp;de&nbsp;compte&nbsp;:</label>
                      <input class="input-classic"type="text" name="" value="">
                   </div>
                   <div class="space-10"></div>
                   <div class="label-input-column-classic">
                      <label class="label-classic" for="">Email&nbsp;:</label>
                      <input class="input-classic"type="text" name="" value="">
                   </div>
                   <div class="space-10"></div>
                   <div class="label-input-column-classic">
                      <label class="label-classic" for="">Mot&nbsp;de&nbsp;passe&nbsp;:</label>
                      <input class="input-classic" type="text" name="" value="">
                   </div>
                 </div>
                 <div class="space-30"></div>
                 <div class="col-75-center column">
                   <div class="col-100-center">
                     <h2 class="title-h2">Derniers&nbsp;commentaires</h2>
                   </div>
                   <div class="space-15"></div>
                   <div class="card-row">
                     <div class="left-card-row">
                       <img src="https://via.placeholder.com/250x150">
                     </div>
                     <div class="right-card-row">
                       <h4>Card-b</h4>
                       <p>
                         Nullam rhoncus facilisis finibus. Proin sed accumsan mauris.
                         Etiam in eros nec neque finibus facilisis. Quisque placerat gravida vulputate.
                         Cras vitae vestibulum lacus, sed varius metus.
                         Vivamus in porttitor purus, nec scelerisque purus.
                         Lire la suite.
                       </p>
                     </div>
                   </div>
                   <div class="space-15"></div>
                   <div class="card-row">
                     <div class="left-card-row">
                       <img src="https://via.placeholder.com/250x150">
                     </div>
                     <div class="right-card-row">
                       <h4>Card-b</h4>
                       <p>
                         Nullam rhoncus facilisis finibus. Proin sed accumsan mauris.
                         Cras vitae vestibulum lacus, sed varius metus.
                         Vivamus in porttitor purus, nec scelerisque purus.
                         In aliquet tortor eu nisi volutpat imperdiet.
                         Aliquam sagittis nisi ac luctus rhoncus.
                         Lire la suite.
                       </p>
                     </div>
                   </div>
                   <div class="space-15"></div>
                   <div class="card-row">
                     <div class="left-card-row">
                       <img src="https://via.placeholder.com/250x150">
                     </div>
                     <div class="right-card-row">
                       <h4>Card-b</h4>
                       <p>
                         Nullam rhoncus facilisis finibus. Proin sed accumsan mauris.
                         Etiam in eros nec neque finibus facilisis. Quisque placerat gravida vulputate.
                         Lire la suite.
                       </p>
                     </div>
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
