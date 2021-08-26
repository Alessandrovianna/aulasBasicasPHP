<?php
/*
$nome = "Alessandro";
$nome2 = md5($nome);

echo "Nome sem criptografia: ".$nome."<br/>";
echo "Nome com criptografia: ".$nome2."<br/>";
*/
/*
$nome = "Alessandro";
$nome2 = base64_encode($nome);

echo "Nome sem criptografia: ".$nome."<br/>";
echo "Nome com criptografia: ".$nome2."<br/>";
*/

$codigo = "QWxlc3NhbmRybw==";

echo "Meu texto original é: ".base64_decode($codigo);

?>