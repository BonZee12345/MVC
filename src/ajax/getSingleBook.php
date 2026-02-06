<?php

// Set error handling
error_reporting(E_ALL);
ini_set('display_errors', 0);
ini_set('log_errors', 1);
ini_set('error_log', __DIR__ . '/ajax-error.log');
// header('Content-Type: application/json; charset-utf-8); //Always JSON



// Set needed variables, this php file is separate from the other php files
define("DS", DIRECTORY_SEPARATOR); 
define("ROOT", dirname(__FILE__) . DS . '..' . DS); // '..' for making the root a file higher than just dirname(__file__)



// Load in needed files
require_once ROOT . "classes" . DS . "Config.php";
require_once ROOT . "classes" . DS . "DatabasePDO.php";
require_once ROOT . "dao" . DS . 'BooksDAO.php';
$BooksDAO = new BooksDAO(); //class BooksDAO becomes an object to be able to use its functions



// Optional - only allow POST
if($_SERVER['REQUEST_METHOD'] !== 'POST'){
    http_response_code(405);
    echo json_encode([
        'error' => 'Method not allowed'
    ]);
    exit;
}



// read raw JSON
$raw = file_get_contents('php://input'); //$_POST
$data = json_decode($raw, true); //decodes json data to usable php| ... 

//You can check data here as well.
// if(!is_int($data['age']) || $data['age'] <= 0){
//     http_response_code(422);
//     echo json_encode([
//         'error' => 'Invalid age:'.$data['age']
//     ]);
//     exit;
// }



// Get book from db (preferable by using the DAO)
$book = $BooksDAO->getBookById($data['bookId']); //$book is to collect the data



//Succes response
http_response_code(200);
echo json_encode([
    'succes' => true, //succes: true
    'book' => $book // book: (information in $book)
]);




