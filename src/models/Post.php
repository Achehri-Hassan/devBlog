
<?php 
   
  require_once "../src/config/db.php";

  class Articles{
       
       private $conn;

       public function __construct()
       {
         $db = new Database();
         $this->conn = $db->Connection();
       }


       public function ReadAll(){
           $sql = "SELECT * FROM articles ";
           $stmt=$this->conn->query($sql);
           return $stmt->fetchAll(PDO::FETCH_ASSOC);
       }

      
       public function ReadById($id_article){
           $sql = "SELECT * FROM articles WHERE id_article = :id_article ";
           $stmt = $this->conn->prepare($sql);
           $stmt->execute([
             "id_article"=>$id_article
           ]);

           return $stmt->fetch(PDO::FETCH_ASSOC);

       }




  }






?>