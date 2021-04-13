<?php


$mysqli = new mysqli("localhost", "root", "","resident");
 
// Check connection
if($mysqli === false){
    die("ERROR: Could not connect. " . $mysqli->connect_error);
}

$first_name = $mysqli->real_escape_string($_REQUEST['name']);
$flat = $mysqli->real_escape_string($_REQUEST['address']);
$complaint = $mysqli->real_escape_string($_REQUEST['complain']);

$sql = "INSERT INTO complain (name,address,complain) VALUES ('$first_name','$flat','$complaint')";
if($mysqli->query($sql) === true){
    echo "Records inserted successfully.";
} else{
    echo "ERROR: Could not able to execute $sql. " . $mysqli->error;
}
 
// Close connection
$mysqli->close();

?>

<html>
<head><title>Insert Page</title></head>
<body>
<form method="POST">
<table>
         <tr><th> Name:</th><td><input type="text" name="name"/></td></tr>
         <tr><th>Flat number</th><td><input type="text" name="address"></td></tr>
		 <tr><th>complain:</th><td><textarea rows="8" cols="20" name="complain"></textarea></td></tr>
		 
 </table>
<input type="submit" name="save" value="submit">
</body>
</html>
