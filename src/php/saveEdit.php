<?php
    // isset -> serve para saber se uma variável está definida
    include_once('config.php');
    if(isset($_POST['update']))
    {
        $id = $_POST['id'];
        $nome = $_POST['nome'];
        $email = $_POST['email'];
        $senha = $_POST['senha'];
        $sexo = $_POST['genero'];
        $data_nasc = $_POST['data_nasc'];
        
        $sqlInsert = "UPDATE usuarios 
        SET nome='$nome',senha='$senha',email='$email',sexo='$sexo',data_nasc='$data_nasc'
        WHERE id=$id";
        $result = $conexao->query($sqlInsert);
        print_r($result);
    }
    header('Location: ../pages/sistema.php');

?>