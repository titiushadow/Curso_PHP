<!DOCTYPE html>
<?php 
// Botão enviar
    if(isset($_POST['btn-enter'])):
        echo "Clicou no botão";
    endif;
?>
<html lang="pt">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
</head>
<body>
    <h1> Login </h1>
    <form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="POST">
        Login: <input type="text" name="login"><br>
        Senha: <input type="password" name="senha"><br>
        <button type="submit" name="btn-enter"> Entrar </button>
    </form>
</body>
</html>