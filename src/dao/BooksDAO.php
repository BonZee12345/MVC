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

    public function getBookById($id){
        try{
            $qry = "SELECT * FROM books WHERE book_id = :book_id";
            $stmt = $this->db->prepare($qry);

            $stmt->bindValue(":book_id", $id);
            // class Statement{ // vb voor hoeje statement moet inbeelden
            //     public $book_id;
            //     public $databaseRequest;

            //     public function execute(){

            //     }

            //     public function fetchAll($showToSort){
            //         return $data
            //     }
            // }

            if($stmt->execute()){
                return $stmt->fetch(PDO::FETCH_ASSOC);
            }

            return array();

        }catch(PDOException $e){ //$e = exception
            echo "Database error: " . $e->getMessage();
            return array(); 
        }
    
    }

    public function editBookById($data){
        try{
            $qry = "UPDATE books
                    SET book_name = :book_name,
                        author = :author,
                        publication_year = :publication_year,
                        book_status = :book_status,
                        book_img = :book_img
                    WHERE book_id = :book_id";

            //Prepare data to be inserted 
            $stmt = $this->db->prepare($qry);

            //Bind values to clean data and to replace the placeholders with real data
            $stmt->bindValue(':book_name',       $data['book_name']);
            $stmt->bindValue(':book_id',       $data['book_id']);
            $stmt->bindValue(':author',          $data['author']);
            $stmt->bindValue(':publication_year', $data['publication_year']);
            $stmt->bindValue(':book_status',     $data['book_status']);
            $stmt->bindValue(':book_img',        $data['book_img']);

            $stmt->execute();

            //return $this->db->lastInsertedId();
            

        }catch(PDOException $e){
            echo "Database error: " . $e->getMessage();
            return array();
        }
    }

    public function addBook($data){
        trace($data);
        $book_name = $_REQUEST["book_name"];
        try{
            $qry = "INSERT INTO books (book_name, author, publication_year, book_status, book_img)
                    VALUES (:book_name, :author, :publication_year, :book_status, :book_img)";

                    

            //Prepare data to be inserted 
            $stmt = $this->db->prepare($qry);

            //Bind values to clean data and to replace the placeholders with real data
            $stmt->bindValue(':book_name',       $data['book_name']);
            $stmt->bindValue(':author',          $data['author']);
            $stmt->bindValue(':publication_year', $data['publication_year']);
            $stmt->bindValue(':book_status',     $data['book_status']);
            $stmt->bindValue(':book_img',        $data['book_img']);

            $stmt->execute();

            //return $this->db->lastInsertedId();
            

        }catch(PDOException $e){
            echo "Database error: " . $e->getMessage();
            return array();
        }
    }

    
}


