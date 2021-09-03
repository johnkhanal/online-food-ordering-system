<?php

$request = $_SERVER['REQUEST_URI'];
switch ($request) {
    
    case '/login' :
        header('Location: ./login.php');
        break;
        
    case '/' :
        header('Location: ./public_html/');
        break;
    
    case '/logout' :
        require __DIR__ . '/logout.php';
        break;
    
    default:
        header('Location: ./public_html/');
        break;
}
