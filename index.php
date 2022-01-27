<?php
    require __DIR__.'/Vendor/autoload.php';

    #chamada da classe Post
    use App\Entity\Post;

    #contante de titulo
    const TITLE_H = "Banana Blog - Home";
    
    #BUSCA

    #Pegando o valor da busca e limpando
    $busca = filter_input(INPUT_GET, 'busca', FILTER_SANITIZE_STRING);

    $condicoes = [
        strlen($busca) ? 'titulo LIKE "%'.str_replace(' ', '%', $busca).'%"': null
    ];
    
    $where = implode(' AND ', $condicoes);

    #Objeto que recebe os valores de Post
    $posts = Post::getPosts($where);

    #componentes da pagina
    include __DIR__.'/Includes/header.php';
    include __DIR__.'/Includes/cards.php';
    include __DIR__.'/Includes/footer.php';

   
?>
