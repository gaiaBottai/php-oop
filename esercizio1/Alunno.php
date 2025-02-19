<?php
require_once("Voto.php");
require_once("Indirizzo.php");
class Alunno implements JsonSerializable{
    private $nome;
    private $cognome;
    private $eta;
    private $indirizzo;
    private $voto=[];

 //costruttore
    function __construct($nome,$cognome,$eta, $indirizzo,$voto){
    $this->nome=$nome;
    $this->cognome=$cognome;
    $this->eta=$eta;
    $this->indirizzo=$indirizzo;
    $this->voto=$voto;
   }

   public function jsonSerialize():array{
    return [
        'nome'=>$this->nome,
        'cognome'=>$this->cognome,
        'eta'=>$this->eta,
        'indirizzo'=>$this->indirizzo,
        'voto'=>$this->voto
    ];
   }

//metodi get e set
    function set_name($nome){
        $this->nome = $nome;
    }
    function get_name(){
        return $this->$nome;
    }

    function set_cognome($cognome){
        $this->cognome = $cognome;
    }
    function get_cognome(){
        return $this->$cognome;
    }

    function set_eta($eta){
        $this->eta = $eta;
    }
    function get_eta(){
        return $this->$eta;
    }

}
?>