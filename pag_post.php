<?php
    require __DIR__.'/Vendor/autoload.php';
    
    use App\Entity\Post;

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
    
    #contante de titulo
    const TITLE_H = 'Banana Blog';

    include __DIR__.'/Includes/header.php';
    include __DIR__.'/Includes/post.php';
    include __DIR__.'/Includes/footer.php';
?>