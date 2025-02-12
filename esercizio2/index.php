<?php
header("Content-Type:application/json");
require_once("Automobile.php");

$array=[
    new Automobile("fiat",2002,"quattro ruote"),
    new Automobile("range rover",2006,"suv"),
];

echo json_encode($array);
?>