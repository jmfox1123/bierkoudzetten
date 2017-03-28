<?php
$status = file_get_contents("status.txt");
$message = file_get_contents("message.txt");
if (!empty($_POST['togglestatus'])){
	if ($status == 1){
		$newstatus = 0;
	} else {
		$newstatus = 1;
	}
	file_put_contents('status.txt',$newstatus);
}
if(!empty($_POST['togglemessage'])){
	if (!empty($_POST['message'])){
		$message = $_POST['message'];
		file_put_contents('message.txt',$message);
		header('Location: '. $_SERVER['REQUEST_URI']);
	}
}
?>
<center>
	<div style='margin-top: 100px; margin: auto;'>
		<form method='post'>
			<input type='text' name='message' value='<?php echo $message;?>' placeholder='Message ..' style='font-size: 48px; padding: 30px; margin-top: 100px; width: 795px;'><br>
			<input type='submit' value='Update Message' name='togglemessage' style='font-size: 48px; padding: 30px; margin-top: 20px; margin-right: 10px;'>
			<input type='submit' value='Toggle status' name='togglestatus' style='font-size: 48px; padding: 30px; margin-top: 20px;'>
		</form>
	</div>
</center>