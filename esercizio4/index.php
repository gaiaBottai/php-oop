<?php

header("Content-type:application/json");
require_once("Studente.php");

$array=[
    new Studente("lapo","vanni","123ASD"),
    new Studente("giada","graziani","134GDRF"),
];

echo json_encode($array);
?>