<?php
require_once ROOT . "classes" . DS . "DatabasePDO.php";
class BooksDAO{
    private $db;

    public function __construct(){
        $this->db = DatabasePDO::getInstance();
    }

    public function getBooks(){
        try{
            $qry = "SELECT * FROM books";
            $stmt = $this->db->prepare($qry);

            if($stmt->execute()){
                return $stmt->fetchAll(PDO::FETCH_ASSOC);
            }
            return array();

        }catch(PDOException $e){
            echo "Database error: " . $e->getMessage();
            return array(); 
        }
    }

    public function getBooksById(){
    //     try{
    //         $qry = "SELECT * FROM books";
    //         $stmt = $this->db->prepare($qry);

    //     }catch(){

    //     }

    }
}
