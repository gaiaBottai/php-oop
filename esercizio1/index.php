<?php
header("Content-Type:application/json");
require_once("Alunno.php");

$array=[
    new Alunno("Giada","Graziani","18"),
    new Alunno("Gaia","Bottai","20"),
];

/*oreach($array as $alunno){
    $alunno->stampa();
}*/

echo json_encode($array);
?>