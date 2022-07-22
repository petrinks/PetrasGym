<?php

include_once './includes/head.php';

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./css./contato.css">
    <script src="./js./script.js"></script>
    <title>contato</title>
</head>
<body>
<section class="area-login">
        <div class="login">
                <a href="index.php" class='logo'>Petras<span>Gym</span></a>
            <form>
                <input type="text" id="nomecontatoid" placeholder="Tiago Vale" required="required" name="nome" />
                <input type="text" id="fonecontatoid" placeholder="(11) 99999-9999" name="fone" />
                <input type="email" id="emailcontatoid" placeholder="TiagoVale@mail.com" name="email" />
                <textarea placeholder="Deixe sua opnião"></textarea>
                <input type="submit" class="enviar" onclick="Enviar();" value="Enviar" />
            </form>
        </div>
    </section>
</body>
</html>


<?php

include_once './includes/footer.php';

?>