<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formulario</title>
</head>
<body>

<?php
    if(isset($_POST['enviar-formulario'])):
        // Aarray de erros
        $erros = array();

        // VALIDAÇÕES

        // Validade para idade
        if(!$idade = filter_input(INPUT_POST, 'idade', FILTER_VALIDATE_INT)):
            $erros[] = "Idade precisa ser um inteiro";
        endif;

        // Validate para Email
        if(!$email = filter_input(INPUT_POST, 'email', FILTER_VALIDATE_EMAIL)):
            $erros[] = "Email invalido";
        endif;

        // Validate para Peso
        if(!$peso = filter_input(INPUT_POST, 'peso', FILTER_VALIDATE_FLOAT)):
            $erros[] = "Peso precisa ser um float";
        endif;

        // Validate para Ip
        if(!$ip = filter_input(INPUT_POST, 'ip', FILTER_VALIDATE_IP)):
            $erros[] = "IP invalido";
        endif;

        // Validate para URL
        if(!$url = filter_input(INPUT_POST, 'url', FILTER_VALIDATE_URL)):
            $erros[] = "Url invalida";
        endif;

        // Exibindo Mensagens
        if(!empty($erros)):
            foreach($erros as $erro):
                echo "<li> $erro </li>";
            endforeach;
        else:
            echo "Parabens, seus dados estão corretos!";
        endif;

    endif;
?>













    <form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="POST">
        idade: <input type="text" name="idade"><br>
        Email: <input type="text" name="email"><br>
        Peso:  <input type="text" name="peso"><br>
        IP:    <input type="text" name="ip"><br>
        URL:   <input type="text" name="url"><br>
        <button type="submit" name="enviar-formulario">Enviar</button><br>
    </form>
</body>
</html>