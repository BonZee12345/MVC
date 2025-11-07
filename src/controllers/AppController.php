<?php

class AppController{
    public $route = array();

    public function __construct(){

    }

    public function filter(){
        call_user_func(array($this, $this -> route["action"]));
    }
}

?>