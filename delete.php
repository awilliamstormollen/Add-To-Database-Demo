<?php
	$personID = $_GET['personID'];

        $mysql_access = mysql_connect('localhost','n00678108', 'summer2018678108');

        if(!$mysql_access)
        {
                die('Could not connect: ' . mysql_error());
        }

        mysql_select_db('n00678108');
	
	$query = "DELETE FROM student WHERE personID= " . $personID;

	echo $query;

	$result = mysql_query($query, $mysql_access);
	
	mysql_close($mysql_access);

	header('Location: index.php');

?>

