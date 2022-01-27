<?php
     require __DIR__.'/Vendor/autoload.php';

use App\Entity\Usuario;
use App\Session\Login;
 
     Login::requireLogout();

    if(isset($_POST['nome'], $_POST['email'], $_POST['senha'])){
        $obUsuario = new Usuario();
        $obUsuario->nome = $_POST['nome'];
        $obUsuario->email = $_POST['email'];
        $obUsuario->senha = password_hash($_POST['senha'], PASSWORD_DEFAULT);
        $obUsuario->cadastrar();
    }

   
    const TITLE_H = "Banana Blog - Cadastro";
    include __DIR__.'/Includes/header.php';
    include __DIR__.'/Includes/form.php';
    include __DIR__.'/Includes/footer.php';
?>