

<?php 
  
   
  class Database {
       
      private $localhost = "localhost";
      private $dbname = "devBlog";
      private $user = "root";
      private $password = "";
      private $conn ;

      public function Connection(){
        $this->conn = null;
        
        try{
           $this->conn = new PDO("mysql:host={$this->localhost};dbname={$this->dbname};charset=utf8" , $this->user, $this->password);
           $this->conn->setAttribute(PDO::ATTR_ERRMODE , PDO::ERRMODE_EXCEPTION);
        }
      catch (PDOException $e){
          die ("err:" . $e->getMessage());
      }

      return $this->conn;
       
  }

  };





?>