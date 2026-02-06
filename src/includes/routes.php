<?php
//We hebben controllers voor boeken, klanten, reservaties, enz..
//Elke controller heeft meerdere acties
//Elke controller is meestal gefocust op een specifiek model

$routes = [
    "now"           => array("controller" => "Now",         "action" => "index"),

    "books"         => array("controller" => "Books",       "action" => "index"),
    "book"          => array("controller" => "Books",       "action" => "view"),
    "add-book"      => array("controller" => "Books",       "action" => "add"),
    "edit-book"     => array("controller" => "Books",       "action" => "edit"),
    "delete-book"   => array("controller" => "Books",       "action" => "delete"),

    "wishlist"      => array("controller" => "Wishlist",    "action" => "index"),
    "wishlist-add"  => array("controller" => "Wishlist",    "action" => "add"),
    

    "movies"        =>array("controller" => "Movies",       "action" => "index"),
    "movie"         =>array("controller" => "Movies",       "action" => "view"),
    "reserve-film"  =>array("controller" => "Movies",       "action" => "reserve")
];