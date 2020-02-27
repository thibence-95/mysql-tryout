<?php


class HomePageController
{
    public function insert()
    {
        $insert = new Conn;

        if ($_SERVER['REQUEST_METHOD'] == 'POST') {
            $guestInf = new Post(
                $_POST['first-name'], $_POST['last-name'], $_POST['username'], $_POST['linkedin'],
                $_POST['github'], $_POST['email'], $_POST['pref-lang'], $_POST['avatar'],
                $_POST['video'], $_POST['quote'], $_POST['quoteAuth']
            );
            return $guestInf;
        }
    }
}