<?php

?>

<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Profile</title>
</head>
<body>
<form action="index.php" method="post">
    <p><strong>id:</strong> <?php echo $user['id']?></p>
    <p><strong>first name:</strong> <?php echo $user['firstName']?></p>
    <p><strong>last name:</strong> <?php echo $user['lastName']?></p>
    <p><strong>user name: </strong><?php echo $user['username']?></p>
    <p><strong>linkedin:</strong> <?php echo $user['linkedin']?></p>
    <p><strong>github:</strong> <?php echo $user['github']?></p>
    <p><strong>email:</strong> <?php echo $user['email']?></p>
    <p><strong>preferred_language: </strong><?php echo $user['preferred_language']?></p>
    <p><strong>video: </strong><?php echo $user['video']?></p>
    <p><strong>quote: </strong><?php echo $user['quote']?></p>
    <p><strong>quote author: </strong><?php echo $user['quote_author']?></p>
    <p><strong>created date:</strong> <?php echo $user['created_at']?></p>
</body>
</html>
