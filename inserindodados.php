<?php

$dsn = "mysql:dbname=blog;host=127.0.0.1";
$dbuser = "root";
$dbpass = "";

try {
    $pdo = new PDO($dsn, $dbuser, $dbpass);

    $nome = "Joao";
    $email = "joao@gmail.com";
    $senha = md5("9999");

    $sql = "INSERT INTO usuarios SET nome = '$nome', email = '$email', senha = '$senha'";
    $sql = $pdo->query($sql);

    echo "O id do usuario Jo?o ?: ".$pdo->lastInsertId();

} catch(PDOException $e) {
        echo "Falhou: ".$e->getMessage();

}
?>