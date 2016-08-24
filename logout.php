<?php
	session_start();
	session_unset();	
	session_destroy();
	if(empty($_SESSION['access_level'])){
		//echo "Successfully logout";

		header("Location: ./index.php");

		die();

	}
	
?>