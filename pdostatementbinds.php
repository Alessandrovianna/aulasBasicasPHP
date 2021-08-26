<?php

$dsn = "mysql:dbname=blog;host=127.0.0.1";
$dbuser = "root";
$dbpass = "";

try {
    $pdo = new PDO($dsn, $dbuser, $dbpass);
    
    $nome = 'Beltrano22';
    $id = 5;

    $sql = "UPDATE usuarios SET nome = :novonome WHERE id = :id";

    $sql = $pdo->prepare($sql);
    $sql->bindValue(':novonome', $nome);
    $sql->bindValue(':id', $id);
    $sql->execute();

    echo "Usuario atualizado com sucesso!";

} catch(PDOException $e) {
        echo "Falhou: ".$e->getMessage();

}
?>