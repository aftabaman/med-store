<?php 

include("connection.php");

if(isset($_REQUEST['delete']))
{
	$querry = "delete from items where id='".$_REQUEST['delete']."'";
	mysqli_query($con,$querry);
	header("location:manage_products.php");
}
$querry ="select * from items";

$result = mysqli_query($con,$querry);



?>

<html>
<head>
<title> database table</title>
<style type="text/css">
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
<h2> Products </h2>
<table border="1" cellspacing="0" bordercolor="black" width="100%"> 
<tr>
	<th>ID </th>
	<th>Medcine Name</th>
	<th>Category</th>
	<th>Price</th>
	<th>Action</th>
</tr>

<?php while($fetch = mysqli_fetch_object($result)){?>
			<tr>
			<td>
			<?php echo $fetch->id;?>
			</td>
			<td>
			<?php echo $fetch->name;?>
			</td>
			
			<td>
			<?php echo $fetch->category;?>
			</td>		
			<td>
			<?php echo $fetch->price;?>
			</td>
			
			<td> 
	 
			<a href="manage_products.php?delete=<?php echo $fetch->id;?>">Delete</a>
			</td>
			
			</tr>
		
<?php }?>
		
</table>
<table>
<tr><td style="border:none;"><form method="post"><button class="button" formaction="add_product.php"><i class="fas fa-handshake"></i> add product</button> </form></td>
<td style="border:none;"><form method="post"><button class="button" formaction="admin_home.php"><i class="fas fa-handshake"></i> return home </button> </form></td></tr>
</table>


</body>
</html>
