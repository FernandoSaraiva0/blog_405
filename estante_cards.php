<?php
require 'conexao_bd.php';

$sql_select = ("SELECT* FROM post");
$sql = $con->prepare($sql_select);
$sql->execute();