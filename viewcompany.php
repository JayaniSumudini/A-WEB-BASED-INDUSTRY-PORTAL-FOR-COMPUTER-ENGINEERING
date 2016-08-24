<?php
	session_start();
	
	if ( empty($_SESSION['access_level']) ) { 
		header("Location: ./index.php");
		echo "Please login first";
		die();	 	
	}
	

	else{ 

		$fp = fopen("./companylist.txt", "r");
		$output = "<h1>Company list</h1><ul>";
		$thedata = file("./companylist.txt");
		foreach ($thedata as $value) {
			$output .= "<li>". $value."</li>";
		}
		fclose($fp);
		$output .= "</ul>";
		echo $output;		
		//echo "Company is added";
		// echo $_REQUEST['choise'];	 		
	}
   		
	
?>



