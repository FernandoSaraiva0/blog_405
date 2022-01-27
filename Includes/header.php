
<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css" integrity="sha512-Fo3rlrZj/k7ujTnHg4CGR2D7kSs0v4LLanw2qksYuRlEzO+tcaEPQogQ0KaoGN26/zrn20ImR1DfuLWnOo7aBA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <title><?php echo TITLE_H; ?></title>
</head>

<body>
    <!-- cabeçalho -->
    <header>
        <div class="conteudo d-flex flex-column justify-content-center align-items-center">
            <img class="banner" src="img/banner.png" alt="">
            <div class="img d-flex flex-column justify-content-center align-items-center"> 
                <img class="img-fluid logo mt-2" src="img/logo.png" alt="">
                <h3>Um blog sobre bananas, o universo e tudo mais...</h3>
                <div class="d-inline mb-2">
                    <a href="https://www.facebook.com/"><i class="fab fa-facebook"></i></a>
                    <a href="https://www.instagram.com/"><i class="fab fa-instagram"></i></a>
                </div>
            </div>
        </div>
    </header>

    <!-- navbar para navegação e pesquisa -->
    <section>
        <nav class="navbar navbar-expand-lg navbar-light bg-light mb-5">
            <div class="container-fluid">
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                        <li class="nav-item">
                            <a class="nav-link" href="index.php">Home</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="login.php">Login</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="cadastro_usuario.php">Cadastro</a>
                        </li>
                    </ul>
                    <form  method="GET" class="d-flex">
                        <input class="form-control me-2" type="search" placeholder="Pesquisar produto" aria-label="Search" name="busca" value="<?= $busca ?>">
                        <button class="btn btn-outline-success" type="submit">Pesquisa</button>
                    </form>
                </div>
            </div>
        </nav>
    </section>