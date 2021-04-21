<?php

$con=mysqli_connect("localhost","root","","medical_store");
@session_start();
if($_SESSION['NAME']=='')
{
	header("location:login.php");
	
}

?>