<?php
require_once ROOT . "controllers" . DS . "AppController.php";
require_once ROOT . "dao" . DS . 'BooksDAO.php';
require_once ROOT . "includes" . DS . 'functions.php';

class BooksController extends AppController{
    private BooksDAO $BooksDAO;

    public function __construct(){
        parent::__construct();
        $this->BooksDAO = new BooksDAO();
    }
                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                      
    public function index(){ // boeken/home-page
        echo "Books index action called.";
        $books = $this->BooksDAO->getBooks();
        $this->set("books", $books); //eerst geven we de naam van de var in de view weer dan de data.
    }

    public function view(){
        echo "Books view action called.";
    }    

    public function edit(){
        echo "Books edit action called.";
        trace($_GET["book_id"]);
        $book = $this->BooksDAO->getBookById($_GET["book_id"]);
        $this->set("book", $book);

        if(!empty($_POST)){
            trace($_POST);

            $this->BooksDAO->editBookById($_POST);
        }

        
    }

    public function add(){
        echo "Books add action called.";

        if (!empty($_POST)) {
            trace($_POST);
        }

        $this->BooksDAO->addBook($_POST);
    }

}

