    <!-- cards -->
    <?php
        $result = '';
        foreach($posts as $post){
            $result .= '
            <div class="card" style="margin: 0 20px 40px; width: 20rem;">
                <img src="img/'.$post->titulo.'.png" class="card-img-top" alt="...">
                <div class="card-body">
                    <h5 class="card-title">'.$post->titulo.'</h5>
                    <p class="card-text">'.$post->conteudo.'</p>
                </div>
                <ul class="list-group list-group-flush">
                    <a class="btn btn-primary" type="button" href="post.php">continue lendo</a>
                </ul>
            </div>
            ';
        }
    ?>
    <section class="m-5 d-flex flex-wrap" style="justify-content: center;">
      <?= $result ?>
    </section>