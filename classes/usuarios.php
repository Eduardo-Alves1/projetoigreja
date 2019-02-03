<?php

class Usuario 

{

    private $pdo;
    public function conectar($nome, $host, $user,$pass)
    global $pdo;

    try{

        $pdo = new PDO("mysql:dbname=".$nome";"$host=".$host",$usuario,$pass);
    }catch (PDOException $e){
        global $mensagemErro;
        $mensagemErro = $e -> getMessage();
    }
    

}
public function cadastrar(){

}
public function logar(){

}
?>