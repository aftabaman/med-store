
<html>
<head>

<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<style>

body {
  font-family: Arial, Helvetica, sans-serif;
  margin: 0;
}

html {
  box-sizing: border-box;
}

*, *:before, *:after {
  box-sizing: inherit;
}

.column {
  float: left;
  width: 33.3%;
  margin-bottom: 16px;
  padding: 0 8px;
}

.card {
  box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2);
  margin: 8px;
}

.about-section {
  padding: 50px;
  text-align: center;
  background-color: #474e5d;
  color: white;
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

@media screen and (max-width: 650px) {
  .column {
    width: 100%;
    display: block;
  }
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

  <div style="background:#357CA5;padding: 14px 3px;color:white;font-size: 15pt;text-align: center;text-shadow: 1px 1px 11px black">
    <a  style="color: white;text-decoration: none;font-size:30px;"> Med Store </a>
  </div>
   <a style="padding-top: 20px;"href="home.php"><i class="fa fa-fw fa-home"></i> Home</a>
  <a style="padding-top: 10px;"href="cart.php"><i class="fa fa-fw fa-shopping-cart"></i> Cart </a>
  <a style="padding-top: 10px;"href="account.php"><i class="fa fa-fw fa-user"></i> Account </a>
  <a style="padding-top: 10px;"href="about.php"><i class="fa fa-fw fa-envelope"></i> About </a>
    <a style="padding-top: 10px;"href="login_do.php?logout=true;"><i class="fa fa-fw fa-angellist"></i> Log out </a>

</div>
<div class = "main">
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
<div class="about-section">
  <h1>About</h1>
  <p>Take the Worry Out of Buying Medicines! Purchase Medicines Online Anytime, Anywhere!
Get everything you need at Med Store to take care of your health right from high-quality, affordable, authentic prescription medicines, Over-The-Counter pharmaceuticals products to general health care products, Ayurveda, Unani and Homeopathy medicines.

Buy medicines online at Med Store from the comfort of your home and we will take care of the rest! We will ensure that the life-saving drugs reach your doorstep without a hitch. Do away with the hassle of driving to the medical store, waiting in line, or even remembering your refills! Med Store will sort out those problems for you effectively so that you can lead a healthy and full life!

Ordering medicines online at Med Store is just a simple 3 step process. Browse through our wide range of health care products, add them to your cart,  and proceed to checkout!

With Med Store rest assured that your health will be in safe hands!

</div>

<h2 style="text-align:center">Our Team</h2>
<div class="row">
  <div class="column">
    <div class="card">
      <img src="user_image/about3.jpg" alt="Jane" style="width:80%">
      <div class="container">
        <h2>SK Aftab Aman</h2>
        <p>aftabaman2000@gmail.com</p>
        
      </div>
    </div>
  </div>

  <div class="column">
    <div class="card">
      <img src="user_image/about2.jpg" alt="Mike" style="width:80%">
      <div class="container">
      <h2>shubham shaw</h2>
        <p>shubham shaw@gmail.com</p>
      </div>
    </div>
  </div>

  <div class="column">
    <div class="card">
      <img src="user_image/about1.jpg" alt="John" style="width:80%">
      <div class="container">
        <h2>sneha singh</h2>
        <p>sneha singh@gmail.com</p>
      </div>
    </div>
  </div>
</div>
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