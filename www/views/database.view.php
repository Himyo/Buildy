<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Base de données</title>
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
                <h1 class="title-h1">Base de données</h1>
              </div>
              <div class="space-40"></div>
              <div class="buildy-grid-v-start">
                <div class="column">
                  <h2 class="title-h2">Liste de vos bases de données</h2>
                  <div class="space-10"></div>
                  <table class="table-blue">
                     <thead>
                        <tr>
                           <th>Base de données</th>
                           <th colspan="3">Action</th>
                        </tr>
                     </thead>
                     <tbody>
                       <tr>
                          <td>Body de la table</td>
                          <td class="edit-table-blue"><i class="fas fa-cog"></i></td>
                          <td class="check-table-blue"><i class="fas fa-check"></i></td>
                          <td class="delete-table-blue"><i class="fas fa-times"></i></td>
                       </tr>
                       <tr>
                          <td>Body de la table</td>
                          <td class="edit-table-blue"><i class="fas fa-cog"></i></td>
                          <td class="check-table-blue"><i class="fas fa-check"></i></td>
                          <td class="delete-table-blue"><i class="fas fa-times"></i></td>
                       </tr>
                       <tr>
                          <td>Body de la table</td>
                          <td class="edit-table-blue"><i class="fas fa-cog"></i></td>
                          <td class="check-table-blue"><i class="fas fa-check"></i></td>
                          <td class="delete-table-blue"><i class="fas fa-times"></i></td>
                       </tr>
                     </tbody>
                  </table>
                </div>
              </div>
              <div class="space-30"></div>
              <div class="buildy-grid-v-start">
                <div class="column">
                  <h2 class="title-h2">Liste de vos bases de données</h2>
                  <div class="space-10"></div>
                  <table class="table-blue">
                     <thead>
                         <tr>
                           <th>Title 1</th>
                           <th colspan="3">Action</th>
                         </tr>
                     </thead>
                     <tbody>
                       <tr>
                         <td>Body de la table</td>
                         <td class="edit-table-blue"><i class="fas fa-cog"></i></td>
                         <td class="check-table-blue"><i class="fas fa-check"></i></td>
                         <td class="delete-table-blue"><i class="fas fa-times"></i></td>
                       </tr>
                       <tr>
                         <td>Body de la table</td>
                         <td class="edit-table-blue"><i class="fas fa-cog"></i></td>
                         <td class="check-table-blue"><i class="fas fa-check"></i></td>
                         <td class="delete-table-blue"><i class="fas fa-times"></i></td>
                       </tr>
                       <tr>
                         <td>Body de la table</td>
                         <td class="edit-table-blue"><i class="fas fa-cog"></i></td>
                         <td class="check-table-blue"><i class="fas fa-check"></i></td>
                         <td class="delete-table-blue"><i class="fas fa-times"></i></td>
                       </tr>
                       <tr class="add-table">
                          <td><input type="text" placeholder=" placeholder"></td>
                          <td class="check-table-blue" colspan="3"><i class="fas fa-plus"></i></td>
                       </tr>
                     </tbody>
                  </table>
                </div>
              </div>
              <div class="space-30"></div>
              <div class="buildy-grid-v-start">
                <div class="column">
                  <h2 class="title-h2">Liste de vos bases de données</h2>
                  <div class="space-10"></div>
                  <table class="table-blue">
                     <thead>
                        <tr>
                            <th>Title 1</th>
                            <th>Title 2</th>
                            <th>Title 3</th>
                            <th>Title 4</th>
                            <th colspan="4">Action</th>
                        </tr>
                     </thead>
                     <tbody>
                        <tr>
                            <td>Body de la table</td>
                            <td>Body de la table</td>
                            <td>Body de la table</td>
                            <td>Body de la table</td>
                            <td class="edit-table-blue"><i class="fas fa-cog"></i></td>
                            <td class="check-table-blue"><i class="fas fa-check"></i></td>
                            <td class="delete-table-blue"><i class="fas fa-times"></i></td>
                        </tr>
                        <tr>
                            <td>Body de la table</td>
                            <td>Body de la table</td>
                            <td>Body de la table</td>
                            <td>Body de la table</td>
                            <td class="edit-table-blue"><i class="fas fa-cog"></i></td>
                            <td class="check-table-blue"><i class="fas fa-check"></i></td>
                            <td class="delete-table-blue"><i class="fas fa-times"></i></td>
                        </tr>
                        <tr>
                            <td>Body de la table</td>
                            <td>Body de la table</td>
                            <td>Body de la table</td>
                            <td>Body de la table</td>
                            <td class="edit-table-blue"><i class="fas fa-cog"></i></td>
                            <td class="check-table-blue"><i class="fas fa-check"></i></td>
                            <td class="delete-table-blue"><i class="fas fa-times"></i></td>
                        </tr>
                        <tr class="add-table">
                            <td><input type="text" placeholder=" placeholder"></td>
                            <td><input type="text" placeholder=" placeholder"></td>
                            <td><input type="text" placeholder=" placeholder"></td>
                            <td><input type="text" placeholder=" placeholder"></td>
                            <td class="check-table-blue" colspan="3"><i class="fas fa-plus"></i></td>
                        </tr>
                     </tbody>
                  </table>
                </div>
              </div>
              <div class="space-30"></div>
            </div>
         </div>
      </div>
      <?php include "footer.php"; ?>
    </main>
  </body>
</html>
