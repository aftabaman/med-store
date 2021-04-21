<?php 
$con=mysqli_connect("localhost","root","","medical_store");

if(isset($_POST['register']))
{
	if($_POST['admin_code']=="admin")
	{
		
		$val = intval("1");
		$querry = "insert into users set name='".$_POST['name']."', email='".$_POST['email']."',password='".$_POST['password']."',admin='".$val."'";
		mysqli_query($con,$querry);
		header("location:login.php");

	}
	else
	{
		$querry = "insert into users set name='".$_POST['name']."', email='".$_POST['email']."',password='".$_POST['password']."'";
		mysqli_query($con,$querry);
		header("location:login.php");
	}
}


?>
<html>
<head>
	<title> Register </title>
	<link rel="stylesheet", type="text/css" href="style.css?version=51">
</head>
<body>
	<div class = "registerbox">
		<img src="extra_image/user.png" class ="user">
		<h1> Register </h1>
		<form method="post" action="" enctype="multipart/form-data">
			<p> Username</p>
			<input type="text" name="name" value="" placeholder="Enter Username">
			
			<p> Email </p>
			<input type="text" name="email" value="" placeholder="Enter Email">
			<p> Password</p>
			<input type="text" name="password" value="" placeholder="Enter Password">
			<p> admin code</p>
			<input type="text" name="admin_code" value="" placeholder="Enter admin code">
			
			<input type="submit" name ="register" value="register">
			<div style=" text-align: center;">
    <p>Already have an account! <a href="login.php">Sign in</a></p>
  </div>
			</form>
	</div>

</body>


</html>