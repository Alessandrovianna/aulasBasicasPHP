<?php
/*
session_start();

$_SESSION["teste"] = "Alessandro Viana";

echo "Sessão foi feita...";
*/

//echo "meu nome é: ".$_SESSION["teste"];

setcookie("meuteste", "Fulano de tal", time()+3600);

//echo "cookie setado com sucesso!";

echo "Meu cookie é de: ".$_COOKIE["meuteste"];
?>