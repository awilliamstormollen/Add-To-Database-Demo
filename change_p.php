<?php
	$personID = $_GET['personID'];
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
	
	$query = "UPDATE student SET personLastName='$lastName', personFirstName='$firstName', ";
	$query = $query . "personEmail='$email', personAddress='$address', personCity='$city', ";
	$query = $query . "personFicoScore=$ficoScore where personID= " . $personID;

	$result = mysql_query($query, $mysql_access);
	
	mysql_close($mysql_access);

	header('Location: index.php');

?>
