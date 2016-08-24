<?php
	session_start();
	
	if ( !empty($_SESSION['access_level']) ) { 
	 	if( $_SESSION['access_level'] != "staff" ){	   			
	   		header("Location: ./index.php");
		    die();
		}
	}
	else{

		header("Location: ./index.php");
		echo "Please login first";
		die();					
	}
   		
	
?>


<!DOCTYPE html>
<html>
<head>
	<title>Staff page</title>
</head>
<body>
<h1>This is staff page</h1>

<a href="./viewcompany.php" >  View Company list</a><br/>
<p>student name1 <input type="button" value="view"></p>
<p>student name2 <input type="button" value="view"></p>
<p>student name3 <input type="button" value="view"></p>
<p>student name4 <input type="button" value="view"></p>

<a href="logout.php"><input type="button" value="logout"></a>


</body>
</html>
