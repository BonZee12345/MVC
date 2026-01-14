<?php
require_once ROOT . "controllers" . DS . "AppController.php";
require_once ROOT . "dao" . DS . 'MoviesDAO.php';
require_once ROOT . "includes" . DS . 'functions.php';

class MoviesController extends AppController{
    private MoviesDAO $MoviesDAO;

    public function __construct(){
        parent:: __construct();
        $this->MoviesDAO = new MoviesDAO();
    }
                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                      
    public function index(){ // boeken/home-page
        echo "movies index action called.";
        $movies = $this->MoviesDAO->getMovies();
        $this->set("movies", $movies); //eerst geven we de naam van de var in de view weer dan de data.
    }

    public function view(){
        echo "movies view action called.";
    }    

    public function reserve(){
        echo "movies edit action called.";
        trace($_GET["movie_id"]);
        $movie = $this->MoviesDAO->getMovieById($_GET["movie_id"]);
        $this->set("movie", $movie);

        if(!empty($_POST)){
            trace($_POST);

            $this->MoviesDAO->editMovieById($_POST);
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

