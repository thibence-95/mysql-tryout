<?php

class Conn
{
    public $PDO;

    public function openConnection()
    {
        // Try to figure out what these should be for you // identifying the programmer?
        $dbhost = "localhost";
        $dbuser = "thibautsalence";
        $dbpass = "nikesbeasy";
        $db = "beCode";

        // Try to understand what happens here
        $this->PDO = new PDO('mysql:host=' . $dbhost . ';dbname=' . $db, $dbuser, $dbpass);

    }
}



