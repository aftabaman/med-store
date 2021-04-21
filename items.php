
<?php 

include("connection.php");
@session_start();
$session = session_id();
if(isset($_REQUEST['items']))
{
	$querry = "select * from items where category='".$_REQUEST['items']."'";
	$result = mysqli_query($con,$querry);
	
	
	$querry_new = "select * from cart_items ";
	$result_new = mysqli_query($con,$querry_new);
	$total = mysqli_num_rows($result_new);
	

}

if(isset($_REQUEST['cart_items_add']))
{
	$querry = "select * from items where id='".$_REQUEST['cart_items_add']."'";
	$result = mysqli_query($con,$querry);
	$fetch = mysqli_fetch_object($result);
	
	
	$query="INSERT INTO cart_items (p_name, p_id, p_price)VALUES ('".$fetch->name."','".$fetch->id."','".$fetch->price."')";
	mysqli_query($con,$query);
	
	
	$querry = "select * from items where category='".$fetch->category."'";
	$result = mysqli_query($con,$querry);
	
	$total = mysqli_num_rows(mysqli_query($con,"select * from cart_items"));
}

if(isset($_REQUEST['cart_items_del']))
{
	$querry = "select * from items where id='".$_REQUEST['cart_items_del']."'";
	$result = mysqli_query($con,$querry);
	$fetch = mysqli_fetch_object($result);
	
	
	$query="DELETE FROM cart_items where p_id = '".$fetch->id."'LIMIT 1";
	mysqli_query($con,$query);
	
	
	$querry = "select * from items where category='".$fetch->category."'";
	$result = mysqli_query($con,$querry);
	$total = mysqli_num_rows(mysqli_query($con,"select * from cart_items"));
}



?>












<!DOCTYPE html>
<html>
<head>


<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<style>
body {font-family: "Lato", sans-serif;}
th
	{
		
		
		color : black;
		padding: 20px;
		text-align: center;
	}
tr{
		width: 150px;
        text-align: center;
        
        padding: 10px 5px ;
		
	}
#footer {
   position:fixed;
   margin-left: 260px;
   bottom:0;
   text-align: center;
   width:100%;
   height:60px;   /* Height of the footer */
   background:#6cf;
}
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
/* Style buttons */
.btn {
  background-color: DodgerBlue; /* Blue background */
  border: none; /* Remove borders */
  color: white; /* White text */
  padding: 10px 10px; /* Some padding */
  font-size: 16px; /* Set a font size */
  cursor: pointer; /* Mouse pointer on hover */
  margin:4px 2px; 
  border-radius: 16px;
}

/* Darker background on mouse-over */
.btn:hover {
  background-color: RoyalBlue;
}
.chip {
  display: inline-block;
  padding: 0 35px;
  layout: row;
  layout-align: space-around center;
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

  <div style="background:#357CA5;padding: 14px 3px;color:white;text-align: center;text-shadow: 1px 1px 11px black">
    <a   style="color: white;text-decoration: none;font-size:30px;">Med Store </a>
  </div>
  <a style="padding-top: 20px;"href="home.php"><i class="fa fa-fw fa-home"></i> Home</a>
  <a style="padding-top: 10px;"href="cart.php"><i class="fa fa-fw fa-shopping-cart"></i> Cart </a>
  <a style="padding-top: 10px;"href="account.php"><i class="fa fa-fw fa-user"></i> Account </a>
  <a style="padding-top: 10px;"href="about.php"><i class="fa fa-fw fa-envelope"></i> About </a>
  <a style="padding-top: 10px;"href="login_do.php?logout=true"><i class="fa fa-fw fa-angellist"></i> Log out </a>
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
  
  <div >

<table>
  <tr>
    <th><h2>product Name</h2></th>
    <th><h2>Price </h2></th>
    <th><h2>available</h2></th>
  </tr>
<?php while($fetch = mysqli_fetch_object($result)){?>
	<tr>
		<th><?php echo $fetch->name;?></th>
		<th><?php echo $fetch->price;?></th>
		<th><?php if($fetch->available==1){ echo "Yes";}else{echo "No";}?></th>
		
		<th><form method="post"><button class="btn" formaction="items.php?cart_items_add=<?php echo $fetch->id;?>"><i class="fa fa-plus-square"></i>   Add </button></form>
		<form method="post"><button class="btn" style="background-color: red;"formaction="items.php?cart_items_del=<?php echo $fetch->id;?>"><i class="fa fa-trash"></i> Delete </button></form></th>
		<!--<th> <form method="post">
				<p><input type="text" name="item_count" value=""style="width:50px;" > item added</p></form></th>-->
  </tr>
<?php }?>

<tr><th> <form method="post">
				<p><input type="text" name="item_count" value="<?php echo $total ?>"style="width:50px;">Total items</p></form></th>
				<th><form method="post"><button class="btn" formaction="cart.php"><i class="fa fa-fw fa-shopping-cart"></i> view cart</button> </form></th> 
				<!--<th><a> <?php echo $session ?></a></th>--></tr>
</table>
</div>
</div>
<div style="background:#357CA5;padding: 14px 3px;color:white;font-size: 15pt;text-align: center;text-shadow: 1px 1px 11px black;margin-left: 260px;">
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
