<?php
abstract class Animale{

    protected $nome;
    public function __construct($nome){
        $this->nome;
    }
    abstract public function verso();

}


class Cane extends Animale{
    public function __construct($nome){
     parent::__construct($nome);
    }
    public function verso(){
        echo"il mio verso e' bau <br>";
    }
}

class Gatto extends Animale implements JsonSerializable{
    public function __construct($nome){
     parent::__construct($nome);
    }
    public function jsonSerialize():array{
        return[
            'name'=>$this->nome,
            'verso'=>$this->verso()
        ];
    }
    public function verso(){
        echo"il mio verso e' miao <br>";
    }
}

?>