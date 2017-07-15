<?php 
require_once"../classes/ini.php";

//PRODUCT OBJECT INSTANCIATED
$product= new Product();


//$file= $_FILES['product_image'];

$product->name= $db->escape_string($_POST['name']);

$product->quantity= $db->escape_string($_POST['quantity']);

$product->price= $db->escape_string($_POST['price']);



$product->create();

$db->redirect('product_insert.php');






?>