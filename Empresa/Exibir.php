<?php
    require_once "Funcionario.php"
    $exibirFun = new Funcionario();

    echo $exibirFun->getNome();
    echo $exibirFun->getCidade();
    echo $exibirFun->getSalarioFinal();
?>