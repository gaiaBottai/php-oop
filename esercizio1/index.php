<?php
header("Content-Type:application/json");
require_once("Alunno.php");
require_once("Voto.php");
require_once("Indirizzo.php");

/*$indirizzo=new Indirizzo("via pascoli",6,500147); //creo l'indirizzo, per ogni alunno devo creare un indirizzo
$voto=[]; //voto è un array che contiene ogni materia dell'alunno , perciò per ogni alunno ci sarà un array voto con i propri voti delle materie
    array_push($voto,new Voto("scienze",8,"bravo complimenti"));

$array=[];
    array_push($array,new Alunno("Giada","Graziani",18,$indirizzo,$voto));
    array_push($array,new Alunno("Gaia","Bottai",20,$indirizzo,$voto));

//echo json_encode($array);//stampa con la serializzazione */


//altro metodo

$alunniSerializzati= file_get_contents("alunni.json"); //metto la stampa serializzata in una stringa, prendo le variabili dal file json
$alunni2=json_decode($alunniSerializzati,true);//primo parametro la stringa da deserializzare il secondo parametro chiede se si vuole un array associativo
//var dump prende una variabile php e la stampa

//dentro alunni2 ho un array associativo voglio ricreare l'alunno dall'array associativo
$alunni=[];
foreach($alunni2 as $a){
    //creo una variabile
    $variabile= new Alunno($a["nome"],$a["cognome"],$a["eta"],"",""); //prendo le variabili 
    array_push($alunni,$variabile);
}
echo json_encode($alunni);
?>