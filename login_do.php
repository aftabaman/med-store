<?php
$con = mysqli_connect("localhost","root","","medical_store");
if(isset($_REQUEST['login']))
{
	$querry="select * from users where email='".$_REQUEST['email']."' and password='".$_REQUEST['password']."'";
	$result=mysqli_query($con,$querry);
	$count=mysqli_num_rows($result);
	$fetch=mysqli_fetch_object($result);
	if($count>0)
	{
		@session_start();
		$_SESSION['NAME']=$fetch->name;
		$_SESSION['EMAIL']=$fetch->email;
		$_SESSION['UID']=$fetch->id;
		$_SESSION['ADMIN']=$fetch->admin;
		header("location:home.php");
		
	}
	else
	{
		
		header("location:login.php");
	}
	
}
if(isset($_REQUEST['logout']))
{
	session_start();
	session_destroy();
	header("location:login.php");
	
	
	
}

?>