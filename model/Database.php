<?php
// Conexão com o banco de dados 
class Database
{
    private $host = "localhost";
    private $db_name = "medicos_db";
    private $username = "root";
    private $password = "aluno123";
    public $conn;

    public function getConnection()
    {
        $this->conn = null;

        try {
            $this->conn = new PDO(
                "mysql:host="
                    . $this->host . ";dbname="
                    . $this->db_name,
                $this->username,
                $this->password
            );
            $this->conn->setAttribute(
                PDO::ATTR_ERRMODE,
                PDO::ERRMODE_EXCEPTION
            );
            $this->conn->exec("set names utf8");
        } catch (PDOException $exception) {
            echo "Erro de conexão: "
                . $exception->getMessage();
        }
        return $this->conn;
    }
}
?>