<?php 
ob_start();

define('V6', '12');
define('V8', '18');
define('V10', '24');

//SUPER CLASS ALWAYS GOES BEFORE HE'S CHILDREN(product.php)
require_once("object.php");
require_once("product.php");
require_once("database.php");
require_once("user.php");
require_once("session.php");
require_once("photo.php");
require_once"oop_class.php";


?>