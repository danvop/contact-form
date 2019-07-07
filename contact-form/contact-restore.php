<?php

// filter get requests

//db connect
$dsn = "sqlite:db.sqlite";
$pdo = new \PDO($dsn);
$pdo->setAttribute(\PDO::ATTR_ERRMODE, \PDO::ERRMODE_EXCEPTION); 

//

// update messages set archived = 1 where id = 1;

if(!empty($_POST['id'])) {
  $id =  $_POST['id'];
} else {
  exit('try again');
}

$stmt = $pdo->prepare("UPDATE messages SET archived = 0 WHERE id = :id");
$stmt->bindParam(':id', $id);
$stmt->execute();