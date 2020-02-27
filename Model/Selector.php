<?php


class Selector extends Conn
{
    public function select() : array {
        $pdo = $this->openConnection();
        $sql = "SELECT * FROM student ORDER BY id DESC LIMIT 0,1";
        $stmt = $pdo->prepare($sql);
        $stmt->execute();
        return $stmt->fetchAll(PDO::FETCH_ASSOC);
    }
}