<?php
class Alunno implements JsonSerializable{
    private $nome;
    private $cognome;
    private $eta;

 //costruttore
    function __construct($nome,$cognome,$eta){
    $this->nome=$nome;
    $this->cognome=$cognome;
    $this->eta=$eta;
   }

   public function jsonSerialize():array{
    return [
        'name'=>$this->nome,
        'surname'=>$this->cognome,
        'age'=>$this->eta
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

//metodo stampa
 public function stampa(){
    echo "{$this->nome} {$this->cognome} {$this->eta} <br>";
 }


}
?>