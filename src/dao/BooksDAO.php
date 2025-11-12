<?php
require_once ROOT . "classes" . DS . "DatabasePDO.php";
class BooksDAO{
    private $db;

    public function __construct(){
        $this->db = DatabasePDO::getInstance();
    }
}