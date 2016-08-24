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
   		
	
?>


<!DOCTYPE html>
<html>
<head>
	<title>Admin page</title>
</head>
<body>
<h1>This is Admin page</h1>
<ul>
<a href="./viewcompany.php" > <li> View current Company</li></a>
<a href="./viewusers.php" > <li> View current users</li></a>
<a href="./addcompany.php"<?php $choise="Add"?> > <li> Add new Company</li></a>
<a href=" "> <li> Assign students to company</li></a>
<a href=" "><li> Assign students to advicers</li></a>
<a href=" "><li> Student progress </li></a>
<a href=" "><li> message </li></a>
</ul>

<a href="logout.php"><input type="button" value="logout"></a>

</body>
</html>
