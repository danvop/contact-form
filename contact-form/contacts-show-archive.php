<?php
require_once '../vendor/autoload.php';

//db connect
$dsn = "sqlite:db.sqlite";
$pdo = new \PDO($dsn);
$pdo->setAttribute(\PDO::ATTR_ERRMODE, \PDO::ERRMODE_EXCEPTION); 

//fetch data

$stmt = $pdo->query("SELECT id, user_name, user_email, user_phone, message_body, created_at FROM messages WHERE archived = 1 ORDER BY created_at DESC");
// $stmt->execute();

$contacts = $stmt->fetchAll(\PDO::FETCH_ASSOC);

// make nav Header
$navHeader = 'Archive';

// mail subject
$mail_subject = 'Mail from Our Site';

// return view
require 'views/contacts.php';

