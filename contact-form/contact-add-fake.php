<?php
require_once '../vendor/autoload.php';


$faker = Faker\Factory::create();
$faker->addProvider(new Faker\Provider\fr_FR\PhoneNumber($faker));
$name = $faker->name;
$email = $faker->email;
$messageBody = $faker->text;
var_dump($faker->mobileNumber); 

var_dump(compact('name','email','messageBody'));

$dsn = "sqlite:db.sqlite";
$pdo = new \PDO($dsn, null, null);
$pdo->setAttribute(\PDO::ATTR_ERRMODE, \PDO::ERRMODE_EXCEPTION); 
die();
$stmt = $pdo->prepare("INSERT INTO events('created_at') values(datetime('now'))");
$stmt->execute();


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