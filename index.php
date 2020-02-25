<?php
declare(strict_types = 1);

ini_set('display_errors', '1');
ini_set('display_startup_errors', '1');
error_reporting(E_ALL);

include 'View/insert.php';
include 'Model/connection.php';

var_dump(openConnection());
