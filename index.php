<?php
if(isset($_POST['nome'])) {

    $nome = $_POST['nome'];
    file_put_contents("teste.txt", $nome, FILE_APPEND);

    header("Location: index.php");
}
?>
<form method="POST">
    <input type="text" name="nome" /><br/><br/>
    <input type="submit" value="Enviar Dados" />
</form>

