<?php

$firstname = $_POST['firstname'];
$lastname = $_POST['lastname'];

// TODO: validation des données récupérées

require_once (__DIR__.'/../_connec.php');

$pdo = new \PDO(DSN, USER, PASS);

$query = "INSERT INTO friend (firstName, lastname) VALUES(:firstName, :lastname);";

$statement = $pdo->prepare($query);
$statement->bindValue(':firstName', $firstname, PDO::PARAM_STR);
$statement->bindValue(':lastname', $lastname, PDO::PARAM_STR);

$row = $statement->execute();

header('Location: /index.php');