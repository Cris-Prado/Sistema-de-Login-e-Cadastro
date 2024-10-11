<?php

    if(isset($_POST['submit']))
    {
        include_once('../php/config.php');

        $nome = $_POST['nome'];
        $email = $_POST['email'];
        $data_nasc = $_POST['data_nasc'];
        $sexo = $_POST['genero'];
        $senha = $_POST['senha'];

        $result = mysqli_query($conexao, "INSERT INTO usuarios(nome,email,data_nasc,sexo,senha) 
        VALUES ('$nome','$email','$data_nasc','$sexo','$senha')");

        header('Location: login.php');

    }

?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../styles/global.css">
    <link rel="stylesheet" href="../styles/formulario.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.6.0/css/all.min.css" integrity="sha512-Kc323vGBEqzTmouAECnVceyQqyqdsSiqLQISBL29aUW4U/M7pSPA/gEUZQqv1cwx4OnYxTxve5UMg5GT6L4JJg==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="shortcut icon" href="../img/favicon.ico" type="image/x-icon">
    <title>Cadastro | Cristiano</title>
</head>
<body>
    <main class="main">
        <form action="cadastro.php" class="formulario" method="POST">
            <div class="theme">
                <i class="fa-solid fa-sun"></i>
                <i class="fa-solid fa-moon"></i>
            </div>
            <h1 class="log-title cad-title title">sign-up</h1>

            <div class="connect-redes">
                <div class="gogRed RedeSocial"><i class="fa-brands fa-google"></i> <span> Google</span></div>
                
                <div class="FacRed RedeSocial"><i class="fa-brands fa-facebook-f"></i> <span> Facebook</span></div>
            </div>
            <div class="inp-form">
                <i class="fa-solid fa-user icox"></i>
                <input type="text" name="nome" id="nome" class="inp" placeholder="Nome Completo">
            </div>
            <div class="inp-form">
                <i class="fa-solid fa-envelope icox"></i>
                <input type="email" name="email" id="email" class="inp" placeholder="Digite seu E-mail...">
            </div>
            <fieldset class="fild fild-cad fildCadName">
                <div class="inp-form">
                    <input type="date" name="data_nasc" id="data_nasc" class="inp inpNasc">
                </div>
                <select id="genero" name="genero" class="inp-form">
                    <option value="" disabled selected>Selecione</option>
                    <option value="Masculino">Masculino</option>
                    <option value="Feminino">Feminino</option>
                    <option value="other">Outro</option>
                    <option value="nulo">Prefiro não informar</option>
                </select>
            </fieldset>
            <div class="inp-form">
                <i class="fa-solid fa-key icox"></i>
                <input type="password" name="senha" id="senha" class="inp" placeholder="Digite sua senha...">
            </div>
            <input class="bt-form" name="submit" id="submit" type="submit" value="Connect">
        </form>
    </main>
    <script src="/src/js/theme.js"></script>
</body>
</html>