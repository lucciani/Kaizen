<?php

class PDOConnectionFactory {

    // recebe a conexão
    public static $con = null;
    // qual o banco de dados?
    public static $dbType = "mysql";
    // parâmetros de conexão
    // quando não for necessário deixe em branco apenas com as aspas duplas ""
    public static $host = "localhost";
    public static $user = "root";
    public static $senha = "root";
    public static $db = "mydb";
    // seta a persistência da conexão
    public static $persistent = false;

    // new PDOConnectionFactory( true ) <--- conexão persistente
    // new PDOConnectionFactory()       <--- conexao não persistente
    public function PDOConnectionFactory($persistent = false) {
        // verifico a persistência da conexao
        if ($persistent != false) {
            self::$persistent = true;
        }
    }

    public static function getConnection() {
        try {
            // realiza a conexão
            self::$con = new PDO(self::$dbType . ":host=" . self::$host . ";dbname=" . self::$db, self::$user, self::$senha, array(PDO::ATTR_PERSISTENT => self::$persistent));
            // realizado com sucesso, retorna conectado
            return self::$con;

            // caso ocorra um erro, retorna o erro;
        } catch (PDOException $ex) {
            echo "Erro: " . $ex->getMessage();
        }
    }

    // desconecta
    public function Close() {
        if (self::$con != null)
            self::$con = null;
    }

}
