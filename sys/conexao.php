<?php
/**
* Cria uma instancia do PDO
* @return PDO 	
*
* @author Marcus Antonio
*/
abstract class conexao {
    static private $conn;
    public static function getConexao(){
        if(self::$conn == null){
            self::$conn = new PDO('mysql:host=2isolucoes.com;dbname=isolusti_inscricao','isolusti_0000','00001');
            self::$conn->exec("SET CHARACTER SET utf8");
        }
        return self::$conn;
    }
}
/*
* Exemplo
* como obter uma conexao
* $conn = conexao::getConexao();
*/
?>