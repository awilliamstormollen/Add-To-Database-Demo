<?php
	$firstName = $_GET['firstName'];
        $lastName = $_GET['lastName'];
        $email = $_GET['email'];
        $address = $_GET['address'];
        $city = $_GET['city'];
        $ficoScore = $_GET['ficoScore'];
	
	$mysql_access = mysql_connect('localhost','n00678108', 'summer2018678108');

	if(!$mysql_access)
	{
		die('Could not connect: ' . mysql_error());
	}

	mysql_select_db('n00678108');

	$query = "INSERT INTO student (personFirstName, personLastName, personEmail, ";
	$query = $query . "personAddress, personCity, personFicoScore) VALUES ";
	$query = $query . "('$firstName', '$lastName', '$email', '$address', '$city', $ficoScore)";

	$result = mysql_query($query, $mysql_access);

	mysql_close($mysql_access);

	header('Location: index.php');

?>
