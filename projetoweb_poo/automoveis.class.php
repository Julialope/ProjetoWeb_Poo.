<?php

//Classe com o nome Automoveis
class Automoveis {
    //Obejtos com visibilidade privada
    private $tipo;
    private $cor;
    private $placa;
    private $numdeportas;

    //Método de captura de valor de objeto
    public function getTipo(){
        return $this->tipo;
    }

    public function setTipo($tipo){
         $this->tipo = $tipo;
    }

    public function getCor(){
        return $this->cor;
    }
    public function setCor($cor){
         $this->cor = $cor;
    }

    public function getplaca(){
        return $this->placa;
    }
    public function setPlaca($placa){
        $this->placa = $placa;
    }
    public function getNumdeportas(){
        return $this->numdeportas;
    }
    public function setNumdeportas($numdeportas){
        $this->numdeportas = $numdeportas;
    }

}
?>