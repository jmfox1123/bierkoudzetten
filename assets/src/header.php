<?php
include ('config.php');
include ('functions.php');
include ('analyticstracking.php');

function randomString($amount) {
	$characters = '0123456789ABCDEF';
	
	$charlen = strlen($characters);
	$charlen--;
	
	$hash = "";
	for ($i = 1; $i <= $amount; $i++) {
		$randompos = rand(0, $charlen);
		$hash .= substr($characters, $randompos, 1);
	}
	return $hash;
}
$status = 1;
$message = file_get_contents("message.txt");
if ($status == 1){
	$color = "#". randomString(6);
} else {
	$color = "#000000";
}
?>
<html>
	<head>
		<!-- META -->
		<title>BierKoudZetten</title>
		<link rel='shortcut icon' href='/assets/img/favicon.ico' type='image/x-icon'/>
		<!-- CSS -->
		<link rel='stylesheet' type='text/css' href='/assets/css/style.css'>
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.5.0/css/font-awesome.min.css">
		<!-- JS -->
		<script src='https://code.jquery.com/jquery-2.2.3.min.js'></script>
		<script type="text/javascript">
			setInterval("rf_function('body');",500);
			function rf_function(element){
				$('#' + element).load(location.href + ' #' + element);
			}
		</script>
	</head>
<body style='margin: 0;'>