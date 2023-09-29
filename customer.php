<?php
require_once 'vendor/autoload.php';
use Faker\Factory as Faker;
$username = 'root';
$password = "";
$host = "localhost";
$db = "learndb";
$connect = mysqli_connect($host, $username, $password, $db);
if($connect){
    $faker = Faker::create();
    for($i = 0; $i <= 10; $i++){
        $customer_id = $faker->id();
        $customer_name = $faker->name;
        $customer_place = $faker->place();
        $phone = $faker->phone();
        $email = $faker->email()->unique();
    }
    $query = "INSERT INTO customer (customer_name, customer_place, phone, email) VALUES ($customer_id,'$customer_name', '$customer_place', '$phone',$email)";
    mysqli_query($connect, $query);
}
?>
