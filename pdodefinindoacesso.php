<?php

$dsn = "mysql:dbname=blog;host=127.0.0.1";
$dbuser = "root";
$dbpass = "";

try {
    $pdo = new PDO($dsn, $dbuser, $dbpass);

    $sql = "SELECT * FROM posts WHERE titulo = 'titulo 2'";
    $sql = $pdo->query($sql);
    
if($sql->rowCount() > 0) {

    foreach($sql->fetchAll() as $autor) {
        echo "Autor: ".$autor["autor"]." - ".$autor["titulo"]."<br/>";
    }

}else {
    echo "N�o h� nenhum dado na tabela posts";
}

} catch(PDOException $e) {
        echo "Falhou: ".$e->getMessage();

}
?>

echo '<tr>';
            echo '<td>'.$usuario['nome'].'</td>';
            echo '<td>'.$usuario['email'].'</td>';
            echo '<td><a href="">Editar</a> - <a href="">Excluir</a></td>';
            echo '</tr>';