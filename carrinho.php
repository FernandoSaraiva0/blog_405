<?php
    require __DIR__.'/Vendor/autoload.php';

    use App\Entity\Post;
    use App\Session\Carrinho;

    $obPost = Post::getPost($_GET['id']);
    $carrinho = new Carrinho();
    $carrinho->addCar($obPost);

    $carrinho->getCart();

    // var_dump($carrinho);

  

