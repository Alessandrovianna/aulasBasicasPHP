<?php

/*
$nomes = array("Alessandro","Bonieky","Fulano","Ciclano");

foreach($nomes as $aluno) {
   echo "Aluno: ".$aluno."<br/>";
}
*/
/*
$nomes = array (
    array("nome"=>"Alessandro", "idade"=>28),
    array("nome"=>"Bonieky", "idade"=>38),
    array("nome"=>"Fulano", "idade"=>18),
    array("nome"=>"Ciclano", "idade"=>47)
);

foreach($nomes as $aluno) {
    echo "Aluno: ".$aluno["nome"]." - Idade: ".$aluno["idade"]."<br/>";
 }
 */

 $aluno = array(
     "nome" => "Alessandro",
     "idade" => 28,
     "estado" => "SP",
     "pais" => "Brasil"
 );

 foreach($aluno as $chave => $dado) {
    echo $chave." = ".$dado."<br/>";
 }
?>
