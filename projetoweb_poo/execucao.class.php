<?php
//Importação
require_once("automoveis.class.php");

    class Execucao {

    private $automoveis;

    public function __construct(){

        //Objeto chamado pessoa que recebe a classe automoveis
        $automoveis = new Automoveis();
        //Passar valor para o metodo setTipo
        $automoveis->setTipo("<b>Tipo:</b> Porche" . "<br>");
        echo $automoveis->getTipo();

        //Passar valor para o metodo setCor
        $automoveis->setCor("<b>Cor:</b> Cinza" . "<br>");
        echo $automoveis->getCor();

        //Passar valor para o metodo setPlaca
        $automoveis->setPlaca("<b>Placa:</b> MHZ-4345" . "<br>");
        echo $automoveis->getPlaca();

        //Passar valor para o metodo setNumdeportas
        $automoveis->setNumdeportas("<b>Número de portas: </b> 2" . "<br><br>");
        echo $automoveis->getNumdeportas();

        $automovel = new Automoveis();

        $automovel->setTipo("<b>Tipo:</b> Ferrari" . "<br>");
        echo $automovel->getTipo();

        $automovel->setCor("<b>Cor:</b> Vermelho" . "<br>");
        echo $automovel->getCor();

        $automovel->setPlaca("<b>Placa:</b> JKL-0001" . "<br>");
        echo $automovel->getPlaca();

        $automovel->setNumdeportas("<b>Número de portas: </b> 4" . "<br>");
        echo $automovel->getNumdeportas();


     }
}new Execucao();

?>