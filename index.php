<html>
<head>
<style>
h1 {
    text-align: center;
    color: blue;
}

h2 {
    text-align: center;
}

canvas {
    border: 1px solid black;
}

</style>


<link rel="stylesheet" href="../mystyle.css" type="text/css"/>


<title>Add data to Database</title>
<link rel="stylesheet" href="mystyle.css" type="text/css"/>
<meta http-equiv="Content-Type" content="text/html;charset=utf-8" />
<h1>Add data to Database</h1>
<h2>Alexander Williams</h2>

<script>
	function deleteRecord()
	{
		document.myForm.action='delete.php';
		document.myForm.submit();
	}
        function changeRecord()
        {
                document.myForm.action='change.php';
                document.myForm.submit();
        }
</script>
<?php

	error_reporting(1);

        $mysql_access = mysql_connect('localhost','n00678108', 'summer2018678108');

        if(!$mysql_access)
        {
                die('Could not connect: ' . mysql_error());
        }

        mysql_select_db('n00678108');

	$query = "SELECT * FROM student";

	$result = mysql_query($query, $mysql_access);
?>
</head>
<body>
<form action='add.php' method='get'>
<table>
	<tr>
		<td>First Name:</td><td><input type='text' name='firstName'></td>
	</tr>
        <tr>
                <td>Last Name:</td><td><input type='text' name='lastName'></td>
        </tr>
        <tr>
                <td>Email:</td><td><input type='text' name='email'></td>
        </tr>
        <tr>
                <td>Address:</td><td><input type='text' name='address'></td>
        </tr>
        <tr>
                <td>City:</td><td><input type='text' name='city'></td>
        </tr>
        <tr>
                <td>FICO Score:</td><td><input type='text' name='ficoScore'></td>
        </tr>
	<tr>
		<td colpsan='2'>
			<input type='Submit' value='Add'>
		</td>
	</tr>
</table>
</form>
<form action='' name='myForm' method='get'>
<?php
	echo "<table border='1'>";
	while($row = mysql_fetch_row($result))
	{
		$personID = $row[0];
		$email = $row[1];
		$lastName = $row[2];
		$firstName = $row[3];
		$address = $row[4];
		$city = $row[5];
		$ficoScore = $row[6];

		echo "<tr>";
		echo "<td><input type='radio' name='personID' value='$personID'></td>";
		
                echo "<td>$firstName</td>";
                echo "<td>$lastName</td>";
                echo "<td>$email</td>";
                echo "<td>$address</td>";
                echo "<td>$city</td>";
                echo "<td>$ficoScore</td>";
		echo "</tr>";
	}
	echo "</table>";
	mysql_close($mysql_access);
?>
<input type='button' value='Change Record' onClick='changeRecord()'>
<input type='button' value='Delete Record' onClick='deleteRecord()'>
</form>
<a href="../index.html"><h3>Link back to ePortfolio</h3></a>
<a href="Screenshot_2018-06-17_13-14-04.png"><h3>Link to ER diagram</h3></a>


</body>
</html>

