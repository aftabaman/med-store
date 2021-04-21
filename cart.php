
<?php
include("connection.php");

$querry = "SELECT COUNT(p_id) as p_count, p_name,sum(p_price) as total_price
FROM cart_items
GROUP BY p_id";
$result =mysqli_query($con,$querry);
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
   margin-left: 10px;
   bottom:0;
   text-align: center;
   width:100%;
   height:60px;   /* Height of the footer */
   background:#6cf;
}


.main {
  margin-left: 260px; /* Same as the width of the sidenav */
  padding: 0px 10px;
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
	table{
		
		border-collapse: collapse;
		width:100%;
		color:#d96459;
		font-family: nomospace;
		font-size:25px;
		text-align: left;
		
	}
	th
	{
		
		background-color:#588c7e;
		color : white;
		padding: 20px;
		text-align: center;
	}
	td{
		width: 150px;
        text-align: center;
        border: 1px solid black;
        padding: 10px 5px ;
		
	}
	h2{
		background-color:#588c7e;
		font-size:30px;
		text-align:center;
		padding: 10px 0 20px 0;
		
	}
	
	.button {
  display: inline-block;
  padding: 15px 25px;
  font-size: 15px;
  cursor: pointer;
  text-align: center;
  text-decoration: none;
  outline: none;
  color: #fff;
  background-color: #3399FF;;
  border: none;
  border-radius: 15px;
  box-shadow: 0 2px #999;
 
}

.button:hover {background-color:#3399FF;}

.button:active {
  background-color: #3399FF;;
  box-shadow: 0 5px #666;
  transform: translateY(4px);
}
</style>
</head>
<body>


<div >
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
  
<h2> Shopping Cart </h2>
<table border="1" cellspacing="0" bordercolor="black" width="100%"> 
<tr>
	<th>Product Name </th>
	<th>Quantity </th>
	<th>Price </th>
	
</tr>


<?php while($fetch = mysqli_fetch_object($result)){?>
			<tr>
			
			<td>
			<?php echo $fetch->p_name;?>
			</td>
			
			<td>
			<?php echo $fetch->p_count;?>
			</td>	
				
			<td>
			<?php echo $fetch->total_price;?>
			</td>
			
			</tr>
		
<?php }?>
</table>
<table>
<tr>
	<th>
		Total Amount: 
		
	</th>
	<?php 
		$querry_total = "select sum(p_price) as total_amount from cart_items";
		$result_total = mysqli_query($con,$querry_total);
		$fetch_total =  mysqli_fetch_object($result_total)
	?>
	<th> <?php echo $fetch_total->total_amount ?></th>
</tr>

</table>

<table>
<tr><td style="border:none;"><form method="post"><button class="button" formaction="checkout.php"><i class="fas fa-handshake"></i> proceed to pay </button> </form></td>
<td style="border:none;"><form method="post"><button class="button" formaction="home.php"><i class="fas fa-handshake"></i> Continue Shopping </button> </form></td></tr>
</table>



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
  </div>
</body>
     
</html> 
