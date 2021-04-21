<?php

include("connection.php");
ini_set('display_errors', 'Off');
if(isset($_POST['add']))
{
	if($_POST['available']=="yes")
	{
		$ava =intval("1");
	}
	else
	{
		$ava =intval("0");
	
	}
	$querry = "insert into items set name='".$_POST['name']."',category='".$_POST['category']."',price='".$_POST['price']."',available='".$ava."'";
	mysqli_query($con,$querry);
	header("location:manage_products.php");
}

?>
<html>
<head>


<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<style>

.sidebar {
  height: 100%;
  width: 260px;
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

body {
  font-family: Arial;
  padding: 20px;
  background: #f1f1f1;
}

/* Header/Blog Title */
.header {
  padding: 30px;
  font-size: 40px;
  text-align: center;
  background: #357CA5;
}

/* Create two unequal columns that floats next to each other */
/* Left column */
.leftcolumn {
  float: left;
  width: 55%;
  
}

/* Right column */
.rightcolumn {
  float: left;
  width: 35%;
  padding-left: 30px;
}

/* Fake image */
.fakeimg {
  background-color: #aaa;
  width: 100%;
  padding: 20px;
}

/* Add a card effect for articles */
.card {
  background-color: white;
  padding: 20px;
  margin-top: 20px;
}

/* Clear floats after the columns */
.row:after {
  content: "";
  display: table;
  clear: both;
}

/* Footer */
.footer {
  padding: 20px;
  text-align: center;
  background: #357CA5;
  margin-top: 20px;
}

/* Responsive layout - when the screen is less than 800px wide, make the two columns stack on top of each other instead of next to each other */
@media screen and (max-width: 800px) {
  .leftcolumn, .rightcolumn {
    width: 100%;
    padding: 0;
  }
}
.updatebox input[type ="text"],input[type="Email"],input[type="password"]
{
	width:50%;
	margin-bottom:10px;
	border: none;
	border-bottom:1px solid #fff;
	background: transparent;
	outline:none;
	height:15px;
	color:black;
	font-size:16px;
}

.updatebox input[type="submit"]{
	border:none;
	outline:none;
	height:40px;

	background:#3399FF;
	color:#0A0101;
	font-size:18px;
	border-radius:20px;
	width:200px;
	position: absolute;
	left: 600px;
	top: 600px;
	
	
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
  </div>
   <a style="padding-top: 20px;"href="home.php"><i class="fa fa-fw fa-home"></i> Home</a>
      <a style="padding-top: 10px;"href="manage_products.php"><i class="fa fa-fw fa-wrench"></i> Manage Products </a>

  <a style="padding-top: 10px;"href="cart.php"><i class="fa fa-fw fa-shopping-cart"></i> Cart </a>
  <a style="padding-top: 10px;"href="account.php"><i class="fa fa-fw fa-user"></i> Account </a>
  <a style="padding-top: 10px;"href="about.php"><i class="fa fa-fw fa-envelope"></i> About </a>
    <a style="padding-top: 10px;"href="login_do.php?logout=true;"><i class="fa fa-fw fa-angellist"></i> Log out </a>

</div>
<div class="main">
<div class="header">

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

<div class="row">
  <div class="leftcolumn">
    <div class="card" style="height:450px;">
	<div class="updatebox">
      <h2>Edit User Details</h2>
      <form method="post" action="" enctype="multipart/form-data">
			<p><b> Product Name </b></p>
			<input type="text" name="name" value="" placeholder="Enter Name">
			
			<p><b> Category </b></p>
			<input type="text" name="category" value="" placeholder="Enter Category">
			<p><b> Price </b></p>
			<input type="text" name="price" value="" placeholder="Enter Price">
			<p><b> Available </b></p>
			<input type="text" name="available" value="" placeholder="Enter yes or no">
			
			<input type="submit" name ="add" value="add product"/>
			
  </form>
    </div>
	</div>
    
  </div>

</div>

<div class="footer">

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