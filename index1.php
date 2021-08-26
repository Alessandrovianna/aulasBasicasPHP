<?php 
/*
$nome = "Alessandro";
$sobrenome = "Viana";
$idade = "28";
echo "Meu nome eh: ".$nome. " ".$sobrenome." e tenho ".$idade." anos";
*/

/*
$variavel = array ("Alessandro", "Viana", 28, "masculino");
echo $variavel["1"];
*/

/*
 VARIAVEIS COMPOSTAS
$variavel = array (
    "nome" => "Alessandro",
    "sobrenome" => "Viana",
    "idade" => 28,
    "sexo" => "masculino"
);

$variavel["idade"] = 30;
echo $variavel["idade"];
*/
/*
GLOBAIS
$nome = $_GET["nome"];

echo "Seu nome eh ".$nome;
*/

/*
 CONSTANTES
define("URL", "http://www.meusite.com.br");

echo "Meu site eh: ".URL;
*/

$nome = "Alessandro";
$idade = 28;

if($nome == "Alessandro" && $idade == 28)
{
    echo "Meu nome e minha idade esta correta!";
} 
else 
{
    echo "Meu nome esta errado!";
}

?>