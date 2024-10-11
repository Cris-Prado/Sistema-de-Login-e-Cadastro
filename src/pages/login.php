<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../styles/global.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.6.0/css/all.min.css" integrity="sha512-Kc323vGBEqzTmouAECnVceyQqyqdsSiqLQISBL29aUW4U/M7pSPA/gEUZQqv1cwx4OnYxTxve5UMg5GT6L4JJg==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="../styles/formulario.css">
    <link rel="shortcut icon" href="../img/favicon.ico" type="image/x-icon">
    <title>Tela de Login | Cristiano 001</title>
</head>
<body>
    <main class="main">
        <form action="../php/test.Login.php" class="formulario" method="POST">
            <div class="theme">
                <i class="fa-solid fa-sun"></i>
                <i class="fa-solid fa-moon"></i>
            </div>
            <h1 class="log-title cad-title title">Login</h1>

            <fieldset class="fild">
                <div class="inp-form">
                    <i class="fa-solid fa-envelope icox"></i>
                    <input type="text" name="email" id="email" class="inp" placeholder="Username...">
                </div>

                <div class="inp-form">
                    <i class="fa-solid fa-key icox"></i>
                    <input type="password" name="senha" id="senha" class="inp" placeholder="Password...">
                </div>

            </fieldset>

            <input class="bt-form" name="submit" type="submit" value="Connect">
            <div class="connect">
                <a href="">Sign-up</a>
                <span>/</span>
                <a href="">Forgot your password?</a>
            </div>
        </form>
    </main>
    <script src="/src/js/theme.js"></script>
</body>
</html>