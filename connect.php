<?php
	//connecting to the database server
    session_start();
    
	$servername = "localhost";
	$username = "root";
	$password  = "";
	$db_name = "oop_php";

    global $connection; 
    $connection = mysqli_connect($servername,$username, $password, $db_name );

	if($connection){

        #echo "conection OK";	
	}
	else
	{
		die(mysqli_error($connection));
	}

 ?>
