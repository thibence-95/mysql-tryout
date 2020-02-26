<?php

class Conn
{
    private $PDO;

    public function openConnection()
    {
        // Try to figure out what these should be for you // identifying the programmer?
        $dbhost = "localhost";
        $dbuser = "thibautsalence";
        $dbpass = "nikesbeasy";
        $db = "beCode";

        try {
            $conn = $this->PDO;
            $conn = new PDO('mysql:host='.$dbhost.';dbname='.$db, $dbuser, $dbpass);

            //setting err mode to exception
            $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
            $sql = "INSERT INTO beCode.student (first_name, last_name, username, linkedin, email, github, 
                    preferred_language, avatar, video, quote, quote_author, created_at) 
                    VALUES (:John, :Doe, :JohnD, :linkedin, :john@example.com, :github, :prefLanguage, :avatar, :video, :quote, :quoteAuthor)";
            $conn->prepare($sql)->execute();
            echo "Nice, You're in!";
        }
        catch (PDOException $e){
            echo $sql. "<br>" . $e->getMessage();
        }
        $conn = null;
    }
}



