<?php
require __DIR__.'/Vendor/autoload.php';

use App\Entity\Post;
use App\Session\Login;

Login::requireLogin();

#Objeto que recebe os valores de Post
$posts = Post::getPosts();

const TITLE_H = "Admin";
    include __DIR__.'/Includes/header.php';
    include __DIR__.'/Includes/crud.php';
    include __DIR__.'/Includes/footer.php';