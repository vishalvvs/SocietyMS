<html>
<head>
<title>general form</title>
</head>
<body>
<form action = "<?php $_PHP_SELF ?>" method = "POST">
<table>
         <tr><th> Name:</th><td><input type="text" name="name"/></td></tr>
         <tr><th>Flat number</th><td><input type="text" name="address"></td></tr>
		 <tr><th>complain:</th><td><textarea rows="8" cols="20" name="complain"></textarea></td></tr>
		 
 </table>
</br>
<input type="submit" >
</form>

<?php

$databaseHost = 'localhost';
$databaseName = 'resident';
$databaseUsername = 'root';
$databasePassword = '';

$mysqli = mysqli_connect($databaseHost, 
$databaseUsername, $databasePassword, $databaseName); 
if (!$mysqli){
  die("Connection Failed : " .mysqli_connect_error());
}
else{
  echo "Connection Successfull";
}
$name = strval($_POST['name']);
$address = strval($_POST['address']);
$complain = strval($_POST['complain']);

$insert="insert into complain values('$name','$address','$complain')";
$crin = mysqli_query($mysqli,$insert);

if(mysqli_query($mysqli,$insert))
{
echo "Complain registered successfully<br>";
}
else
{
	echo "Failed<br>".mysqli_error($mysqli);
}
$mysqli->close();
?>
</body>
</html>
