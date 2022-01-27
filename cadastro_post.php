<?php
require __DIR__.'/Vendor/autoload.php';

use App\Entity\Post;
use App\Session\Login;

Login::requireLogin();

const TITLE = "Cadastrar Post";

     if(isset($_POST['title'], $_POST['content'])){
          $obPost = new Post;
          $obPost->title = $_POST['title'];
          $obPost->content = $_POST['content'];
          $obPost->cadastrar();
     }
     const TITLE_H = "Banana Blog - Cadastrar Post";
     include __DIR__.'/Includes/header.php';
     include __DIR__.'/Includes/form_cad_post.php';
     include __DIR__.'/Includes/footer.php';
?>