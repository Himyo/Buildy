
<div id="container" class="container">
    <div class="content" style="display: flex;">
        <div class="index-title">
            <h3>Gestion des pages</h3>
        </div>

        <div class="index-header">
            <div class="add-colLeft">
                <h4>Liste des pages <?php echo "(".sizeof($pages).")" ?> </h4>
                <div class="page-list">
                    <ul>
                        <?php
                            $size = sizeof($pages);
                            for($i = 0 ; $i < $size ; ++$i){
                                    $slug = $pages[$i]["slug"];
                                    echo "<li><a href='/page/{$pages[$i]['id']}'> {$pages[$i]['title']} </a></li>";
                            }
                        ?>
                    </ul>
                </div>
            </div>
        </div>

        <div class="add-colRight">
                <h4>Ajouter une page</h4>
                <div class="add-page">
                   <form method="POST" action="/addpage">
                        <input type="text" name="title" placeholder="Nom de la page">
                        <input type="submit" name="" value="Ajouter">
                   </form>
                </div>
        </div>

        <div id="container" class="container" style="display: block">
            <h1 class="title-h1">Page</h1>
              <div id="iframe-display">
                  <?php
                      echo $pages[$id]['content'];
                  ?>
              </div>
        </div>

    </div>
</div>

