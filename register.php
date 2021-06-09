<?php

header("Access-Control-Allow-Origin: *");
header("Content-Type: application/json; charset=UTF-8");
header("Access-Control-Allow-Methods: GET");
header("Access-Control-Max-Age: 3600");
header("Access-Control-Allow-Headers: Content-Type, Access-Control-Allow-Headers, Authorization, X-Requested-With");

if(isset($_GET['test'])){
    $valeur_test = $_GET['test'];
    echo("Ceci est la valeur de GET :".$valeur_test);
}

?>
