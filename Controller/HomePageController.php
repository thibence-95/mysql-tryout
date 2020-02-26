<?php


class HomePageController
{
    public function renderBoi()
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
    private function insert()
    {
        $firstName = $_POST['firstName'];
        $lastName = $_POST['lastName'];
        $userName = $_POST['userName'];
        $linkedIn = $_POST['linkedIn'];
        $github = $_POST['email'];
        $email = $_POST['github'];
        $prefLanguage = $_POST['preferred_language'];
        $avatar = $_POST['avatar'];
        $video = $_POST['video'];
        $quote = $_POST['quote'];
        $quoteAuthor = $_POST['quoteAuthor'];

        // checking empty fields
        if(empty($firstName) || empty($lastName) || empty($email)) {

            if(empty($firstName)) {
                echo "<font color='red'>Name field is empty.</font><br/>";
            }

            if(empty($lastName)) {
                echo "<font color='red'>Age field is empty.</font><br/>";
            }

            if(empty($email)) {
                echo "<font color='red'>Email field is empty.</font><br/>";
            }

            //link to the previous page
            echo "<br/><a href='javascript:self.history.back();'>Go Back</a>";
        } else {
            // if all the fields are filled (not empty)
            $connect = new Conn();
            $pdo = $connect->openConnection();
            //insert data to database
            $sql = "INSERT INTO table_student(first_name, last_name, username, linkedin, github, email, preferred_language, avatar, video, quote, quote_author) VALUES(:firstname, :lastname, :username, :linkedin, :github, :email, :preflanguage, :avatar, :video, :quote, :quoteauthor)";
            $query = $pdo->prepare($sql);

            $query->bindValue(':firstname', $firstName, PDO::PARAM_STR);
            $query->bindValue(':lastname', $lastName, PDO::PARAM_STR);
            $query->bindValue(':username', $userName, PDO::PARAM_STR);
            $query->bindValue(':linkedin', $linkedIn, PDO::PARAM_STR);
            $query->bindValue(':github', $github, PDO::PARAM_STR);
            $query->bindValue(':email', $email, PDO::PARAM_STR);
            $query->bindValue(':preflanguage', $prefLanguage, PDO::PARAM_STR);
            $query->bindValue(':avatar', $avatar, PDO::PARAM_STR);
            $query->bindValue(':video', $video, PDO::PARAM_STR);
            $query->bindValue(':quote', $quote, PDO::PARAM_STR);
            $query->bindValue(':quoteauthor', $quoteAuthor, PDO::PARAM_STR);

            $query->execute();

            // Alternative to above bindparam and execute
            // $query->execute(array(':name' => $name, ':email' => $email, ':age' => $age));

            //display success message
            echo "<font color='green'>Data added successfully.";
        }
    }
}