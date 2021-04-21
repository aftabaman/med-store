



<?php
@session_start();
$session = session_id();
include("connection.php");
if($_SESSION['ADMIN']==1)
{
	header("location:admin_home.php");
	
	
}

?>




<!DOCTYPE html>
<html>
<head>


<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<style>
body {font-family: "Lato", sans-serif;}
* {
  box-sizing: border-box;
}

body {
  font-family: Arial, Helvetica, sans-serif;
}

/* Float four columns side by side */
.column {
  float: left;
  width: 25%;
  padding: 0 10px;
  padding-top: 40px;
}

/* Remove extra left and right margins, due to padding in columns */
.row {margin: 0 -5px;
	

}

/* Clear floats after the columns */
.row:after {
  content: "";
  display: table;
  clear: both;
}

/* Style the counter cards */
.card {
  box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2); /* this adds the "card" effect */
  padding: 16px;
  text-align: center;
  background-color: #f1f1f1;
}

/* Responsive columns - one column layout (vertical) on small screens */
@media screen and (max-width: 600px) {
  .column {
    width: 100%;
    display: block;
    margin-bottom: 20px;
	
	
  }
}
#footer {
   position:absolute;
   margin-left: 160px;
   bottom:0;
   text-align: center;
   width:100%;
   height:60px;   /* Height of the footer */
   background:#6cf;
}
.sidebar {
  height: 100%;
  width: 300px;
  position: fixed;
  z-index: 1;
  top: 0;
  left: 0;
  background-color: #111;
  overflow-x: hidden;
  padding-top: 16px;
}

.sidebar a {
  padding: 6px 8px 6px 16px;
  text-decoration: none;
  font-size: 20px;
  color: #818181;
  display: block;
}

.sidebar a:hover {
  color: #f1f1f1;
}

.main {
  margin-left: 260px; /* Same as the width of the sidenav */
  padding: 0px 10px;
}

@media screen and (max-height: 450px) {
  .sidebar {padding-top: 1px;}
  .sidebar a {font-size: 18px;}
}

.card {
  box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2);
  max-width: 300px;
  margin: auto;
  text-align: center;
  font-family: arial;
}

.price {
  color: grey;
  font-size: 22px;
}

.card button {
  border: none;
  outline: 0;
  padding: 12px;
  color: white;
  background-color: #000;
  text-align: center;
  cursor: pointer;
  width: 100%;
  font-size: 18px;
}

.card button:hover {
  opacity: 0.7;
}
.chip {
  display: inline-block;
  padding: 0 25px;
  height: 50px;
  font-size: 16px;
  line-height: 50px;
  border-radius: 25px;
  background-color: #ff9966;
}

.chip img {
  float: left;
  margin: 0 10px 0 -25px;
  height: 50px;
  width: 50px;
  border-radius: 50%;
}
</style>
</head>
<body>

<div class="sidebar">

  <div style="background:#357CA5;padding: 14px 3px;color:white;font-size: 15pt;text-align: center;text-shadow: 1px 1px 11px black">
    <a  style="color: white;text-decoration: none;font-size:30px;"> Med Store </a>
	<!--<a> <?php echo $session ?></a>-->
  </div>
   <a style="padding-top: 20px;"href="home.php"><i class="fa fa-fw fa-home"></i> Home</a>
   
  <a style="padding-top: 10px;"href="cart.php"><i class="fa fa-fw fa-shopping-cart"></i> Cart </a>
  <a style="padding-top: 10px;"href="account.php"><i class="fa fa-fw fa-user"></i> Account </a>
  <a style="padding-top: 10px;"href="about.php"><i class="fa fa-fw fa-envelope"></i> About </a>
    <a style="padding-top: 10px;"href="login_do.php?logout=true;"><i class="fa fa-fw fa-angellist"></i> Log out </a>

</div>

<div class="main">
		<div style="background:#357CA5;padding: 14px 3px;color:white;font-size: 15pt;text-align: center;text-shadow: 1px 1px 11px black;">
    <div>
	<footer><div class="chip" style="margin-right: 180px;">
  <img src="user_image/user-chip.png" alt="Person" width="96" height="96">
  SK Aftab Aman
</div>
<div class="chip"style="margin-right: 180px;">
  <img src="user_image/user2-chip.png" alt="Person" width="96" height="96">
  shubham shaw
</div>
<div class="chip"style="margin-right: 180px;">
  <img src="user_image/user3-chip.jpg" alt="Person" width="96" height="96">
  sneha singh
</div></footer>
</div>
  </div>
<div class ="row">
	<div class = "column">
		<div class="card">
		  <img src="product_image/tablets.jpeg" alt="Denim Jeans" style="width:200px;height:200px">
		  <h1>Tablets</h1>
		  <!-- <p class="price">200 Rs</p>-->
		  <form method= "post">
			<button formaction="items.php?items=<?php echo "tablet" ;?>">tablet</button>
		</form>
		</div>

	</div>
	<div class = "column">
		<div class="card">
		  <img src="product_image/injection.PNG" alt="Denim Jeans" style="width:200px;height:200px">
		  <h1>Injection</h1>
		  <!-- <p class="price">200 Rs</p>-->
		  <form method= "post">
			<button formaction="items.php?items=<?php echo "injection" ;?>">injection</button>
		</form>
		</div>

	</div>
	
	<div class = "column">
		<div class="card">
		  <img src="product_image/cream.jpg" alt="Denim Jeans" style="width:200px;height:200px">
		  <h1>Cream</h1>
		  
		  <form method= "post">
			<button formaction="items.php?items=<?php echo "cream" ;?>">cream</button>
		</form>
		</div>

	</div>
	<div class = "column">
		<div class="card">
		  <img src="product_image/lotion.jpg" alt="Denim Jeans" style="width:200px;height:200px">
		  <h1>Lotions</h1>
		  
		  <form method= "post">
			<button formaction="items.php?items=<?php echo "lotion" ;?>">lotion</button>
		</form>
		</div>

	</div>
	
	<div class = "column">
		<div class="card">
		  <img src="product_image/capsule.jpg" alt="Denim Jeans" style="width:200px;height:200px">
		  <h1>Capsule</h1>
		  <!-- <p class="price">200 Rs</p>-->
		  <form method= "post">
			<button formaction="items.php?items=<?php echo "capsule" ;?>">capsule</button>
		</form>
		</div>

	</div>
	<div class = "column">
		<div class="card">
		  <img src="product_image/syrup.jpg" alt="Denim Jeans" style="width:200px;height:200px">
		  <h1>Syrup</h1>
		  <!-- <p class="price">200 Rs</p>-->
		  
		  <form method= "post">
			<button formaction="items.php?items=<?php echo "syrup" ;?>">syrup</button>
		</form>
		</div>

	</div>
	
</div> 

  </div>


	<div style="background:#357CA5;padding: 14px 3px;color:white;font-size: 15pt;text-align: center;text-shadow: 1px 1px 11px black;  margin-left:260px;">
    <div>
	<footer><div class="chip" style="margin-right: 180px;">
  <img src="user_image/user-chip.png" alt="Person" width="96" height="96">
  SK Aftab Aman
</div>
<div class="chip"style="margin-right: 180px;">
  <img src="user_image/user2-chip.png" alt="Person" width="96" height="96">
  shubham shaw
</div>
<div class="chip"style="margin-right: 180px;">
  <img src="user_image/user3-chip.jpg" alt="Person" width="96" height="96">
  sneha singh
</div></footer>
</div>
  </div>
</body>
     
</html> 
