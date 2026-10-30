<?php

class Database
{
    private $conn;

    public function Connection()
    {
        try {
            $host = getenv("DB_HOST") ?: "localhost";
            $dbname = getenv("DB_NAME") ?: "devBlog";
            $user = getenv("DB_USER") ?: "root";
            $password = getenv("DB_PASSWORD") ?: "";

            $this->conn = new PDO(
                "mysql:host={$host};dbname={$dbname};charset=utf8mb4",
                $user,
                $password
            );

            $this->conn->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION
            );

            return $this->conn;

        } catch (PDOException $e) {
            die("Database connection error: " . $e->getMessage());
        }
    }
}