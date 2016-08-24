<?php
	session_start();
	
	if ( !empty($_SESSION['access_level']) ) { 
	 	if( $_SESSION['access_level'] != "student" ){	   			
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
	<title>Student page</title>
</head>
<body>
<h1>This is student page</h1>
<ul>
<a href="./viewcompany.php" > <li> View Company list</li></a>
<a href=" "> <li> preferences</li></a>
<a href=" "><li> upload cv</li></a>
<a href=" "><li> pogress </li></a>
<a href=" "><li> message </li></a>
</ul>

<a href="logout.php"><input type="button" value="logout"></a>

</body>
</html>
