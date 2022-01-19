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
    #metodo para consultar dados no banco
    public static function getPost($where = null, $order = null, $limit= null){
        return (new Database ('post'))->select($where, $order, $limit)
                                      ->fetchAll(PDO::FETCH_CLASS, self::class);
    }
}