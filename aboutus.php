<!DOCTYPE html>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" type="text/css" href="css/format1.css">
<style>
* {
  box-sizing: border-box;
  margin:0px;
  
}

body {
  margin: 0;
  font-family: Arial;
  
}

h1{
    color:bisque;
}

h3{
    color:bisque;
}

/* The grid: Four equal columns that floats next to each other */
.column {
  float: left;
  width: 25%;
  height: 25%;
  padding: 10px;
  margin:5px;
}

/* Style the images inside the grid */
.column img {
  opacity: 0.8; 
  cursor: pointer; 
}

.column img:hover {
  opacity: 1;
}

.row{
    margin-left:112px;
}

/* Clear floats after the columns */
.row:after {
  content: "";
  display: table;
  clear: both;
}

#imageborder{
    border:5px solid white;
}

/* The expanding image container */
.container {
  position: relative;
  display: none;

}

/* Expanding image text */
#imgtext {
  position: absolute;
  bottom: 15px;
  left: 15px;
  color: white;
  font-size: 20px;
}

/* Closable button inside the expanded image */
.closebtn {
  position: absolute;
  top: 10px;
  right: 15px;
  color: white;
  font-size: 35px;
  cursor: pointer;
}
</style>
</head>
<body>
<header>
<div class="main">
			<div class="logo">
				<img src="images/logo.png">
			</div>
		<ul>
			<li><a class="active" href="#">HOME</a></li>
			<li><a href="#">Notice</a>
			</li>
			<li><a href="members.php">Members</a></li>
			<li><a href="aboutus.php">About Us</a></li>
			
		</ul>
		</div>

        <details>
  <summary>DESCRIPTION OF SOCIETY MANAGEMENT SYSTEM</summary>

  <ul>

<li>The society management system is one of the best applications to manage society.</li>
<li>It excels in the functioning of the housing society.</li>

<li>The function of this system is to store the information of people residing in the society.</li>

<li>That is, they can know about the information 
      of the new notices and many others related to society.</li>

<li>The admin can modify the database which holds the information of the members.</li>

<li>The society members can communicate with the help of this system and can come together in case of any problem caused.</li>

<li>Any complains , 
       any discrepancies can be solved easily.</li>

       <li>This Society management system is an amazing one which can reduce the time and increase the
        convenience of the members to a great extent.
</li>

</ul>


</details>




<div style="text-align:center">
  <h1><b><br>VIEW GALLERY</b></h1>
  <h3>Click on the images to have a better view!<hr></h3>
</div>
<center>
<!-- The four columns -->
<div class="row">
  <div class="column">
    <img src="images/fullview.jpg" id="imageborder" alt="FULLVIEW" style="width:200px; height:200px" onclick="myFunction(this);">
  </div>
  <div class="column">
    <img src="images/bg.jpg" id="imageborder" alt="SOCIETY" style="width:200px; height:200px" onclick="myFunction(this);">
  </div>
  <div class="column">
    <img src="images/sky.jpg" id="imageborder" alt="SKY VIEW" style="width:200px; height: 200px" onclick="myFunction(this);">
  </div>
  <div class="column">
    <img src="images/garden.jpg" id="imageborder" alt="GARDEN VIEW" style="width:200px; height: 200px" onclick="myFunction(this);">
  </div>
  <div class="column">
    <img src="images/flat.jpeg" id="imageborder" alt="FLAT VIEW" style="width:200px; height: 200px" onclick="myFunction(this);">
  </div>
  <div class="column">
    <img src="images/pool.jpeg" id="imageborder" alt="POOL VIEW" style="width:200px; height: 200px" onclick="myFunction(this);">
  </div>
</div>

<div class="container">
  <span onclick="this.parentElement.style.display='none'" class="closebtn">&times;</span>
  <img id="expandedImg" style="width:900px; height:500px; border:5px solid black">
  <div id="imgtext"></div>
</div>

<script>
function myFunction(imgs) {
  var expandImg = document.getElementById("expandedImg");
  var imgText = document.getElementById("imgtext");
  expandImg.src = imgs.src;
  imgText.innerHTML = imgs.alt;
  expandImg.parentElement.style.display = "block";
}
</script>
</center>
</header>

<div class="footer">
  <p><i>&copy MySociety</i></p>
</div>
		
</body>
</html>
