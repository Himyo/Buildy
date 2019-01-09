<?php
include('conf.inc.php');
function test_connexion(){
    try{
        $pdo = new PDO(DBDRIVER.":host=".DBHOST.";dbname=".DBNAME,DBUSER,DBPWD);
        return $pdo;
    }catch(Exception $e){
        die("Erreur SQL : ".$e->getMessage());
        return null;
    }
}
phpinfo();
var_dump(PDO::getAvailableDrivers());
echo '<br><br>';
$test_co = test_connexion();
var_dump($test_co);
echo '<br><br>';
$test =['required'=>false];
if($test['required']??false) {
    echo 'NON';
}
else{
    echo 'OUI';
}