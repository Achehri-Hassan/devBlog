
<?php

class Database
{
    private $localhost = "localhost";
    private $dbname = "devBlog";
    private $user = "root";
    private $password = "";

    private $conn;

    public function Connection()
    {
        try {
            $this->conn = new PDO(
                "mysql:host={$this->localhost};dbname={$this->dbname};charset=utf8mb4",
                $this->user,
                $this->password
            );

            $this->conn->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION
            );

            return $this->conn;

        } catch (PDOException $e) {
            die("Database connection error: " . $e->getMessage());
        }
    }
}