<?php

require_once __DIR__ . "/../config/db.php";

class Articles
{

  private $conn;

  public function __construct()
  {
    $db = new Database();
    $this->conn = $db->Connection();
  }


  public function ReadAll()
  {
    $sql = "SELECT * FROM articles ORDER BY id_article DESC ";
    $stmt = $this->conn->query($sql);
    return $stmt->fetchAll(PDO::FETCH_ASSOC);
  }


  public function ReadById($id_article)
  {
    $sql = "SELECT * FROM articles WHERE id_article = :id_article ";
    $stmt = $this->conn->prepare($sql);
    $stmt->execute([
      "id_article" => $id_article
    ]);

    return $stmt->fetch(PDO::FETCH_ASSOC);
  }

  public function CreateArticle($title, $description, $content, $image, $admin_id, $category)
  {
    $sql = "INSERT INTO articles
                (title, description, content ,image, admin_id, category)
                VALUES
                (:title, :description, :content ,:image, :admin_id, :category)";

    $stmt = $this->conn->prepare($sql);

    return $stmt->execute([
      "title" => $title,
      "description" => $description,
      "content" => $content,
      "image" => $image,
      "admin_id" => $admin_id,
      "category" => $category
    ]);
  }


  public function UpdateArticle($id_article, $title, $description, $content, $image, $category)
  {
    $sql = "UPDATE articles
                SET title = :title, description = :description, content = :content ,image = :image, category = :category
                WHERE id_article = :id_article";

    $stmt = $this->conn->prepare($sql);

    return $stmt->execute([
      "id_article" => $id_article,
      "title" => $title,
      "description" => $description,
      "content" => $content,
      "image" => $image,
      "category" => $category
    ]);
  }


 

  public function DeleteArticle($id_article)
  {
    $sql = "DELETE FROM articles WHERE id_article = :id_article";
    $stmt = $this->conn->prepare($sql);

    return $stmt->execute([
      "id_article" => $id_article
    ]);
  }
}