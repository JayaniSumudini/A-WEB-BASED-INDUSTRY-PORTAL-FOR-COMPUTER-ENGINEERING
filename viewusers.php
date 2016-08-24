<?php
	$jasondata = file_get_contents("data.jason");
	$jason = json_decode($jasondata , true);
	session_start();

	
	if ( !empty($_SESSION['access_level'])) { 

		$students = "<h4>students</h4><ul>";
		$admin = "<h4> Admin Panel </h4><ul>";
		$company  = "<h4> Cpmpany list </h4><ul>";
		$staff = "<h4> Staff </h4><ul>";

		foreach ($jason['users'] as $value) {
			if($value['access_level'] ==="admin" )
	   			$admin .= "<li>".$value['name'] ."</li>";
	   		if($value['access_level'] ==="student" )
	   			$students .= "<li>".$value['name'] ."</li>";
	   		if($value['access_level'] ==="staff" )
	   			$staff .= "<li>".$value['name'] ."</li>";
	   		if($value['access_level'] ==="company" )
	   			$company .= "<li>".$value['name'] ."</li>";	 	  
		}

		$students .= "</ul>";
		$admin .= "</ul>";
		$company  .= "</ul>";
		$staff .= "</ul>";

		$output = "<h1>current users</h1><br>" .$admin ."<br>" .$staff. "<br>" .$students. "<br>".$company."<br>" ;
		echo "$output";
			 		
	}	
	else{
	
	    header("Location: ./index.php");
	    die();
	}
?>