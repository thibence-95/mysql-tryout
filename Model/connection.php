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

            $post = new HomePageController();
            $assoc = $post->renderBoi();

            //setting err mode to exception
            $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
            $sql = "INSERT INTO beCode.student (firstName, lastName, username, linkedin, email, github, 
                    preferred_language, avatar, video, quote, quote_author) 
                    VALUES (:firstName, :lastName, :username, :linkedin, :github, :email, :prefLang, :avatar, :video, :quote, :quote_author)";
            $conn->prepare($sql)->execute([
                'firstName' => $assoc->getFirstName(),
                'lastName' => $assoc->getLastName(),
                'username' => $assoc->getUserName(),
                'linkedin' => $assoc->getLinkedin(),
                'github' => $assoc->getGithub(),
                'email' => $assoc->getEmail(),
                'prefLang' => $assoc->getLang(),
                'avatar' => $assoc->getAvatar(),
                'video' => $assoc->getVideo(),
                'quote' => $assoc->getQuote(),
                'quote_author' => $assoc->getQuoteAuth()
            ]);
            echo "Nice, You're in!";
        }
        catch (PDOException $e){
            echo $sql. "<br>" . $e->getMessage();
        }
        $conn = null;
    }
}



