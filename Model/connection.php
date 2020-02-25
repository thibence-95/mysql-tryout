<?php

function openConnection() {
    // Try to figure out what these should be for you
    $dbhost    = "localhost";
    $dbuser    = "thibautsalence";
    $dbpass    = "nikesbeasy";
    $db        = "beCode";

    // Try to understand what happens here
    try {
        $pdo = new PDO('mysql:host=' . $dbhost . ':dbname=' . $db, $dbuser, $dbpass);
        $sql = "INSERT INTO beCode.student (first_name, last_name, email, preferred_language, avatar) 
        VALUE beCode.student ('Thibaut', 'Salence', 'salencethibaut95@gmail.com', 'English','')";
        $pdo->exec($sql);
        $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        echo 'is works';
    }
    catch(PDOException $e) {
        echo $e->getMessage();
    }

 // Why do we do this here?
// return $pdo;
}

$firstName = $lastName = $email = $prefLang = $avatar = null;
$firstNameErr = $lastNamErr = $emailErr = $prefLangErr = $avatarErr = null;

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $firstNameErr = $_POST['first-name'];
    $lastName = $_POST['last-name'];
    $email = $_POST['email'];
    $prefLang = $_POST['pref-lang'];

    /*if (empty($_POST['first-name'])) {
        $firstNameErr = "<div class='alert alert-danger'>What did your momma call you?</div>";
    }
    else {
        $firstName = $_POST['first-name'];
        if (!is_string($_POST['first-name'])) {
            echo "<div class='alert alert-danger'>Is that even a name?</div>";
        }
    }*/
}
