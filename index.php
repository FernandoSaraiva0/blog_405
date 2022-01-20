<?php
    require __DIR__.'/Vendor/autoload.php';

    #chamada da classe Post
    use App\Entity\Post;

    #contante de titulo
    const TITLE_H = "Banana Blog - Home";

    #Objeto que recebe os valores de Post
    $posts = Post::getPost();

    $path = "C:\xampp\htdocs\blog\blog\img\banana-cachos.png";
    $extension = pathinfo($path, PATHINFO_EXTENSION);
    echo("The extension is $extension."); 

    $extensio = $ext;

    #componentes da pagina
    include __DIR__.'/Includes/header.php';
    include __DIR__.'/Includes/cards.php';
    include __DIR__.'/Includes/footer.php';
?>
