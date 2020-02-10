<?php

Class Conexao{
    private $host='localhost';
    private $user='root';             //Dados do DB
    private $dbname='farmacia';
    private $senha='';


    public function conectar(){
       try{ $conexao = new PDO(
            "mysql:host=$this->host;dbname=$this->dbname",
            "$this->user",
            "$this->senha"
        );
        return $conexao();
        echo "sucesso!";
    } catch (PDOException $e) {
        echo "ERRO!" , $e->getMessage();
}}
}
?>