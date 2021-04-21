 
<html>
<head>
	<title> login </title>
	<link rel="stylesheet", type="text/css" href="style.css">
</head>
<body>
	<div class = "registerbox">
		<img src="extra_image/user.png" class ="user">
		<h1> Login </h1>
		<form method="post" action="login_do.php" enctype="multipart/form-data">
			<p> Email</p>
			<input type="text" name="email" value="" placeholder="Enter Email">
			<p> Password</p>
			<input type="text" name="password" value="" placeholder="Enter Password">
			
			<input type="submit" name ="login" value="Longin"/>
			<div style=" text-align: center;">
    <p>You can register here! <a href="register.php">Sign up</a></p>
  </div>
  </form>
			
	</div>

</body>


</html>