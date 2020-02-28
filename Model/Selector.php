<?php


class Selector extends Conn
{
    public function select() : array {
        $pdo = $this->openConnection();
        $sql = "SELECT * FROM student ORDER BY id DESC LIMIT 0,1"; //FOR SHOWING ONLY THE LAST PROFILE MADE
        $stmt = $pdo->prepare($sql);
        $stmt->execute();
        return $stmt->fetchAll(PDO::FETCH_ASSOC);
    }
}