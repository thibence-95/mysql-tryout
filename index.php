<?php
declare(strict_types = 1);

ini_set('display_errors', '1');
ini_set('display_startup_errors', '1');
error_reporting(E_ALL);

include 'Model/Post.php';
include 'Controller/HomePageController.php';
//include 'Model/Statement.php';
include 'Model/connection.php';
include 'View/homepage.php';



$conn = new Conn;
$conn->postInto();
//var_dump($conn);





