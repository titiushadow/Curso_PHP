<?php
$senha ="123456";
// Base64 é uma criptografia de mão dupla temos uma
// função para codificar e outra para decodificar.

// base64
$novaSenha = base64_encode($senha);
echo "base64: ".$novaSenha."<br>";
echo "Sua senha é: ". base64_decode($novaSenha);
echo "<hr>";

// Criptografia MD5 e sha1, eles só podem criptografar

// MD5
echo "MD5: ". md5($senha)."<br>";

// SHA1
echo "SHA1: ". sha1($senha);
?>