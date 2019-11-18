<?php
	
	session_start();

	// menghancurkan isi SESSION
	unset($_SESSION['nama']);
	unset($_SESSION['user_id']);
	unset($_SESSION['level']);

	header("location: index.php");

?>