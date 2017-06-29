<?php 
require_once"../classes/init.php";

$user= new User();
$product= new Product();

$product->username= $_POST['username'];
$product->email= $_POST['email'];
$product->password= $_POST['password'];

// $user->username= $_POST['username'];
// $user->email= $_POST['email'];
// $user->password= $_POST['password'];

// $user->create();

// $db->redirect('../success/success.php');

$product->create();

$db->redirect('../success/success.php');





?>