<?php
        $result = '';
        foreach($posts as $key => $post){
            $result .= '
            <tr>
                <td>'.$post->id.'</td>
                <td>'.$post->titulo.'</td>
                <td>'.$post->conteudo.'</td>
                <td> 
                    <a href="edita_post.php?id='.$post->id.'">
                    <button class="btn btn-success">Editar Post</button>
                    </a>
                    <a href="exclui_post.php?id='.$post->id.'">
                    <button class="btn btn-danger">Excluir Post</button>
                    </a>
                </td>
            </tr>
            ';
        }
    ?>
<div class="container mx-auto">
    <a href="cadastro_post.php">
        <button class="btn btn-primary">Cadastrar Post</button>
    </a>
</div>
<h2 class="text-center mb-4">POSTS</h2>
<div class="container col-8 text-center d-flex justify-content-center">
    <table class="table table-hover table-borderless">
    <thead>
        <tr>
        <th scope="col">Id</th>
        <th scope="col">Titulo</th>
        <th scope="col">Conteúdo</th>
        <th scope="col">Ações</th>
        </tr>
    </thead>
    <tbody>
        <?= $result ?>
    </tbody>
    </table>
</div>
