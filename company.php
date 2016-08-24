<?php
	session_start();
	
	if ( !empty($_SESSION['access_level']) ) { 
	 	if( $_SESSION['access_level'] != "company" ){	   			
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
	<title>Company page</title>
</head>
<body>
<h1>This is company page</h1>
<ul>
<a href=" " > <li> download cv</li></a>
<a href=" "> <li> message</li></a>
</ul>

<a href="logout.php" ><input type="button" value="logout"></a>

</body>
</html>
