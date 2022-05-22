<?php
// Password Hash
$senha = "123456";
$senha_db = '$2y$10$9Q.DWDtt2WOaQGx9fYXQx.NRChp7IO95M2gxXuOVxSdGyJbJzpAbO';

if(password_verify($senha, $senha_db)):
    echo "Senha Válida";
else:
    echo "Senha Inválida";
endif;

//$senhaSegura = password_hash($senha, PASSWORD_DEFAULT);
//echo $senhaSegura;



?>