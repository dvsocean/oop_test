<?php 
ob_start();

define('LOW_GRADE', '2.75');
define('MID_GRADE', '2.85');
define('HI_GRADE', '2.95');
define('HARDWARE', 'AK-47');

//SUPER CLASS ALWAYS GOES BEFORE HE'S CHILDREN(product.php)
require_once("object.php");
require_once("product.php");
require_once("database.php");
require_once("user.php");
require_once("session.php");
require_once("photo.php");
require_once"oop_class.php";


?>