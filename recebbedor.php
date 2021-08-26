<?php

$arquivo = $_FILES['arquivo'];

if(isset($arquivo['tmp_name']) && empty($arquivo['tmp_name']) == false) {
   
    $nomedoarquivo = md5(time().rand(0, 99)).'.jpg';
    //gerando um codigo md5 de tempo em tempo e concatenando com um numero
    //aleatorio de 0 a 99 e concatenando ele com a extençao do arquivo jpg.
    move_uploaded_file($arquivo['tmp_name'], '../aulasphp/'.$nomedoarquivo);

    echo "Arquivo enviado com sucesso!";
}
?>