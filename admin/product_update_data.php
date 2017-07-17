<?php 
	require_once("../classes/ini.php");

$product= new Product();

$product->name= $db->escape_string($_POST['name']);
$product->quantity= $db->escape_string($_POST['quantity']);
$product->price= $db->escape_string($_POST['price']);

$id= $db->escape_string($_POST['id']);

$product->update($id);

$db->redirect("../profile/profile.php");













?>