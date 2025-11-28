<?php
require_once ROOT . "classes" . DS . "DatabasePDO.php";
class MoviesDAO{
    private $db;

    public function __construct(){
        $this->db = DatabasePDO::getInstance();
    }

    public function getMovies(){
        try{
            $qry = "SELECT * FROM movies";
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

    public function getMovieById($id){
        try{
            $qry = "SELECT * FROM Movies WHERE film_id = :film_id";
            $stmt = $this->db->prepare($qry);

            $stmt->bindValue(":film_id", $id);
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

    public function editMovieById($data){
        try{
            $qry = "UPDATE movies
                    SET title = :title,
                        genre = :genre,
                        release_year = :release_year,
                        director = :director,
                        stock_total = :stock_total
                        stock_available = :stock_available
                        created_at = :created_at
                    WHERE movie_id = :movie_id";

            //Prepare data to be inserted 
            $stmt = $this->db->prepare($qry);

            //Bind values to clean data and to replace the placeholders with real data
            
            $stmt->bindValue('movie_id',        $data['movie_id']);
            $stmt->bindValue('title',           $data['title']);
            $stmt->bindValue('genre',           $data['genre']);
            $stmt->bindValue('release_year',    $data['release_year']);
            $stmt->bindValue('director',        $data['director']);
            $stmt->bindValue('stock_total',     $data['stock_total']);
            $stmt->bindValue('created_at',      $data['created_at']);
            $stmt->bindValue('title',           $data['title']);

            $stmt->execute();

            //return $this->db->lastInsertedId();
            

        }catch(PDOException $e){
            echo "Database error: " . $e->getMessage();
            return array();
        }
    }
}

?>
