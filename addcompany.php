<?php
	session_start();
	
	if ( !empty($_SESSION['access_level']) ) { 
	 	if( $_SESSION['access_level'] != "admin" ){	   			
	   		header("Location: ./index.php");
		    die();
		}
	}
	else{

		header("Location: ./index.php");
		echo "Please login first";
		die();					
	}

	if ( !empty($_REQUEST['companyname'])) { 
		$fp = fopen("./companylist.txt", "a");
		fwrite($fp, $_REQUEST['companyname']."\n");
		fclose($fp);		
		echo "Company is added";
		// echo $_REQUEST['choise'];	 		
	}
   		
	
?>


<!DOCTYPE html>
<html>
<head>
	<title>Admin page</title>
</head>
<body>
<h1>This is Add company  page</h1>

<form  method="post"  >
			Company Name: <input type="text" placeholder="Enter company name " name="companyname" ><br/>
			<br/>
			<input type="submit" name="submit"><br/><br/>
			
</form>	

<a href="logout.php"><input type="button" value="logout"></a>

</body>
</html>
