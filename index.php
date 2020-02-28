<?php
declare(strict_types = 1);

ini_set('display_errors', '1');
ini_set('display_startup_errors', '1');
error_reporting(E_ALL);

include 'Model/Post.php';
include 'Controller/HomePageController.php';
include 'Model/connection.php';
include 'Model/Selector.php';
include 'View/homepage.php';

if ($_SERVER['REQUEST_METHOD'] == "POST") {
    include 'View/table.php';
}



$conn = new Conn;
$conn->postInto();
//var_dump($conn);





