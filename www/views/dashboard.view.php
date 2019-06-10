<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Dashboard</title>
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.0/css/all.css"
          integrity="sha384-lZN37f5QGtY3VHgisS14W3ExzMWZxybE1SJSEsQp9S+oqd12jhcu+A56Ebc1zFSJ" crossorigin="anonymous">
    <link rel="stylesheet" href="style.css">
    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.8.0/Chart.bundle.min.js"></script>
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
                <h1 class="title-h1">Dashboard</h1>
              </div>
              <div class="space-40"></div>
              <div class="buildy-grid-v-start media-column">
                <div class="col-50-center column">
                  <div class="space-30"></div>
                  <div class="col-100-center">
                    <h2 class="title-h2">Informations</h2>
                  </div>
                  <div class="space-10"></div>
                  <canvas id="myChart" width="" height=""></canvas>
                  <div class="space-30"></div>
                  <h2 class="title-h2">Informations</h2>
                  <div class="space-10"></div>
                  <p>
                    Lorem ipsum dolor sit amet, consectetur adipiscing elit.
                    Vivamus gravida finibus nulla ac varius. Nam porta odio nec fermentum mollis.
                    Proin ligula felis, euismod et lacus a, mattis tristique metus.
                    Donec at arcu tortor. Aliquam blandit dolor eu mi cursus pretium ut ac justo.
                    Ut elementum dui quam, eget euismod tellus posuere ut.
                    Praesent quis aliquet sapien. Pellentesque habitant morbi tristique senectus
                    et netus et malesuada fames ac turpis egestas. Ut non purus massa.
                  </p>
                  <div class="space-30"></div>
                  <div class="col-100-space-a">
                    <button class="button-outline" type="button" name="button">En Savoir plus</button>
                    <button class="button-outline" type="button" name="button">En Savoir plus</button>
                  </div>
                </div>
                <div class="space-30"></div>
                <div class="col-50-center column">
                  <div class="space-30"></div>
                  <div class="col-100-center">
                    <h2 class="title-h2">Informations</h2>
                  </div>
                  <div class="space-10"></div>
                  <canvas id="doughnut-chart-top" width="" height=""></canvas>
                  <div class="space-30"></div>
                  <div class="col-100-center">
                    <h2 class="title-h2">Informations</h2>
                  </div>
                  <div class="space-10"></div>
                  <canvas id="doughnut-chart-bottom" width="" height=""></canvas>
                </div>
              </div>
              <div class="space-30"></div>
            </div>
         </div>
      </div>
      <?php include "footer.php"; ?>
    </main>
    <script type="text/javascript" src="js/chart.js"></script>
  </body>
</html>
