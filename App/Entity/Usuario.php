<?php

namespace App\Entity;

use App\Db\Database;

class Usuario{
    public $id;
    public $nome;
    public $email;
    public $senha;

    #Método para Cadastrar um usuário
    public function cadastrar(){
        // instancia do banco de dados
        $obDatabase = new Database('usuario');
        $this->id = $obDatabase->insert([
            'nome' => $this->nome,
            'email' => $this->email,
            'senha' => $this->senha,
        ]);
    }

    #Método para pegar usuário pelo email
    public static function getUser($email){
        return (new Database('usuario'))->select('Email = "'.$email.'"')
                                        ->fetchObject(self::class);
    }
}