<?php 

namespace App\Session;

#Todos os métodos serão staticos pois não serão instanciados diretamente
class Login{

    #Método que atova a sessão
    public static function init(){
        // PHP SESSION ACTIVE é chamada no momento que em uma sessão é ativada
        if(session_status() !== PHP_SESSION_ACTIVE){
            session_start();
        }
    }

    #Método que loga o usuário na SESSION
    public static function logar($obUsuario){
        self::init();

        $_SESSION['usuario'] = [
            'id' => $obUsuario->id,
            'nome' => $obUsuario->nome,
            'email' => $obUsuario->email
        ];

        print_r($_SESSION);

        header('location:admin.php');
        exit;
    }

     #Método que verifica se o usuário está logado
     public static function isLogged(){
        return isset($_SESSION['usuario']['id']);
    }


    #Dizer quais paginas o meu usuário pode acessar estando logado e não estando logado

    #Requerendo login de usuário
    public static function requireLogin(){
        if(self::isLogged()){
            header('location:login.php?status=error');
            exit;
        }
    }

    public static function requireLogout(){
        if(!self::isLogged()){
            header('location:index.php');
            exit;
        }
    }
}