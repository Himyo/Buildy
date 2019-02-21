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

    require('./models/Supplier.trait.php');
        $slug = Routing::getSlug("Users", "save");
        echo Routing::getRoute($slug)["m"];
        $a = ["a" => 2, "b"=> 3, "c"=>4, "d"=>5];
        $a1 = ["q" => 2, "e"=> 3, "t"=>4, "r"=>5];
        $w = array();
        array_push($w, $a, $a1);
        var_dump($w);
        echo '<br>';
        class fooo {
            public $bar;
            public $baz;
             
            use Supplier;
            public function getBar() {
                return $this->bar;
            }

            public function getBaz() {
                return $this->baz;
            }
            public function setBar($b) {
                $this->bar = $b;
            }

            public function setBaz($b) {
                $this->baz = $b;
            }
        }
        $foo = new fooo();
        $foo->supply(["bar" => 2, "baz" => 2]);
        echo '<pre>';
        var_dump($foo->extract());
        echo '</pre>';
        if(1 < null)
        {
            echo 'a';
        }
        else if(1 > null)
        {
            echo 4+null;
        }
        print_r(0 > 1);
    ?>
</body>
</html>