<!DOCTYPE html>
<html>
<head>
  <title>Project Website</title>
  <link rel="stylesheet" type="text/css" href="css/styling.css">
  
</head>
<body>
  <header>
    <div class="main">
      <div class="logo">
        <img src="images/logopogo.png">
      </div>
    <ul>
      <li><a class="active" href="home.html">HOME</a></li>
      <li><a href="info.html">What Is Mental Disorder</a></li>
      <li><a href="test.html">Take Test</a></li>
      <li><a href="aboutus.html">About Us</a></li>
      <li><a href="contactus.html">Contact Us</a></li>
    </ul>
    </div>


  <div class="title">
      <h1>Please Fill The <br> Following Form.<br><br></h1>
        <p><i>"Provide correct data so that we contact you ASAP!"</i></p><br><br>
    </div>

  </header>


    <div class="contact-form">
      <center>
                <form action = "<?php $_PHP_SELF ?>" method = "POST">
                <br><hr><br>
                <div class="form-group">
                Name:
                <input type = "text" name = "name" placeholder="First Last Name">
                <br><br>
              </div>

              <div class="form-group">
                Email ID:
                <input type = "email" name = "emailid" placeholder="Eg: abcd@gmail.com">
                <br><br>
              </div>

              <div class="form-group">
                Mobile No.:
                <input type = "text" name = "mob_no" placeholder="+91">
                <br><br>
              </div>

              <div class="form-group">
                Gender:<br>
                <input type ="radio" name = "gender">Male<br>
                <input type="radio" name= "gender">Female<br>
                <input type="radio" name= "gender">Other<br>
                <br><br>
              </div>

              <div class="form-group">
                Would You Recommend Our Website To Others?<br>
                <input type="checkbox" name="recommend" value="Yes"> Yes<br>
                <input type="checkbox" name="recommend" value="No">No<br>
                <input type="checkbox" name="recommend" value="Maybe">Maybe<br>
                <br><br>
              </div>

              <div class="form-group">
                Comment:
                <textarea name = "comment" type = "textarea"></textarea>
                <br><br>
              </div>

              <div class="form-group">
                <input type = "Submit" name = "insert" value = "Submit My Data">
                <input type = "Reset" name = "reset" value = "Reset">

              </div>


                <br>
                <br>
                <br>
                <br>
                <br>
                <br>
                <hr>
                </form>
              </center>
</div>


 

  

    
</body>
</html>

<?php
if(isset($_POST['insert']))
{
$con = mysqli_connect("localhost","root","");
if($con)
{
echo "Successfully Connected To Our Server!<br>";
mysqli_select_db($con,"visitorss");
$Vname = strval($_POST['name']);
$vemail = strval($_POST['emailid']);
$vmobile = intval($_POST['mob_no']);
$vgender = strval($_POST['gender']);
$vrecommend = strval($_POST['recommend']);
$vcomment = strval($_POST['comment']);
$insert = "insert into vinfoss values('$Vname',$vemail,'$vmobile','$vgender','$vrecommend', '$vcomment')";
if(mysqli_query($con,$insert))
{
echo "Data inserted successfully<br>";
}
else
{
  echo "Data not inserted..!<br>".mysqli_error($con);
}
$query = "select * from vinfoss";
$sldt = mysqli_query($con,$query);
echo "<table border='1'>
<tr>
<th>Visitor's Name</th>
<th>Email-ID</th>
<th>Mobile No.</th>
<th>Gender</th>
<th>Recommendation</th>
<th>Comment</th>
</tr>";

while($row = mysqli_fetch_array($sldt))
{
echo "<tr>";
echo "<td>".$row['Vname']."</td>";
echo "<td>".$row['vemail']."</td>";
echo "<td>".$row['vmobno']."</td>";
echo "<td>".$row['vgender']."</td>";
echo "<td>".$row['vrecommend']."</td>";
echo "<td>".$row['vcomment']."</td>";
echo "</tr>";
}
echo "</table>";
mysqli_close($con);
}
}
?>