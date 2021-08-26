<?php

$dsn = "mysql:dbname=blog;host=127.0.0.1";
$dbuser = "root";
$dbpass = "";

try {
    $pdo = new PDO($dsn, $dbuser, $dbpass);
    //$sql = "UPDATE usuarios SET email = 'fulano.silva@hotmail.com' WHERE email = 'fulano@gmail.com'";
    //$sql = $pdo->query($sql);

    $novasenha = md5("996581");

    $sql = "UPDATE usuarios SET senha = '$novasenha' WHERE id = 3";
    $sql = $pdo->query($sql);

    echo "Senha alterada com sucesso!";

} catch(PDOException $e) {
        echo "Falhou: ".$e->getMessage();

}
?>