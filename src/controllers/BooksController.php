<?php
require_once ROOT . "controllers" . DS . "AppController.php";

class BooksController extends AppController{

    public function __construct(){
        parent:: __construct();

    }

    public function index(){
        echo "Books index action called.";

    }
    public function view(){
        echo "Books view action called.";

    }



}

?>