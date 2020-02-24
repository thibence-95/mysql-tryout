<?php

function openConnection() {
    // Try to figure out what these should be for you
    $dbhost    = "DB_HOST";
    $dbuser    = "DB_USER";
    $dbpass    = "DB_USER_PASSWORD";
    $db        = "DB_NAME";

    // Try to understand what happens here
    $pdo = new PDO('mysql:host='. $dbhost .'mysql-tryout.local'.';beCode='. $db, $dbuser, $dbpass);

 // Why do we do this here?
 return $pdo;
}
