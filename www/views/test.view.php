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
    <div class="page">
    <h1>TEST</h1>
    <?php
        $var = "{10}{R}{R}{W}";
        $var = str_replace('}', '', $var);
        $var = explode('{', $var);
        echo 'a';
        echo "R" > 4;
        echo 'b';
        echo (int) 'W/G';
        echo '<pre>';
        $user = new \MVC\Models\Users();
        $user->getOneBy(['lala'=>31]);
        echo $user->getTable();
        // $db->execute($qs, $dt);
    ?>
    </div>
</body>
</html>
