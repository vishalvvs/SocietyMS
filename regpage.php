<html>
<head>
<title>general form</title>
</head>
<body>
<form action = "<?php $_PHP_SELF ?>" method = "POST">
<table>
         <tr><th> Name:</th><td><input type="text" name="name"/></td></tr>
         <tr><th>email:</th><td><input type="text" name="email"/></td></tr>
		<tr><th>age:</th><td><input type="number" name="age"/></td></tr>
		<tr><th>contact no.:</th><td><input type="text" name="contact"/></td></tr>
         <tr><th>Flat number</th><td><input type="text" name="add"></td></tr>
		 <tr><th>select your gender</th><td>
			male<input type="radio" value="male" name="g"/></br>
			female<input type="radio" value="female" name="g"/></td>
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
 
$name = strval($_POST['name']);
$email = strval($_POST['email']);
$age = intval($_POST['age']);
$contact = strval($_POST['contact']);
$address = strval($_POST['address']);
$g = strval($_POST['g']);

$insert="insert into resident values('$name','$email',$age,'$contact','$address','$g')";
$crin = mysqli_query($mysqli,$insert);

if(mysqli_query($mysqli,$insert))
{
echo "Registered successfully<br>";
}
else
{
	echo "Registeration Failed<br>".mysqli_error($mysqli);
}
$mysqli ->close();
?>
</body>
</html>
