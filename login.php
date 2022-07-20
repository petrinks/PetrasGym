<?php

include_once './includes/head.php';
include_once './includes/headerLogin.php';
include_once './includes/footer.php';

?>
<!DOCTYPE html>
<html lang="PT-BR">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./css./login.css">
    <title>Login</title>
</head>
<body>
    <section class="area-login">
        <div class="login">
            <div>
                <img src="./content./logo.png" alt="">
            </div>

            <form>
                <input type="text" name="nome" placeholder="usuário" autofocus>
                <input type="text" name="senha" placeholder="Senha" autofocus>
                <input type="submit" value="entrar">
            </form>
            <p>ainda nao tem uma conta? <a href="#" class="conta">Criar conta</a></p>
        </div>
    </section>
</body>
</html>