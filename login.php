<?php
    require __DIR__.'/Vendor/autoload.php';

    use App\Entity\Usuario;
    use App\Session\Login;

    Login::requireLogout();

    $alertaLogin = '';

        if(isset($_POST['email'], $_POST['senha'])){
            #chamar a função pra pegar o email digitado
            $obUsuario = Usuario::getUser($_POST['email']);

            #Vertificar se retorna alguma valor e validando a senha do usuário
            if(!$obUsuario instanceof Usuario || !password_verify($_POST['senha'], $obUsuario->senha)){
                $alertaLogin = 'Email ou senha inválidos';
                exit;
            }

            Login::logar($obUsuario);
        }
        
    const TITLE_H = "Banana Blog - Login";
    include __DIR__.'/Includes/header.php';
    include __DIR__.'/Includes/form_login.php';
    include __DIR__.'/Includes/footer.php';
?>