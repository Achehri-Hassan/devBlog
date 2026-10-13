<?php

// Assumes this file is located at src/models/Comment.php.
require_once __DIR__ . "/../config/db.php";

class Comments
{
    private PDO $conn;

    public function __construct()
    {
        $db = new Database();
        $this->conn = $db->Connection();
    }

    public function CreatComments(string $user_name, string $content, int $article_id, ?string $image = null): bool
    {
        $sql = "INSERT INTO comments (user_name, content, article_id, created_at, image)
                VALUES (:user_name, :content, :article_id, NOW(), :image)";

        $stmt = $this->conn->prepare($sql);

        return $stmt->execute([
            ':user_name' => $user_name,
            ':content' => $content,
            ':article_id' => $article_id,
            ':image' => $image,
        ]);
    }

    public function ReadByArticleId(int $article_id): array
    {
        $sql = "SELECT user_name, content, article_id, created_at, image
                FROM comments
                WHERE article_id = :article_id
                ORDER BY created_at DESC";

        $stmt = $this->conn->prepare($sql);
        $stmt->execute([':article_id' => $article_id]);

        return $stmt->fetchAll(PDO::FETCH_ASSOC);
    }
}
