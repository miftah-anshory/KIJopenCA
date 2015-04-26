<?php
	$servername = "localhost";
	$database = "openca";
	$username = "root";
	$password = "";

	try
	{
	    $conn = new PDO("mysql:host=$servername;dbname=$database", $username, $password);
	    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
	    echo "Connected successfully"; 
	}
	
	catch(PDOException $exception)
	{
	    echo "Connection failed: " . $exception->getMessage();
	}
?>