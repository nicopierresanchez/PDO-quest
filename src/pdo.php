<?php


require_once (__DIR__.'/../_connec.php');

$pdo = new \PDO(DSN, USER, PASS);


$statement = $pdo->query('SELECT * FROM friend ORDER By id');
$friends = $statement->fetchAll(PDO::FETCH_ASSOC);

