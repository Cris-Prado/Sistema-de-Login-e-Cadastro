<?php

    $dbHost = 'localhost';
    $dbUsername = 'root';
    $dbPassword = ''; // Senha do Banco de Dados
    $dbName = 'formulario_sistema';  // Nome do Banco de Dados

    $conexao = new mysqli($dbHost,$dbUsername,$dbPassword,$dbName);

    // if($conexao->connect_errno){
    //     echo "error";
    //  }
    //  else{
    //     echo "Conecxão efetuada com sucesso !";
    // }
    
?>