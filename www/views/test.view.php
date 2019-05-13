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
//        $file = json_decode(file_get_contents(__DIR__."/../data/cards.json"), true);
//        $qb = new MVC\Core\QueryBuilder();
//        $db = new MVC\Core\BaseSQL('mysql', 'buildydb', 'buildy', 'root', 'pabuildypa');
//        $qs = [];
//        $dt = [];
//        $i = 0;
//
//        foreach($file['sets'] as $data) {
//            $mana = new \MVC\VO\CardMana([
//                'manaCost' => $data['manaCost'],
//                'cmc' => $data['cmc']]);
//
//            $type = new \MVC\VO\CardType([
//                'supertype' => $data['supertypes'],
//                'subtype' => $data['subtypes'],
//                'layout' => $data['layout'],
//                'rarity' => $data['rarity'],
//                'type' => $data['types']]);
//
//            $props = new \MVC\VO\CardProps([
//                'text' => $data['text'],
//                'power' => $data['power'],
//                'toughness' => $data['toughness']]);
//
//            $identity = new \MVC\VO\CardIdentity([
//                'name' => $data['name'],
//                'alias' => array_slice($data['names'], 1),
//                'multiverseId' => $data['multiverseid'],
//                'imageUrl' => $data['imageUrl']]);
//
//            $set = new \MVC\VO\CardSet(['set' =>[$data['set']]]);
//
//            $card = new \MVC\Models\Card($identity, $props, $mana, $type, $set);
//        }
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
