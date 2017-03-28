<?php
//Start configuration
$version = "0.0.0.1";
$styleversion = "1";
$maintenance = false;
$allow_login = true;
$allow_registration = false;
//End configuration

//Start effective config code
if ($allow_login){
	ob_start();
	session_start();
}
//End effective config code
?>