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
        $url = 'https://api.magicthegathering.io/v1/sets';
        // $file = file_get_contents($url);
        $file = 'okokk';
        file_put_contents(__DIR__."/data/releases.json",$file);
        // $qb = new Core\QueryBuilder();
        // $db = new Core\BaseSQL('mysql', 'buildydb', 'buildy', 'root', 'pabuildypa');
        // foreach($file['sets'] as $data) {
        //     $items = [
        //         'name' => $data['name'],
        //         'release_date' => $data['releaseDate'],
        //         'game_id' => 1,
        //         'code' => $data['code']
        //     ];
        //     $query = $qb->insert($items)->from('Releases')->make()->getQuery();
        //     if($db->execute($query, $items) != 1) {
        //         echo $query;
        //         echo '<pre>';
        //         var_dump($items);
        //         echo $items['name'].'<br />';
        //     }
        // }
    ?>
    </div>
</body>
</html>
