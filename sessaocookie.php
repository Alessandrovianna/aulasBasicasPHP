<?php
/*
session_start();

$_SESSION["teste"] = "Alessandro Viana";

echo "Sess�o foi feita...";
*/

//echo "meu nome �: ".$_SESSION["teste"];

setcookie("meuteste", "Fulano de tal", time()+3600);

//echo "cookie setado com sucesso!";

echo "Meu cookie � de: ".$_COOKIE["meuteste"];
?>