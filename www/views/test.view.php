<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Accueil</title>
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.0/css/all.css"
          integrity="sha384-lZN37f5QGtY3VHgisS14W3ExzMWZxybE1SJSEsQp9S+oqd12jhcu+A56Ebc1zFSJ" crossorigin="anonymous">
    <link rel="stylesheet" href="style.css">
    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    <script type="text/javascript" src="js/script.js"></script>
    <script type="text/javascript" src="js/slider-classic.js"></script>
    <script type="text/javascript" src="js/slider-article.js"></script>
  </head>
  <body>
    <main>
      <?php include "header.php"; ?>
      <?php include "header_640.php"; ?>
      <div id="main-container" class="main-container">
         <?php include "side_menu_dashboard.php"; ?>
         <div id="container" class="container">
            <div class="content">

              <div class="space-30"></div>

              <div class="title-list">
                <p class="title-h1">Titre principal</p>
                <p class="title-h2">Titre principal</p>
                <p class="title-h3">Titre principal</p>
                <p class="title-h4">Titre principal</p>
              </div>

              <div class="space-30"></div>

              <div class="button-list">
                <button class="button-classic" type="button" name="button">Cliquez moi !</button>
                <button class="button-classic-succes" type="button" name="button">Cliquez moi !</button>
                <button class="button-classic-error" type="button" name="button">Cliquez moi !</button>
                <button class="button-classic-warning" type="button" name="button">Cliquez moi !</button>
              </div>

              <div class="space-30"></div>

              <div class="button-list">
                <button class="button-classic-black" type="button" name="button">Cliquez moi !</button>
                <button class="button-classic-succes-black" type="button" name="button">Cliquez moi !</button>
                <button class="button-classic-error-black" type="button" name="button">Cliquez moi !</button>
                <button class="button-classic-warning-black" type="button" name="button">Cliquez moi !</button>
              </div>

              <div class="space-30"></div>

              <div class="button-list">
                <button class="button-square" type="button" name="button">Cliquez moi !</button>
                <button class="button-square-succes" type="button" name="button">Cliquez moi !</button>
                <button class="button-square-error" type="button" name="button">Cliquez moi !</button>
                <button class="button-square-warning" type="button" name="button">Cliquez moi !</button>
              </div>

              <div class="space-30"></div>

              <div class="button-list">
                <button class="button-square-black" type="button" name="button">Cliquez moi !</button>
                <button class="button-square-succes-black" type="button" name="button">Cliquez moi !</button>
                <button class="button-square-error-black" type="button" name="button">Cliquez moi !</button>
                <button class="button-square-warning-black" type="button" name="button">Cliquez moi !</button>
              </div>

              <div class="space-30"></div>

              <div class="button-list">
                <button class="button-outline" type="button" name="button">Cliquez moi !</button>
                <button class="button-outline-succes" type="button" name="button">Cliquez moi !</button>
                <button class="button-outline-error" type="button" name="button">Cliquez moi !</button>
                <button class="button-outline-warning" type="button" name="button">Cliquez moi !</button>
              </div>

              <div class="space-30"></div>

              <div class="button-list">
                <button class="button-square-outline" type="button" name="button">Cliquez moi !</button>
                <button class="button-square-outline-succes" type="button" name="button">Cliquez moi !</button>
                <button class="button-square-outline-error" type="button" name="button">Cliquez moi !</button>
                <button class="button-square-outline-warning" type="button" name="button">Cliquez moi !</button>
              </div>

              <div class="space-30"></div>

              <div class="pagination-classic">
                <a href="#"><i class="fas fa-chevron-left"></i></a>
                <a href="#" class="pagination-classic-active">1</a>
                <a href="#">2</a>
                <a href="#">3</a>
                <a href="#">4</a>
                <a href="#">5</a>
                <a href="#">x</a>
                <a href="#"><i class="fas fa-chevron-right"></i></a>
              </div>

              <div class="space-30"></div>

              <div class="pagination-round">
                <a href="#"><i class="fas fa-chevron-left"></i></a>
                <a href="#" class="pagination-classic-active">1</a>
                <a href="#">2</a>
                <a href="#">3</a>
                <a href="#">4</a>
                <a href="#">5</a>
                <a href="#">x</a>
                <a href="#"><i class="fas fa-chevron-right"></i></a>
              </div>

              <div class="space-30"></div>

              <div class="pagination-border">
                <a href="#"><i class="fas fa-chevron-left"></i></a>
                <a href="#" class="pagination-classic-active">1</a>
                <a href="#">2</a>
                <a href="#">3</a>
                <a href="#">4</a>
                <a href="#">5</a>
                <a href="#">x</a>
                <a href="#"><i class="fas fa-chevron-right"></i></a>
              </div>

              <div class="space-30"></div>

              <table class="table-classic">
                 <thead>
                    <tr class="title-table-classic">
                        <th>Index</th>
                        <th>Title 1</th>
                        <th>Title 2</th>
                        <th>Title 3</th>
                        <th>Title 4</th>
                        <th colspan="4">Action</th>
                    </tr>
                 </thead>
                 <tbody>
                    <tr>
                        <td>1</td>
                        <td>Body de la table</td>
                        <td>Body de la table</td>
                        <td>Body de la table</td>
                        <td>Body de la table</td>
                        <td class="edit-table-classic"><i class="fas fa-cog"></i></td>
                        <td class="check-table-classic"><i class="fas fa-check"></i></td>
                        <td class="delete-table-classic"><i class="fas fa-times"></i></td>
                    </tr>
                    <tr>
                        <td>2</td>
                        <td>Body de la table</td>
                        <td>Body de la table</td>
                        <td>Body de la table</td>
                        <td>Body de la table</td>
                        <td class="edit-table-classic"><i class="fas fa-cog"></i></td>
                        <td class="check-table-classic"><i class="fas fa-check"></i></td>
                        <td class="delete-table-classic"><i class="fas fa-times"></i></td>
                    </tr>
                    <tr>
                        <td>3</td>
                        <td>Body de la table</td>
                        <td>Body de la table</td>
                        <td>Body de la table</td>
                        <td>Body de la table</td>
                        <td class="edit-table-classic"><i class="fas fa-cog"></i></td>
                        <td class="check-table-classic"><i class="fas fa-check"></i></td>
                        <td class="delete-table-classic"><i class="fas fa-times"></i></td>
                    </tr>
                    <tr class="add-table-classic">
                        <td></td>
                        <td><input type="text" placeholder=" placeholder"></td>
                        <td><input type="text" placeholder=" placeholder"></td>
                        <td><input type="text" placeholder=" placeholder"></td>
                        <td><input type="text" placeholder=" placeholder"></td>
                        <td class="check-table-classic" colspan="3"><i class="fas fa-plus"></i></td>
                    </tr>
                 </tbody>
              </table>

              <div class="space-30"></div>

              <table class="table-color">
                 <thead>
                    <tr class="title-table-color">
                        <th>Index</th>
                        <th>Title 1</th>
                        <th>Title 2</th>
                        <th>Title 3</th>
                        <th>Title 4</th>
                        <th colspan="4">Action</th>
                    </tr>
                 </thead>
                 <tbody>
                    <tr>
                        <td>1</td>
                        <td>Body de la table</td>
                        <td>Body de la table</td>
                        <td>Body de la table</td>
                        <td>Body de la table</td>
                        <td class="edit-table-color"><i class="fas fa-cog"></i></td>
                        <td class="check-table-color"><i class="fas fa-check"></i></td>
                        <td class="delete-table-color"><i class="fas fa-times"></i></td>
                    </tr>
                    <tr>
                        <td>2</td>
                        <td>Body de la table</td>
                        <td>Body de la table</td>
                        <td>Body de la table</td>
                        <td>Body de la table</td>
                        <td class="edit-table-color"><i class="fas fa-cog"></i></td>
                        <td class="check-table-color"><i class="fas fa-check"></i></td>
                        <td class="delete-table-color"><i class="fas fa-times"></i></td>
                    </tr>
                    <tr>
                        <td>3</td>
                        <td>Body de la table</td>
                        <td>Body de la table</td>
                        <td>Body de la table</td>
                        <td>Body de la table</td>
                        <td class="edit-table-color"><i class="fas fa-cog"></i></td>
                        <td class="check-table-color"><i class="fas fa-check"></i></td>
                        <td class="delete-table-color"><i class="fas fa-times"></i></td>
                    </tr>
                    <tr class="add-table-color">
                        <td></td>
                        <td><input type="text" placeholder=" placeholder"></td>
                        <td><input type="text" placeholder=" placeholder"></td>
                        <td><input type="text" placeholder=" placeholder"></td>
                        <td><input type="text" placeholder=" placeholder"></td>
                        <td class="check-table-color" colspan="3"><i class="fas fa-plus"></i></td>
                    </tr>
                 </tbody>
              </table>

              <div class="space-30"></div>

              <table class="table-blue">
                 <thead>
                    <tr class="title-table-blue">
                        <th>Index</th>
                        <th>Title 1</th>
                        <th>Title 2</th>
                        <th>Title 3</th>
                        <th>Title 4</th>
                        <th colspan="4">Action</th>
                    </tr>
                 </thead>
                 <tbody>
                    <tr>
                        <td>1</td>
                        <td>Body de la table</td>
                        <td>Body de la table</td>
                        <td>Body de la table</td>
                        <td>Body de la table</td>
                        <td class="edit-table-blue"><i class="fas fa-cog"></i></td>
                        <td class="check-table-blue"><i class="fas fa-check"></i></td>
                        <td class="delete-table-blue"><i class="fas fa-times"></i></td>
                    </tr>
                    <tr>
                        <td>2</td>
                        <td>Body de la table</td>
                        <td>Body de la table</td>
                        <td>Body de la table</td>
                        <td>Body de la table</td>
                        <td class="edit-table-blue"><i class="fas fa-cog"></i></td>
                        <td class="check-table-blue"><i class="fas fa-check"></i></td>
                        <td class="delete-table-blue"><i class="fas fa-times"></i></td>
                    </tr>
                    <tr>
                        <td>3</td>
                        <td>Body de la table</td>
                        <td>Body de la table</td>
                        <td>Body de la table</td>
                        <td>Body de la table</td>
                        <td class="edit-table-blue"><i class="fas fa-cog"></i></td>
                        <td class="check-table-blue"><i class="fas fa-check"></i></td>
                        <td class="delete-table-blue"><i class="fas fa-times"></i></td>
                    </tr>
                    <tr class="add-table-b">
                        <td></td>
                        <td><input type="text" placeholder=" placeholder"></td>
                        <td><input type="text" placeholder=" placeholder"></td>
                        <td><input type="text" placeholder=" placeholder"></td>
                        <td><input type="text" placeholder=" placeholder"></td>
                        <td class="check-table-blue" colspan="3"><i class="fas fa-plus"></i></td>
                    </tr>
                 </tbody>
              </table>

              <div class="space-30"></div>

              <div class="card-column-list">
                <div class="card-column">
                  <h4>Card-a</h4>
                  <img src="https://via.placeholder.com/300x150">
                  <div class="card-column-text">
                    <p>
                      Nullam rhoncus facilisis finibus. Proin sed accumsan mauris.
                      Etiam in eros nec neque finibus facilisis. Quisque placerat gravida vulputate.
                      Cras vitae vestibulum lacus, sed varius metus.
                      Vivamus in porttitor purus, nec scelerisque purus.
                      In aliquet tortor eu nisi volutpat imperdiet.
                      Aliquam sagittis nisi ac luctus rhoncus.
                    </p>
                  </div>
                </div>
                <div class="card-column">
                  <h4>Card-a</h4>
                  <img src="https://via.placeholder.com/300x150">
                  <div class="card-column-text">
                    <p>
                      Nullam rhoncus facilisis finibus. Proin sed accumsan mauris.
                      Etiam in eros nec neque finibus facilisis. Quisque placerat gravida vulputate.
                      Cras vitae vestibulum lacus, sed varius metus.
                      Vivamus in porttitor purus, nec scelerisque purus.
                      In aliquet tortor eu nisi volutpat imperdiet.
                      Aliquam sagittis nisi ac luctus rhoncus.
                    </p>
                  </div>
                </div>
                <div class="card-column">
                  <h4>Card-a</h4>
                  <img src="https://via.placeholder.com/300x150">
                  <div class="card-column-text">
                    <p>
                      Nullam rhoncus facilisis finibus. Proin sed accumsan mauris.
                      Etiam in eros nec neque finibus facilisis. Quisque placerat gravida vulputate.
                      Cras vitae vestibulum lacus, sed varius metus.
                      Vivamus in porttitor purus, nec scelerisque purus.
                      In aliquet tortor eu nisi volutpat imperdiet.
                      Aliquam sagittis nisi ac luctus rhoncus.
                    </p>
                  </div>
                </div>
              </div>

              <div class="space-30"></div>

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
                    In aliquet tortor eu nisi volutpat imperdiet.
                    Aliquam sagittis nisi ac luctus rhoncus.
                  </p>
                </div>
              </div>

              <div class="space-30"></div>

              <div class="card-row-info">
                <div class="left-card-row-info">
                  <img src="https://via.placeholder.com/250x100">
                  <p>info 1</p>
                  <p>info 2</p>
                  <p>info 3</p>
                  <p>info 4</p>
                </div>
                <div class="right-card-row-info">
                  <h4>Card-c</h4>
                  <p>
                    Nullam rhoncus facilisis finibus. Proin sed accumsan mauris.
                    Etiam in eros nec neque finibus facilisis. Quisque placerat gravida vulputate.
                    Cras vitae vestibulum lacus, sed varius metus.
                    Vivamus in porttitor purus, nec scelerisque purus.
                    In aliquet tortor eu nisi volutpat imperdiet.
                    Aliquam sagittis nisi ac luctus rhoncus.
                  </p>
                </div>
              </div>

              <div class="space-30"></div>

              <div class="card-img-left">
                <div class="left-card-img-left">
                  <img src="img/back-magic-card.jpg">
                </div>
                <div class="right-card-img-left">
                  <div class="card-img-left-title">
                    <h4>Title 1</h4>
                  </div>
                  <div class="right-card-img-left-1">
                    <h4>Card-d-1</h4>
                    <p>
                      Nullam rhoncus facilisis finibus. Proin sed accumsan mauris.
                      Etiam in eros nec neque finibus facilisis. Quisque placerat gravida vulputate.
                      Cras vitae vestibulum lacus, sed varius metus.
                      Vivamus in porttitor purus, nec scelerisque purus.
                      In aliquet tortor eu nisi volutpat imperdiet.
                      Aliquam sagittis nisi ac luctus rhoncus.
                    </p>
                  </div>
                  <div class="right-card-img-left-2">
                    <h4>Card-d-2</h4>
                    <p>
                      Nullam rhoncus facilisis finibus. Proin sed accumsan mauris.
                      Etiam in eros nec neque finibus facilisis. Quisque placerat gravida vulputate.
                      Cras vitae vestibulum lacus, sed varius metus.
                      Vivamus in porttitor purus, nec scelerisque purus.
                      In aliquet tortor eu nisi volutpat imperdiet.
                      Aliquam sagittis nisi ac luctus rhoncus.
                    </p>
                  </div>
                  <div class="right-card-img-left-3">
                    <h4>Card-d-3</h4>
                    <p>
                      Nullam rhoncus facilisis finibus. Proin sed accumsan mauris.
                      Etiam in eros nec neque finibus facilisis. Quisque placerat gravida vulputate.
                      Cras vitae vestibulum lacus, sed varius metus.
                      Vivamus in porttitor purus, nec scelerisque purus.
                      In aliquet tortor eu nisi volutpat imperdiet.
                      Aliquam sagittis nisi ac luctus rhoncus.
                    </p>
                  </div>
                  <div class="right-card-img-left-btn">
                    <button class="button-classic" type="button" name="button">Cliquez moi !</button>
                    <button class="button-classic" type="button" name="button">Cliquez moi !</button>
                  </div>
                </div>
              </div>

              <div class="space-30"></div>

              <div class="card-img-right">
                <div class="right-card-img-right">
                  <div class="card-img-right-title">
                    <h4>Title 1</h4>
                  </div>
                  <div class="right-card-right-1">
                    <h4>Card-d-1</h4>
                    <p>
                      Nullam rhoncus facilisis finibus. Proin sed accumsan mauris.
                      Etiam in eros nec neque finibus facilisis. Quisque placerat gravida vulputate.
                      Cras vitae vestibulum lacus, sed varius metus.
                      Vivamus in porttitor purus, nec scelerisque purus.
                      In aliquet tortor eu nisi volutpat imperdiet.
                      Aliquam sagittis nisi ac luctus rhoncus.
                    </p>
                  </div>
                  <div class="right-card-right-2">
                    <h4>Card-d-2</h4>
                    <p>
                      Nullam rhoncus facilisis finibus. Proin sed accumsan mauris.
                      Etiam in eros nec neque finibus facilisis. Quisque placerat gravida vulputate.
                      Cras vitae vestibulum lacus, sed varius metus.
                      Vivamus in porttitor purus, nec scelerisque purus.
                      In aliquet tortor eu nisi volutpat imperdiet.
                      Aliquam sagittis nisi ac luctus rhoncus.
                    </p>
                  </div>
                  <div class="right-card-right-3">
                    <h4>Card-d-3</h4>
                    <p>
                      Nullam rhoncus facilisis finibus. Proin sed accumsan mauris.
                      Etiam in eros nec neque finibus facilisis. Quisque placerat gravida vulputate.
                      Cras vitae vestibulum lacus, sed varius metus.
                      Vivamus in porttitor purus, nec scelerisque purus.
                      In aliquet tortor eu nisi volutpat imperdiet.
                      Aliquam sagittis nisi ac luctus rhoncus.
                    </p>
                  </div>
                  <div class="right-card-img-right-btn">
                    <button class="button-classic" type="button" name="button">Cliquez moi !</button>
                    <button class="button-classic" type="button" name="button">Cliquez moi !</button>
                  </div>
                </div>
                <div class="left-card-right">
                  <img src="img/back-magic-card.jpg">
                </div>
              </div>

              <div class="space-30"></div>

              <div class="label-input-row-classic">
                <label class="label-classic" for="label-input-classic">Label 1:</label>
                <input class="input-classic" type="text" name="label-input-classic" value="Clic">
              </div>

              <div class="space-30"></div>

              <div class="label-input-column-classic">
                <label class="label-classic" for="label-input-column-classic">Label 1:</label>
                <input class="input-classic" type="text" name="label-input-column-classic" value="Clic">
              </div>

              <div class="space-30"></div>

              <div class="slider-classic">
                <img src="img/back-magic-card.jpg">
                <img src="img/back-magic-card.jpg">
                <img src="img/back-magic-card.jpg">
                <img src="img/back-magic-card.jpg">
                <img src="img/back-magic-card.jpg">
                <img src="img/back-magic-card.jpg">
                <img src="img/back-magic-card.jpg">
                <img src="img/back-magic-card.jpg">
              </div>

              <div class="space-30"></div>

              <div class="search-classic">
                <input type="text" placeholder=" Rechercher">
                <button type="button" name="button"><i class="fas fa-search"></i></button>
              </div>

              <div class="space-30"></div>

              <div class="list-card-classic">
                <div class="list-card-classic-title white-font">
                  <h3>Deck name :</h3>
                  <p></p>
                </div>
                <div class="space-30"></div>
                <div class="list-card-classic-info">
                  <div class="col-100-space-b white-font">
                    <div class="col-33-start column ">
                      <p>Coûts :</p>
                      <p>Type :</p>
                    </div>
                    <div class="col-33-start column">
                      <p>Coûts :</p>
                      <p>Type :</p>
                    </div>
                    <div class="col-33-start column">
                      <p>Coûts :</p>
                      <p>Type :</p>
                    </div>
                  </div>
                </div>
                <div class="space-20"></div>
                <hr>
                <div class="space-30"></div>
                <div class="list-card-classic-content">
                  <img src="img/back-magic-card.jpg">
                  <img src="img/back-magic-card.jpg">
                  <img src="img/back-magic-card.jpg">
                  <img src="img/back-magic-card.jpg">
                  <img src="img/back-magic-card.jpg">
                  <img src="img/back-magic-card.jpg">
                  <img src="img/back-magic-card.jpg">
                  <img src="img/back-magic-card.jpg">
                  <img src="img/back-magic-card.jpg">
                  <img src="img/back-magic-card.jpg">
                  <img src="img/back-magic-card.jpg">
                  <img src="img/back-magic-card.jpg">
                  <img src="img/back-magic-card.jpg">
                  <img src="img/back-magic-card.jpg">
                  <img src="img/back-magic-card.jpg">
                  <img src="img/back-magic-card.jpg">
                  <img src="img/back-magic-card.jpg">
                  <img src="img/back-magic-card.jpg">
                  <img src="img/back-magic-card.jpg">
                  <img src="img/back-magic-card.jpg">
                  <img src="img/back-magic-card.jpg">
                  <img src="img/back-magic-card.jpg">
                  <img src="img/back-magic-card.jpg">
                  <img src="img/back-magic-card.jpg">
                </div>
              </div>

              <div class="space-30"></div>

              <div class="list-deck-classic">
                <div class="list-deck-classic-title white-font">
                  <h3>Deck name :</h3>
                  <p></p>
                </div>
                <div class="space-30"></div>
                <div class="list-deck-classic-info">
                  <div class="col-100-space-b white-font">
                    <div class="col-33-start column ">
                      <p>Coûts :</p>
                      <p>Type :</p>
                    </div>
                    <div class="col-33-start column">
                      <p>Coûts :</p>
                      <p>Type :</p>
                    </div>
                    <div class="col-33-start column">
                      <p>Coûts :</p>
                      <p>Type :</p>
                    </div>
                  </div>
                </div>
                <div class="space-20"></div>
                <hr>
                <div class="space-30"></div>
                <div class="list-deck-classic-content">
                  <img src="img/deck-magic.jpg">
                  <img src="img/deck-magic.jpg">
                  <img src="img/deck-magic.jpg">
                  <img src="img/deck-magic.jpg">
                  <img src="img/deck-magic.jpg">
                  <img src="img/deck-magic.jpg">
                  <img src="img/deck-magic.jpg">
                  <img src="img/deck-magic.jpg">
                  <img src="img/deck-magic.jpg">
                  <img src="img/deck-magic.jpg">
                  <img src="img/deck-magic.jpg">
                  <img src="img/deck-magic.jpg">
                </div>
              </div>

              <div class="space-30"></div>

              <table class="table-classic">
                 <thead>
                    <tr class="title-table-classic">
                        <th>Nom</th>
                        <th>Couleur</th>
                        <th>Commentaires</th>
                        <th>Vue</th>
                        <th>Auteur</th>
                        <th>Date</th>
                    </tr>
                 </thead>
                 <tbody>
                    <tr>
                        <td>Body de la table</td>
                        <td>Body de la table</td>
                        <td>Body de la table</td>
                        <td>Body de la table</td>
                        <td>Body de la table</td>
                        <td>Body de la table</td>
                    </tr>
                    <tr>
                        <td>Body de la table</td>
                        <td>Body de la table</td>
                        <td>Body de la table</td>
                        <td>Body de la table</td>
                        <td>Body de la table</td>
                        <td>Body de la table</td>
                    </tr>
                    <tr>
                        <td>Body de la table</td>
                        <td>Body de la table</td>
                        <td>Body de la table</td>
                        <td>Body de la table</td>
                        <td>Body de la table</td>
                        <td>Body de la table</td>
                    </tr>
                    <tr class="add-table-classic">
                        <td></td>
                        <td><input type="text" placeholder=" placeholder"></td>
                        <td><input type="text" placeholder=" placeholder"></td>
                        <td><input type="text" placeholder=" placeholder"></td>
                        <td><input type="text" placeholder=" placeholder"></td>
                        <td><input type="text" placeholder=" placeholder"></td>
                    </tr>
                 </tbody>
              </table>

              <div class="space-30"></div>

            </div>
         </div>
      </div>
      <?php include "footer.php"; ?>
    </main>
  </body>
</html>
