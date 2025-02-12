<?php
header("Content-Type:application/json");
require_once("Animale.php");


$animali=[
    new Cane("fuffi"),
    new Gatto("briciola")
];
echo json_encode($animali);

?>