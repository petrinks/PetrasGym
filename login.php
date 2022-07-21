<?php

include_once './includes/head.php';

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
                <a href='index.php' class='logo'>Petras<span>Gym</span></a>
            </div>

            <form>
                <input type="text" name="nome" placeholder="usuário" autofocus>
                <input type="text" name="senha" placeholder="Senha" autofocus>
                <input type="submit" value="entrar">
            </form>
            <p>Ou faça login com:</p>
            <div class="social">
                <a href="https://github.com/" target="_blank"><img src="./content./github.png"></a>
                <a href="https://facebook.com/" target="_blank"><img src="./content./facebook.png"></a>
            </div>
            <p>Ainda não possui uma conta?</p>
            <a href="loginCreate.php" class="conta">Criar conta</a>
        </div>
    </section>
</body>
</html>



<?php

include_once './includes/footer.php';

?>