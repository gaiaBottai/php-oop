<?php

class Indirizzo implements JsonSerializable{
    public $indirizzo;
    public $cap;
    public $civico;

    function __construct($indirizzo,$civico,$cap){
        $this->indirizzo=$indirizzo;
        $this->civico=$civico;
        $this->cap=$cap;
        
    }


   public function jsonSerialize():array{
    return [
        'indirizzo'=>$this->indirizzo,
        'civico'=>$this->civico,
        'cap'=>$this->cap
        
    ];
   }
   function set_indirizzo($indirizzo){
    $this->indirizzo = $indirizzo;
}
function get_indirizzo(){
    return $this->$indirizzo;
}

function set_cap($cap){
    $this->cap = $cap;
}
function get_cap(){
    return $this->$cap;
}

function set_civico($civico){
    $this->civico = $civico;
}
function get_civico(){
    return $this->$civico;
}
}


?>