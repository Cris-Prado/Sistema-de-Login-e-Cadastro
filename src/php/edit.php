<?php
    include_once('config.php');

    if(!empty($_GET['id']))
    {
        $id = $_GET['id'];
        $sqlSelect = "SELECT * FROM usuarios WHERE id=$id";
        $result = $conexao->query($sqlSelect);
        if($result->num_rows > 0)
        {
            while($user_data = mysqli_fetch_assoc($result))
            {
                $nome = $user_data['nome'];
                $senha = $user_data['senha'];
                $email = $user_data['email'];
                $sexo = $user_data['sexo'];
                $data_nasc = $user_data['data_nasc'];
            }
        }
        else
        {
            header('Location: ../pages/sistema.php');
        }
    }
    else
    {
        header('Location: ../pages/sistema.php');
    }
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../styles/global.css">
    <link rel="stylesheet" href="../styles/formulario.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.6.0/css/all.min.css" integrity="sha512-Kc323vGBEqzTmouAECnVceyQqyqdsSiqLQISBL29aUW4U/M7pSPA/gEUZQqv1cwx4OnYxTxve5UMg5GT6L4JJg==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="shortcut icon" href="../img/favicon.ico" type="image/x-icon">
    <title>Editar cadastro | Dev Prado</title>
</head>
<body>
<main class="main">
        <form action="saveEdit.php" class="formulario" method="POST">
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
                <input type="text" name="nome" id="nome" class="inp" placeholder="Nome Completo" value=<?php echo $nome;?> >
            </div>
            <div class="inp-form">
                <i class="fa-solid fa-envelope icox"></i>
                <input type="email" name="email" id="email" class="inp" placeholder="Digite seu E-mail..." value=<?php echo $email;?>>
            </div>
            <fieldset class="fild fild-cad fildCadName">
                <div class="inp-form">
                    <input type="date" name="data_nasc" id="data_nasc" class="inp inpNasc" value=<?php echo $data_nasc;?>>
                </div>
                <select id="genero" name="genero" class="inp-form" value=<?php echo ($sexo == 'masculino') ? 'selected' : '';?>>
                    <option value="" disabled selected>Selecione</option>
                    <option value="Masculino">Masculino</option>
                    <option value="Feminino">Feminino</option>
                    <option value="Outro">Outro</option>
                    <option value="Nulo" >Prefiro não informar</option>
                </select>
            </fieldset>
            <div class="inp-form">
                <i class="fa-solid fa-key icox"></i>
                <input type="password" name="senha" id="senha" class="inp" placeholder="Digite sua senha..." value=<?php echo $senha;?>>
            </div>
            <input type="hidden" name="id" value=<?php echo $id;?>>
            <input class="bt-form" name="update" id="update" type="submit" value="Connect">
        </form>
    </main>
    <script src="/src/js/theme.js"></script>
</body>
</html>