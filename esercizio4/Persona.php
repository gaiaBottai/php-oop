<?php
class Persona{
   protected $nome;
   protected $cognome;

   function __construct($nome,$cognome){
    $this->nome=$nome;
    $this->cognome=$cognome;
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
   
   
}
?>