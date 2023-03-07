<?php

require_once("pessoa.class.php");

class Teste{
    private $pessoa;

    public function __construct(){
        $pessoa = new Pessoa();

        $pessoa->setNome($_POST['nome']);
        echo $pessoa->getNome();
    
        $pessoa->setEndereco($_POST['endereco']);      
        echo $pessoa->getEndereco();

        $pessoa->setBairro($_POST['bairro']);      
        echo $pessoa->getBairro();

        $pessoa->setCep($_POST['cep']);      
        echo $pessoa->getCep();

        $pessoa->setCidade($_POST['cidade']);      
        echo $pessoa->getCidade();

        
        $pessoa->setEstado($_POST['estado']);      
        echo $pessoa->getEstado();
    }
}new Teste();

?>
