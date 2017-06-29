<?php 
require_once"../classes/init.php";

$product= new Product();

$product->name= $_POST['name'];
$product->make= $_POST['make'];
$product->model= $_POST['model'];

$product->create();

$db->redirect("../index.php");




?>