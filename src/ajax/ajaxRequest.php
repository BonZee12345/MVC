<?php
// declare(strict_types = 1);
error_reporting(E_ALL);
ini_set('display_errors', 0);
ini_set('log_errors', 1);
ini_set('error_log', __DIR__ . '/ajax-error.log');
// header('Content-Type: application/json; charset-utf-8); //Always JSON

//optional - only allow POST
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
if(!is_int($data['age']) || $data['age'] <= 0){
    http_response_code(422);
    echo json_encode([
        'error' => 'Invalid age:'.$data['age']
    ]);
    exit;
}

//example: pretend to save to DB
$userId = 123;

//Succes response
http_response_code(200);
echo json_encode([
    'succes' => true,
    'user' => [
        'id' => $userId,
        'username' => $data['username'],
        'age' => $data['age']
    ]
    ]);
