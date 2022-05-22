<?php
session_start(); // sempre que for trabalhar com sessões usar session_start();

$_SESSION['cor'] = "Verde";
$_SESSION['carro'] = "Camaro";

echo $_SESSION['cor']."<br>".$_SESSION['carro']."<br>".session_id();

?>