<?php
require_once '../vendor/autoload.php';

echo Carbon::parse('2019-08-03')->diffForHumans('2019-08-13');
//db connect
$dsn = "sqlite:db.sqlite";
$pdo = new \PDO($dsn, null, null);
$pdo->setAttribute(\PDO::ATTR_ERRMODE, \PDO::ERRMODE_EXCEPTION); 

//fetch data

<<<<<<< HEAD
$stmt = $pdo->query("SELECT id, user_name, user_email, user_phone, message_body, created_at FROM messages WHERE (archived = 0) ORDER BY created_at DESC");
=======
$stmt = $pdo->query("
  SELECT 
    id, 
    user_name, 
    user_email, 
    user_phone, 
    message_body, 
    created_at 
  FROM messages
  WHERE (archived = 0) 
  ORDER BY created_at DESC
");
>>>>>>> 2649c1e0b81ec0bca93622820f36a839fcd2a38e
$stmt->fetch(\PDO::FETCH_ASSOC);

$mail_subject = 'Mail from Our Site';

// make navbar active
$activeContacts = true;
// return view
require 'views/contacts.php';

