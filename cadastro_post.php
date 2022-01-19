<?php
require __DIR__.'/Vendor/autoload.php';
use App\Entity\Post;

     if(isset($_POST['title'], $_POST['content'])){
          $obPost = new Post;
          $obPost->title = $_POST['title'];
          $obPost->content = $_POST['content'];
          $obPost->cadastrar();
     }
     
     include __DIR__.'/Includes/header.php';
     include __DIR__.'/Includes/form_post.php';
     include __DIR__.'/Includes/footer.php';
?>