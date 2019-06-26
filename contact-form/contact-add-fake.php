<?php
require_once '../vendor/autoload.php';

// check request method POST
if ($_SERVER['REQUEST_METHOD'] !== 'POST') {
  header('location: ..');
  die();
  // exit('Invalid Request');
}


$faker = Faker\Factory::create();
$faker->addProvider(new Faker\Provider\en_ZA\PhoneNumber($faker));

$name = $faker->name;
$email = $faker->email;
$messageBody = $faker->text;

$phone = $faker->mobileNumber; 
// var_dump(compact([$name,$email,$messageBody,$phone]));
// die();

$dsn = "sqlite:db.sqlite";
$pdo = new \PDO($dsn, null, null);
$pdo->setAttribute(\PDO::ATTR_ERRMODE, \PDO::ERRMODE_EXCEPTION); 

$stmt = $pdo->prepare("INSERT INTO messages('user_name','user_email','user_phone','message_body','created_at') values(?, ?, ?, ?, datetime('now'))");
$stmt->execute([$name, $email, $phone, $messageBody]);


// return to site root
header('location: ..');


// CREATE TABLE `messages` (
// 	`id`	integer,
// 	`user_name`	text NOT NULL,
// 	`user_email`	text,
// 	`user_phone`	text,
// 	`message_body`	text NOT NULL,
// 	`archived`	boolean DEFAULT 0,
// 	`created_at`	datetime NOT NULL,
// 	PRIMARY KEY(`id`)
// );