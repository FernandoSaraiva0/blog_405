    <!-- cards -->
    
    <section class="m-5 d-flex flex-wrap" style="justify-content: center;">
    <?php while ($row_product = $sql->fetch(PDO::FETCH_ASSOC)) {?>
        <div class="card" style="margin: 0 20px 40px; width: 20rem;">
            <img src="img/<?= $row_product['titulo']; ?>.jpg" class="card-img-top" alt="...">
            <div class="card-body">
                <h5 class="card-title"><?= $row_product['titulo']; ?></h5>
                <p class="card-text"><?= $row_product['conteudo']; ?></p>
            </div>
            <ul class="list-group list-group-flush">
                <a class="btn btn-primary" type="button" href="post.php">continue lendo</a>
            </ul>
        </div>
    <?php }; ?>
    </section>