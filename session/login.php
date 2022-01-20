<?php
    $usr = $_POST['usr'];
    $pass = $_POST['pass'];
    $query = "SELECT * FROM `usuario` WHERE email='$usr' and senha='$pass'";

    $con = new PDO('mysql:host=localhost; dbname=blog', 'root', '');
    $res = $con->query($query);
    $logado = $res->fetch();
    $id_logado = $logado['id'];
    $nome_log = $logado['nome'];

    if($logado == null){
        header('Localtion:index.php');
    } else{
        session_start();
        $_SESSION['logado'] = $id_logado;
        $_SESSION['nome'] = $nome_logado;
        header('Location: logado.php');
    }

    die();