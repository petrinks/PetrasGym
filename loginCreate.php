<?php

include_once './includes/head.php';

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./css./loginCreate.css">
    <title>Criar Conta</title>
</head>
<body>   
    <section class="area-login">
            <div class="login">
                <div>
                    <a href='index.php' class='logo'>Petras<span>Gym</span></a>
                </div>

                <form>
                    <input type="text" name="nomeusuario" placeholder="Seu nome de usuário" autofocus>
                    <input type="text" name="senha" placeholder="Crie sua senha" autofocus>
                    <input type="text" name="confsenha" placeholder="Confirme a senha" autofocus>
                    <input type="text" name="CPFouCNPJ" placeholder="CPF ou CNPJ" autofocus>
                    <input type="submit" value="Cadastrar">
                </form>
            </div>
    </section>
</body>
</html>


<?php

include_once './includes/footer.php';

?>