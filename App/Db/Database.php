<?php

namespace App\Db;

use \PDO;
use \PDOException;
 class Database{

    const HOST =  'localhost';
    const DB = 'blog';
    const USER = 'root';
    const PASS = '';

    private $con; // Variavel de conexão - instancia do PDO
    private $table; // Variavel que guarda o nome da tabela

    #CONSTRUTOR
    public function __construct($table = null){
        $this->table = $table;
        $this->setCon();
    }

    #CONEXÃO COM O BANCO DE DADOS
    public function setCon(){
        try {
            $this->con = new PDO('mysql:host='.self::HOST.'; dbname='.self::DB.'', self::USER, self::PASS);
            $this->con->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
            echo "";
        } catch (PDOException $ex) {
            echo $ex->getMessage();
        }  
    }

    public function execute($query, $params = []){
        try {
            #preparando para a execução da query
            $stmt = $this->con->prepare($query);
            #inserindo valores no bind
            $stmt->execute($params);
            return $stmt;
        } catch (PDOException $ex) {
            echo $ex->getMessage();
        } 

    }

    #INSERIR VALORES NO BANCO DE DADOS
    public function insert($values){
        #utilizando a função array key para pegar as chaves do array valores
        $fields = array_keys($values);
        $binds = array_pad([],count($fields), '?');
        #implode: distribuir esse array em vários pedaços
        $query = 'INSERT INTO `'.$this->table.'` ('.implode(',',$fields).') VALUES ('.implode(',',$binds).')';

        #executa a query
        $this->execute($query, array_values($values));

        return $this->con->lastInsertId();
    }

    #CONSUTAS AO BANCO DADOS
    public function select($where = null, $order = null, $limit= null, $fields = '*'){
        #dados da query
        $where = strlen($where) ? ' WHERE '.$where : '';
        $order = strlen($order) ? ' WHERE '.$order : '';
        $limit = strlen($limit) ? ' WHERE '.$limit : '';
        #executa a query
        $query = 'SELECT '.$fields.' FROM '.$this->table.$where.$order.$limit;

        return $this->execute($query);
    }
 }