<?php 
require_once"../classes/init.php";

$user= new User();

$user->username= $_POST['name'];
$user->password= $_POST['password'];







?>