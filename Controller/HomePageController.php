<?php


class HomePageController
{
    public function renderBoi($post)
    {
        $pdo = new Conn();
        if ($pdo->openConnection()) {
            echo 'great success';
        }
        else {
            echo 'no';
        }

        if ($_SERVER['REQUEST_METHOD'] == 'POST') {

            $statement = new Statement();
            $guestInf = new Post($post['first-name'], $post['last-name']. $post['username'], $post['liknedin'],
                $post['github'], $post['email'], $post['pref-lang'], $post['avatar'],
                $post['video'], $post['quote'], $post['quote-auth'],);

            $sqlIns = $statement->$guestInf;

            /*$firstName = $_POST['first-name'];
            $lastName = $_POST['last-name'];
            $email = $_POST['email'];
            $lang = $_POST['pref-lang'];*/

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

        //$stat = $pdo->prepare("SELECT * FROM student")->execute($stat);
        //var_dump($stat);
    }
}