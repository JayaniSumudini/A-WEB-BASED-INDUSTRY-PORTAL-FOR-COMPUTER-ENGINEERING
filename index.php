<?php
	$jasondata = file_get_contents("data.jason");
	$jason = json_decode($jasondata , true);
	session_start();

	
	if ( !empty($_REQUEST['username']) && !empty($_REQUEST['password']) ) { 
		foreach ($jason['users'] as $value) {
			if( $_REQUEST['username'] === $value['name'] && $_REQUEST['password'] === $value['password'] ){
	   			$url = $value['access_level'] .".php" ;
	   			echo  $url;
	   			$_SESSION['access_level'] =  $value['access_level'];
	   			//echo  $_SESSION['access_level'];
	   		    header("Location: ./$url");
				die();
			}
		}
		echo "Your username or password invalid";	 		
	}	
?>

<!DOCTYPE html>
<html>
	<head>
		<title>Login Page</title>
	</head>

	<body>
		<form  method="post"  >

			Name: <input type="text" placeholder="Enter Your name" name="username" value=""><br/>
			Password: <input type="password" placeholder="Enter Password " name="password" value=""><br/>
			<input type="submit" name="submit">
			
		</form>		
	</body>
</html>