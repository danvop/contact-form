<?php
require_once '../vendor/autoload.php';

$faker = Faker\Factory::create();

$name = $faker->name;
$email = $faker->email;
$messageBody = $faker->text;

var_dump(compact('name','email','messageBody'));