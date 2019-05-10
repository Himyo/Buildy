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
    <h1>TEST</h2>
    <?php
        $url = 'https://api.magicthegathering.io/v1/sets';
        $file = json_decode(file_get_contents(__DIR__."/../data/cards.json"), true);
        $qb = new Core\QueryBuilder();
        $db = new Core\BaseSQL('mysql', 'buildydb', 'buildy', 'root', 'pabuildypa');
        $qs = [];
        $dt = [];
        $i = 0;
        foreach($file['sets'] as $data) {
            $items = [
                'name' => $data['name'],
                'manaCost' => $data['manaCost'],
                'colors' => $data['colors'],
                'cmc' => $data['cmc'],

                'supertype' => $data['supertypes'],
                'subtype' => $data['subtypes'],
                'type' => $data['types'],

                'rarity' => $data['rarity'],
                'set' => $data['set'],
                'text' => $data['text'],
                'power' => $data['power'],
                'toughness' => $data['toughness'],
                'layout' => $data['layout'],
                'multiverseId' => $data['multiverseid'],
                'imageUrl' => $data['imageUrl'],
                'cardId' => $data['id'],
                'multiverseId' => $data['multiverseid'],
                'game_id' => 1,
            ];

            $query = $qb->insertMany($items)->from('Releases')->make()->getQuery();
            $qs[$i] = $query;
            $dt[$i] = $items;
            $i++;
        }
        echo '<pre>';
        echo $query;
        // $db->execute($qs, $dt);
    ?>
    </div>
</body>
</html>
