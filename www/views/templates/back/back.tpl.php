<!DOCTYPE html>
<html lang="en" dir="ltr">
<head>
    <meta charset="utf-8">
    <title>Accueil</title>
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.0/css/all.css"
          integrity="sha384-lZN37f5QGtY3VHgisS14W3ExzMWZxybE1SJSEsQp9S+oqd12jhcu+A56Ebc1zFSJ" crossorigin="anonymous">
    <link rel="stylesheet" href="../../../public/css/global.css">
    <script type="text/javascript" src="../../../public/js/script.js"></script>
    <script type="text/javascript" src="../../../public/js/slider.js"></script>
</head>
<body>
    <main>
        <?php include "header.php"; ?>
        <div id="main-container" class="main-container">
            <?php
            if (\MVC\Core\Routing::getSlug("Pages", "mySite") === $_SERVER['REQUEST_URI']):
                include "side_menu_dashboard.php";
            else:
                include "side_menu_mysite.php";
            endif;
            ?>

            <?php include $this->v; ?>

        </div>
        <?php include "footer.php"; ?>
    </main>
</body>
</html>

