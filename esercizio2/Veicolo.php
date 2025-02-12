<?php
class Veicolo{
    protected $marca;
    protected $anno;

    function __construct($marca,$anno){
        $this->marca=$marca;
        $this->anno=$anno;
    }

    public function set_marca($marca){
        $this->marca=$marca;
    }
    public function get_marca(){
        return $this->marca;
    }
    public function set_anno($anno){
        $this->anno=$anno;
    }
    public function get_anno()
    {
        return $this->anno;
    }
}
?>