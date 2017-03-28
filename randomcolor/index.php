<?php
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
$status = file_get_contents("status.txt");
$message = file_get_contents("message.txt");
if ($status == 1){
	$color = "#". randomString(6);
} else {
	$color = "#000000";
}
?>
<html>
	<head>
		<title>Random Color</title>
		<script src='https://code.jquery.com/jquery-2.2.3.min.js'></script>
		<script type="text/javascript">
			setInterval("rf_function('body');",1000);
			function rf_function(element){
				$('#' + element).load(location.href + ' #' + element);
			}
		</script>
	</head>
	<body style='margin: 0;'>
		<div id='body'>
			<div style='background-color:<?php echo $color;?>; width: 100%; height: 100%;'>
				<center>
					<?php
					if ($status == 1){
						echo "
						<div style='font-family: Tahoma; font-size: 54px; color: white; padding-top: 23%;'>". $message ."</div>
						<div style='font-family: Tahoma; font-size: 15px; color: white; padding-top: 30px;'>Copyright &copy; <a href='http://d0ublek1ll.com' style='color: white; text-decoration: none;'>Mick de Jong</a> - All rights reserved.</div>";
					}
					?>
				</center>
			</div>
		</div>
	</body>
</html>