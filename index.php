


<?php

include("conf.php");

	switch ($_GET['p']) 
	{
		case 'register':
			include('registration.php');
			break;
			
		case 'login':
		//	include('logowanie.php');
			break;
			
		default:
			//	include('home.php');
			break;
	}

	
	
	
	

	



?>
