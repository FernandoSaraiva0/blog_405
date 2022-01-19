<?php

require 'conexao_bd.php';

$nome = $_POST['nome'];

$sql_select = ("SELECT id, titulo, conteudo, id_usuario, id_tag FROM post where titulo LIKE '$nome%';");
$sql = $con->prepare($sql_select);
$sql->execute();
?>

<link rel="stylesheet" href="css/bootstrap.min.css">
<?php require 'cards.php';