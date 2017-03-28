<?php
function get_db_connection($db){
	if ($db == "main"){
		$db_host = "";
		$db_user = "";
		$db_pass = "";
		$db_base = "";
	} else {
		$db_host = null;
		$db_user = null;
		$db_pass = null;
		$db_base = null;
	}
	$db_conn = mysqli_connect($db_host,$db_user,$db_pass,$db_base);
	return $db_conn;
}
?>