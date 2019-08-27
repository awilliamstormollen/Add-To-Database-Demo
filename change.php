<html>
<head>
<?php
	$personID = $_GET['personID'];

        $mysql_access = mysql_connect('localhost','n00678108', 'password');

        if(!$mysql_access)
        {
                die('Could not connect: ' . mysql_error());
        }

        mysql_select_db('n00678108');

	$query = "SELECT * FROM student WHERE personID = " . $personID;

	$result = mysql_query($query, $mysql_access);

        $row = mysql_fetch_row($result);
        
        $personID = $row[0];
        $email = $row[1];
        $lastName = $row[2];
        $firstName = $row[3];
        $address = $row[4];
        $city = $row[5];
        $ficoScore = $row[6];

	mysql_close($mysql_access);
?>
</head>
<body>
<form action='change_p.php' method='get'>
<table>
	<tr>
		<td>First Name:</td><td><input type='text' name='firstName' value='<?php echo $firstName; ?>'></td>
	</tr>
        <tr>
                <td>Last Name:</td><td><input type='text' name='lastName' value='<?php echo $lastName; ?>'></td>
        </tr>
        <tr>
                <td>Fmail:</td><td><input type='text' name='email' value='<?php echo $email; ?>'></td>
        </tr>
        <tr>
                <td>Address:</td><td><input type='text' name='address' value='<?php echo $address; ?>'></td>
        </tr>
        <tr>
                <td>City:</td><td><input type='text' name='city' value='<?php echo $city; ?>'></td>
        </tr>
        <tr>
                <td>FICO Score:</td><td><input type='text' name='ficoScore' value='<?php echo $ficoScore; ?>'></td>
        </tr>
	<tr>
		<td colpsan='2'>
			<input type='Submit' value='Change'>
		</td>
	</tr>
</table>
<input type='hidden' name='personID' value='<?php echo $personID; ?>'>
</form>
</form>
</body>
</html>
