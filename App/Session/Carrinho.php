<?php

namespace App\Session;

class Carrinho{

    public $quant;
    public $carrinho;

    #Método que atova a sessão
    public static function init(){
        // PHP SESSION ACTIVE é chamada no momento que em uma sessão é ativada
        if(session_status() !== PHP_SESSION_ACTIVE){
            session_start();
        }
    }

    // public function atualizaCart(){
    //     $_SESSION['cart'] = $this->carrinho;

    //     return $_SESSION['cart'];
    // }

    #Método adiciona post na SESSION
    public function addCar($obPost){
        self::init();
        $id = $obPost->id;
        $quant = 1;
           if(isset($_SESSION['cart']) && is_array($_SESSION['cart'])) {
                if(array_key_exists($obPost->id, $_SESSION['cart'])){
                    #O produto existe, então adiciona à quantidade
                    $_SESSION['cart'][$id] += $quant;
                } else {
                    $_SESSION['cart'][$id] = 1;
                }
                
           } else {
               $_SESSION['cart'] = array($id => $quant, 'nome' => $obPost->titulo);
           }

           serialize($_SESSION['cart']);
        
    }

    public function getCart(){
        self::init();

        var_dump($_SESSION['cart']);
    //    $products_in_cart =  isset($_SESSION['cart']) ? $_SESSION['cart'] : array();

    //    foreach ($products_in_cart as $key => $product){
    //        echo $product;
    //    }
    }
        
    }
