    <!-- descrição de produto -->
    <main class="mx-auto px-1 w-50" style="border: solid 1px;">
        <div class="m-5 title">
            <h1><?= $obPost->titulo ?></h1>
        </div>
        <div>
            <img class="img-fluid" src="img/<?= $obPost->id ?>.jpg" style="width: 100%;" alt="">
        </div>
        <div class="text-center conteudo mt-2" style="justify-content: center;">
            <p><?= $obPost->conteudo ?></p>
        </div>
    </main>

    <!-- caixa para deixar comentario -->
    <div class="mx-auto w-50">
        <h2 style="margin-top: 32px;">Deixe um comentário</h2><br>
        <textarea class="img-fluid" name="" id="" cols="104" rows="3"></textarea>
    </div>
