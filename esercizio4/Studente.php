<?php
require_once("Persona.php");
class Studente extends Persona implements JsonSerializable{
    protected $matricola;

    function __construct($nome,$cognome,$matricola){
        parent::__construct($nome,$cognome);
        $this->matricola=$matricola;

    }
    public function jsonSerialize():array{
        return[
            'name'=>$this->nome,
            'surname'=>$this->cognome,
            'matricola'=>$this->matricola,
        ];
    }
    public function set_marca($matricola){
        $this->matricola=$matricola;
    }
    public function get_marca(){
        return $this->matricola;
    }

    public function presentati(){
        echo "{$this->nome} {$this->cognome} {$this->matricola} <br>";
    }
}
?>