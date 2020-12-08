<?php
require_once "../vendor/autoload.php";
use Faker\Factory;

$faker = Factory::create("zh_TW");

var_dump($faker->name("male"));
var_dump($faker->name("female"));
var_dump($faker->personalIdentityNumber);
var_dump($faker->company);
var_dump($faker->realTest(500));
var_dump($faker->phoneNumber);
var_dump($faker->email);
var_dump($faker->url);

?>