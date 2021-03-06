<?php
require __DIR__.'/Vendor/autoload.php';

use App\Entity\Post;
use App\Session\Login;

Login::requireLogin();

const TITLE = "Editar Post";

     //Verificar se foi enviado um ID
     if(!isset($_GET['id']) or !is_numeric($_GET['id'])){
          header('location: index.php?status=error');
          exit;
     }

     // Consulta post no banco
     $obPost = Post::getPost($_GET['id']);

     // Verifica se é instancia
     if(!$obPost instanceof Post){
          header('location: index.php?status=error');
          exit;
     }

     if(isset($_POST['title'], $_POST['content'])){
          $obPost->title = $_POST['title'];
          $obPost->content = $_POST['content'];
          $obPost->id = $_GET['id'];
          // echo "<pre>"; 
          // print_r($obPost);
          // echo "</pre>";
          $obPost->atualizar();
     }
     const TITLE_H = "Banana Blog - Cadastrar Post";
     include __DIR__.'/Includes/header.php';
     include __DIR__.'/Includes/form_post.php';
     include __DIR__.'/Includes/footer.php';
?>