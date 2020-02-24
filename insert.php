<?php

include 'connection.php';

?>

<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>MySQL Tryout thibaut Salence</title>
</head>

<body>
<header>
    <h1>MySQL PDO database form thing<h1>
</header>

<section>
    <form method="post">
        <label for="first-name">First name:</label>
        <input type="text" name="first-name">

        <label for="last-name">Last name:</label>
        <input type="text" name="last-name">

        <label for="email">E-mail:</label>
        <input type="text" name="email">

        <label for="pref-lang">Preferred language:</label>
        <input type="text" name="pref-lang">

        <label for="first-name">First name:</label>
        <input type="text" name="first-name">
    </form>
</section>

</body>
</html>
