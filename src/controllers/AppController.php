<?php

class AppController{
    public $route = array();
    public $viewVars = array();
    public function __construct(){

    }

    public function filter(){
        call_user_func(array($this, $this -> route["action"]));
    }

    public function render(){
        extract($this->viewVars, EXTR_OVERWRITE);

        require_once ROOT . "parts" . DS . "header.php";
        // view inladen
        require_once ROOT . "pages" . DS . strtolower($this->route["controller"]) . DS . $this-> route["action"].".php";
        // Default: src/pages/books/index.php
        require_once ROOT . "parts" . DS . "footer.php";
        
    }


    public function set($variableName, $value){
        $this->viewVars[$variableName] = $value;
        
    }

}

?>