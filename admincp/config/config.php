<?php 

	$mysqli = new mysqli("localhost","root","","web_dongho","3306");

	// Check connection
	if ($mysqli->connect_errno) {
	  echo "Kết nối MYSQLi lỗi" . $mysqli->connect_error;
	  exit();
	}

?>