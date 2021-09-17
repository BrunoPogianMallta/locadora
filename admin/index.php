<?php
session_start();
require_once "./painel/functions/functions.php";
require_once "./painel/functions/conexao.php";

/*LOGAR NO SISTEMA*/
if (isset($_POST['ok']) and $_SERVER['REQUEST_METHOD'] == 'POST') :
    $login = $_POST['login'];
    $senha = $_POST['senha'];

    if (logarSistema($login, $senha)) :
        redirecionaLogado(("painel/"));
    else :
        $erro = "Login ou senha inválidos !";
    endif;

endif;

?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/style.css">
    <title>Document</title>
</head>

<body>
    <div id="login">

        <div><img src="img/logo.png" id="logo_mallta" /></div>

        <div id="form_login">


            <form action="" method="post">


                <label for="login" id="login_field">Login</label>
                <input type="text" name="login" class="input_login">

                <label for="senha">Senha</label>
                <input type="password" name="senha" class="input_login">

                <label for="submit"></label>
                <input type="submit" name="ok" value="logar" id="botao_logar">

            </form>
            <div id="mensagem"><?php echo isset($erro)?$erro : '';?></div>
        </div>
    </div>
</body>

</html>