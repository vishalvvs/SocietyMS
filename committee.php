<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Grandeur Residential</title>
  <style>
    html {
      box-sizing: border-box;
      background-image: linear-gradient(snow,silver);
    }
    
    *, *:before, *:after {
      box-sizing: inherit;
    }

    ul{
	list-style-type: none;
	float:right;
	margin-top: 25px;
}

ul li{
	display:inline-block;

}

ul li a {
  text-decoration: none;
  background-color:grey;
	color: #ffffff;
	padding: 5px 20px;
	border: 1px solid black;
	transition: 0.6s ease;

}

ul li a:hover{
	background-color:bisque;
	color:black;
}

.logo img{
	float:left;
	width:200px;
	height:-webkit-fill-available;
}

.main{

	max-width:100%;
	margin:auto;
	background-color: transparent;
	height:75px;
}

ul li .active a{
	background-color:bisque;
	color:black;

}

    
    .column {
      float: left;
      /* width: 33.3%; */
      width: 20%;
      margin-bottom: 15px;
      padding: 0 5px;
    }
    
    @media screen and (max-width: 650px) {
      .column {
        /* width: 100%; */
        width: 75%;
        display: block;
      }
    }
    
    .card {
      box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2);
      background-color: white;
    }
    
    .container {
      padding: 0 16px;
    }
    
    .container::after, .row::after {
      content: "";
      clear: both;
      display: table;
    }
    
    .title {
      color: grey;
      text-shadow: 1px 1px 1px black;
    }
    
.button a{
  text-decoration:none;
  color:white;
}

    .button {
      border: none;
      outline: 0;
      display: inline-block;
      padding: 8px;
      color: white;
      background-color: #000;
      text-align: center;
      cursor: pointer;
      width: 100%;
    }
    
    .button:hover {
      background-color: #555;
    }
    .comp{
      float:center;
      font-size: 20px;
    }

  
    .but {
      
      text-decoration: none;
      /* color: white; */
      background-color: #c15050;
      width: 99px;
    height: 40px;
    }
    .but a{
      color: white;
      text-decoration: none;
    }

    .footer {
   position: inherit;
   left: 0;
   top:10px;
   bottom: 0;
   width: 100%;
   background-color:transparent;
   color: white;
   text-align: left;
   font-size: 15px;
   height:40px;
}



    </style>
</head>
<body>

<div class="main">
			
		<ul>
			
			<li><a class="active" href="#">HOME</a></li>
			<li><a href="#">Notice</a>
			</li>
			<li><a href="committee.php">Members</a></li>
			<li><a href="aboutus.php">About Us</a></li>
			
		</ul>
		</div>
<hr>
  <h1 style="text-align: center; color: ;">Society Committee</h1>
  <div class="row">
    <div class="column">
      <div class="card">
        <img src="images/vish.JPG" alt="Jane" style="width:100%">
        <div class="container">
          <h3>Vishal Singhania</h3>
          <p class="title">CHAIRPERSON</p>
          <!-- <p></p> -->
          <p>vishal41@gmail.com</p>
          <p><button class="button"><a href="mailto:pratyakshaambast2000@gmail.com">Contact</a></button></p>
        </div>
      </div>
    </div>
  
    <div class="column">
      <div class="card">
        <img src="images/smruti.JPG" alt="Mike" style="width:100%">
        <div class="container">
          <h3>Smruti Singh</h3>
          <p class="title">VICE CHAIRPERSON</p>
          <p>smruti40@gmail.com</p>
          <p><button class="button"><a href="mailto:pratyakshaambast2000@gmail.com">Contact</a></button></p>
        </div>
      </div>
    </div>
  
    <div class="column">
      <div class="card">
        <img src="images/prats.JPEG" alt="John" style="width:100%">
        <div class="container">
          <h3>Pratyaksha Ambast</h3>
          <p class="title">SECRATARY</p>
          <p>pratyaksha42@gmail.com</p>
          <p><button class="button"><a href="mailto:pratyakshaambast2000@gmail.com">Contact</a></button></p>
        </div>
      </div>
    </div>

    <div class="column">
      <div class="card">
        <img src="images/pratishtha.JPG" alt="Mike" style="width:100%">
        <div class="container">
          <h3>Pratishtha Singh</h3>
          <p class="title">EVENT MANAGER</p>
          <p>pratishtha38@gmail.com</p>
          <p><button class="button"><a href="mailto:pratyakshaambast2000@gmail.com">Contact</a></button></p>
        </div>
      </div>
    </div>
    <div class="column">
      <div class="card">
        <img src="images/shubh.jpeg" alt="Mike" style="width:100%">
        <div class="container">
          <h3>Shubham Singh </h3>
          <p class="title">TREASURER</p>
          <p>shubham39@gmail.com</p>
          <p><button class="button"><a href="mailto:pratyakshaambast2000@gmail.com">Contact</a></button></p>
        </div>
      </div>
    </div>
  </div>

  <hr>


  <div class="comp">
   <label><em>To Register A Complaint Click The Following Button : </em></label>
   <button class="but"><a href="complain.php">COMPLAIN</a></button>
  </div>
<hr><br>
  <div class="footer">
  &copy; Grandeur Residential Socirty <br>
 Hiranandani Estate, MUMBAI
</div>

</body>
</html>