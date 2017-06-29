<?php 
require_once"../classes/init.php";

$user= new User();

$user->username= $_POST['username'];
$user->email= $_POST['email'];
$user->password= $_POST['password'];

$user->create();

$db->redirect('../success/success.php');





?>