<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Page Title</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" type="text/css" media="screen" href="main.css" />
    <script src="main.js"></script>
</head>
<body>
    <h1>TEST</h1>
    <?php
    $var = [0,1,2,3,"LALALALAL"];
    $conf = [];
    $conf += require('config/di.global.php');
    echo '<pre>';
    var_dump($conf);
    echo '</pre>';
    ?>
</body>
</html>