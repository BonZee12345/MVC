<?php
require_once ROOT . "controllers" . DS . "AppController.php";
require_once ROOT . "dao" . DS . 'BooksDAO.php';
require_once ROOT . "include" . DS . 'functions.php';

class BooksController extends AppController{
    private BooksDAO $BooksDAO;

    public function __construct(){
        parent:: __construct();
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


        // We landen hier dankzij onze url -> ?page=edit-book&book_id=1
        // 1. Maak een nieuwe functie aan in de juiste DAO dat de data van een individueel boek ophaalt (het juiste natuurlijk).
        // 2. Roep deze functie hier op.
        // 3. Sla de data op in het object, danig dat we het kunnen aanspreken in de view.
        // 4. Toon de basic data van het individueel boek in de view.
        // 4b. Zorg ervoor dat je de data kan aanpassen, in de view.
            // Je kan verborgen data in het formulier meesturen
            // <input type= 'hidden' name='book_id' values='x'
        // 4c. 
        
    }

}

