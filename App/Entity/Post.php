<?php

namespace App\Entity;

use App\Db\Database;
use \PDO;

class Post{
    public $id;
    public $title;
    public $content;
    public $date;

    public function cadastrar(){
        #metodo que cadastra o post no banco de dados
        // cadastrar uma data
        $this->date = date('Y-m-d H:i:s');
        // inserir o post no banco de dados
        $obDatabase = new Database('post');
        $this->id = $obDatabase->insert([
            'titulo' => $this->title,
            'conteudo' => $this->content,
            'date' => $this->date
        ]);
        // definir automaticamente o id.
    }

    #metodo que atualiza dados no banco
    public function atualizar(){
        return (new Database ('post'))->update('id= '.$this->id, [
            'titulo' => $this->title,
            'conteudo' => $this->content,
            'date' => $this->date
        ]);
    }

    #metodo reponsavel por pegar todos os posts do banco de dados
    public static function getPosts($where = null, $order = null, $limit= null){
        return (new Database ('post'))->select($where, $order, $limit)
                                      ->fetchAll(PDO::FETCH_CLASS, self::class);
    }

    #metodo para pegar post especifico
    public static function getPost($id){
        return (new Database ('post'))->select('id ='.$id)
                                      ->fetchObject(self::class);
    }
}