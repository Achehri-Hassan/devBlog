<?php

require_once __DIR__ . "/../config/db.php";

class Login_admin
{
    private $conn;

    public function __construct()
    {
        $db = new Database();
        $this->conn = $db->Connection();
    }

    public function login($email)
    {
        $sql = "SELECT * FROM users WHERE email = :email LIMIT 1";

        $stmt = $this->conn->prepare($sql);

        $stmt->execute([
            "email" => $email
        ]);

        return $stmt->fetch(PDO::FETCH_ASSOC);
    }
}