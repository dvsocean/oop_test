<?php 
require_once("../classes/ini.php");

session_start();
session_destroy();

//Need to require the $db Database     class to use

$db->redirect('../index.php');


?>