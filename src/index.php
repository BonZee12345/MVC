<?php

setlocale(LC_TIME, "nl_BE");
define("DS", DIRECTORY_SEPARATOR); 
define("ROOT", dirname(__FILE__) . DS);
//session start
// if(isset($_GET["debug"]) && $_GET["debug"]){
ini_set("display_errors",1);
error_reporting((E_ALL));



//load essential files
require_once ROOT . "include" . DS . "functions.php";
require_once ROOT . "classes" . DS . "Config.php";
require_once ROOT . "classes" . DS . "DatabasePDO.php";
require_once ROOT . "include" . DS . "routes.php";




// Feed the routing
$page = "books";
if(isset($_GET["page"])){
    $page = $_GET["page"];
}


if(isset($routes[$page])){
    $route = $routes[$page];
    $controllerName = $route["controller"] . "Controller"; //BooksController (default)

    require_once ROOT . "controllers" . DS . $controllerName . ".php";
    $controllerObj = new $controllerName(); //maakt obj van var
    $controllerObj->route = $route; //verwijst naar de juiste route
    $controllerObj->filter(); //nog niet uitgelegd
}else{
    header("HTTP/1.0 404 Not found");
    echo "<h1>404 Page Not Found</h1>";
    echo "The page you are looking for does not exist";
}

$controllerObj->render();//Toont pagina met daarin het object met data.
















?>