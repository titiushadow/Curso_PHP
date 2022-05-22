<?php
// COOKIE
setcookie('user', 'Mesaque', time()+3600);
setcookie('email', 'mesaque1212@gmail.com', time()+3600);
setcookie('ultima_pesquisa', 'celular xiaomi', time()+3600);

echo $_COOKIE['ultima_pesquisa'];
?>