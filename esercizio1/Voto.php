<?php

class Voto implements JsonSerializable{
    public $voto;
    public $materia;
    public $giudizio;

    function __construct($materia,$voto,$giudizio){
        $this->materia=$materia;
        $this->voto=$voto;
        $this->giudizio=$giudizio;
    }


   public function jsonSerialize():array{
    return [
        'materia'=>$this->materia,
        'voto'=>$this->voto,
        'giudizio'=>$this->giudizio
    ];
   }
   function set_voto($voto){
    $this->voto = $voto;
}
function get_voto(){
    return $this->$voto;
}

function set_materia($materia){
    $this->materia = $materia;
}
function get_materia(){
    return $this->$materia;
}

function set_giudizio($giudizio){
    $this->giudizio = $giudizio;
}
function get_giudizio(){
    return $this->$giudizio;
}

}


?>