
<?php require_once (__DIR__.'/../src/pdo.php') ?>


<!DOCTYPE html>

<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Amis</title>
</head>
<body>
    <h1>My friends: </h1>
    <ul>
        <?php foreach($friends as $friend): ?>
        <li>
            <h3><?= $friend['firstname'] ?></h3>
            <h3><?= $friend['lastname'] ?></3>
        </li>
        <?php endforeach; ?>
    </ul>
    <form method="POST" action="/add-friends.php">
        <label for="firstname">
            Firstname: 
            <input id="firstname" type="text" name="firstname" required = "required"/>
        </label>
        <br><br>
        <label for="lastname">
            Lastname:
            <input id="lastname" type="text" name="lastname" required = "required"/>
        </label>
        <br><br>
        <input type="submit" value="Add a friend" />
    </form>
</body>
</html>