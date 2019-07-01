<?php
require_once '../vendor/autoload.php';

//db connect
$dsn = "sqlite:db.sqlite";
$pdo = new \PDO($dsn, null, null);
$pdo->setAttribute(\PDO::ATTR_ERRMODE, \PDO::ERRMODE_EXCEPTION); 

//fetch data

$stmt = $pdo->query("SELECT id, user_name, user_email, user_phone, message_body, created_at FROM messages WHERE archived = 0 ORDER BY created_at DESC");
$stmt->fetch(\PDO::FETCH_ASSOC);

$mail_subject = 'Mail from Our Site';

foreach ($stmt as $item){
  var_dump($item);
}
die();

// make nav Header
$navHeader = 'Contacts';
// return view
require 'views/contacts.php';

