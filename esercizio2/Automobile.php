<?php
require_once("Veicolo.php");
class Automobile extends Veicolo implements JsonSerializable{
   
    protected $modello;

    function __construct($marca,$anno,$modello){
        parent::__construct($marca,$anno);
        $this->modello=$modello;
       
    }
    public function jsonSerialize():array{
        return[
            'marca'=>$this->marca,
            'anno'=>$this->anno,
            'modello'=>$this->modello,
        ];
    }
    public function set_modello($modello){
        $this->modello=$modello;
    }
    public function get_modello(){
        return $this->modello;
    }
    public function stampa(){
        echo "{$this->marca} {$this->anno} {$this->modello} <br>";
     }
}


?>