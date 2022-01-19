<?php
// solicita conexao com banco de dados
require 'conexao_bd.php';

// variaveis de cadastro
$nome = $_POST['nome'];
$avatar = $_POST['avatar'];
$email = $_POST['email'];
$senha = $_POST['senha'];

// comando para jogar dados no banco de dados
$con->query("INSERT INTO usuario (nome, avatar, email, senha) VALUES ('$nome', '$avatar', '$email', '$senha');");


echo '<script type="text/javascript">alert("Usuario cadastrado com sucesso!")</script>';
