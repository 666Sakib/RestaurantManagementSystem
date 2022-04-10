
<?php
session_start();
if (isset($_SESSION["username"])) {
    $username = $_SESSION["username"];
    session_write_close();
} else {
  
    session_unset();
    session_write_close();
    $url = "./index.php";
    header("Location: $url");
}

?>



<!doctype html>


<html lang="en" class="no-js">
<head>
	<title>Customar order</title>

	<meta charset="utf-8">

	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
	<link href="https://fonts.googleapis.com/css2?family=Lato:ital,wght@0,400;0,700;1,300;1,400&family=Zilla+Slab:ital,wght@0,300;0,400;0,500;0,600;0,700;1,300;1,400&display=swap" rel="stylesheet">

	<link rel="stylesheet" href="css/koad-assets.min.css">
	<link rel="stylesheet" type="text/css" href="css/style.css">

</head>

<body>


	<header>
	
		<div class="header-1">
	
			<a href="#" class="logo"> <i class="fas fa-utensils"></i> food </a>
	
			<h3 class="call"> <i class="fas fa-phone"></i> call now : +8801533953803 </h3>
	
		</div>
	
		<div class="header-2">
	
			<div id="menu" class="fas fa-hamburger"></div>
	
			<nav class="navbar">
				<ul>
					<li><a class="active" href="#home">home</a></li>
					<li><a href="#about">about</a></li>
					<li><a href="#dish">dishes</a></li>
					<li><a href="#chef">chef</a></li>
					<li><a href="#speciality">speciality</a></li>
					<li><a href="view/customer/user-registration.php">Customer</a></li>
					<li><a href="view/stuff/staff.php">Stuff</a></li>
					<li><a href="view/admin/login.php">Admin</a></li>
				</ul>
			</nav>
	
		
			<div class="phppot-container">
				<div class="page-header">
					<span class="login-signup"><a href="logout.php">Logout</a></span>
				</div>
				<div class="page-content">Welcome	<?php echo $username;?>
				</div>
			</div>
			</div>
	
		</div>
	
	</header>
		<section class="menu-section">
			<div class="menu-box pizza-menu">
				<div class="container">
                    <div class="title-section">
                        <h2>Pizza</h2>
                        <span>Try the delicious new dishes from our chef.</span>
                    </div>
					<div class="row">
						<div class="col-lg-4 col-md-6">
							<div class="menu-post">
								<img src="upload/menu/6.jpg" alt="">
								<h3>Oakey Smokey Pizza</h3>
								<p>Tomato sauce, mozzarella, anchovies, oregano, basil</p>
								<span class="price">$ 21.00</span>
								<a href="cart.html" class="button-one">Add To Cart</a>
							</div>
						</div>
						<div class="col-lg-4 col-md-6">
							<div class="menu-post">
								<img src="upload/menu/5.jpg" alt="">
								<h3>White Rocotta Pizza</h3>
								<p>Tomato sauce, mozzarella, anchovies, oregano, basil</p>
								<span class="price">$ 24.00</span>
								<a href="cart.html" class="button-one">Add To Cart</a>
							</div>
						</div>
						<div class="col-lg-4 col-md-6">
							<div class="menu-post">
								<img src="upload/menu/7.jpg" alt="">
								<h3>Original Margherita Pizza</h3>
								<p>Tomato sauce, mozzarella, anchovies, oregano, basil</p>
								<span class="price">$ 22.00</span>
								<a href="menu2.html" class="button-one">Add To Cart</a>
							</div>
						</div>
					</div>
					<div class="row">
						<div class="col-lg-4 col-md-6">
							<div class="menu-post">
								<img src="img/burger.jpg" alt="">
								<h3>Calzone</h3>
								<p>Tomato sauce, mozzarella, anchovies, oregano, basil</p>
								<span class="price">$ 23.50</span>
								<a href="menu2.html" class="button-one">Add To Cart</a>
							</div>
						</div>
						<div class="col-lg-4 col-md-6">
							<div class="menu-post">
								<img src="upload/menu/9.jpg" alt="">
								<h3>Mercy Margarita</h3>
								<p>Tomato sauce, mozzarella, anchovies, oregano, basil</p>
								<span class="price">$ 18.00</span>
								<a href="menu2.html" class="button-one">Add To Cart</a>
							</div>
						</div>
						<div class="col-lg-4 col-md-6">
							<div class="menu-post">
								<img src="upload/menu/10.jpg" alt="">
								<h3>Napoletana</h3>
								<p>Tomato sauce, mozzarella, anchovies, oregano, basil</p>
								<span class="price">$ 19.00</span>
								<a href="menu2.html" class="button-one">Add To Cart</a>
							</div>
						</div>
					</div>
				</div>
			</div>
			
			<div class="menu-box pasta-menu">
				<div class="container">
                    <div class="title-section">
                        <h2>Pasta</h2>
                        <span>Try the delicious new dishes from our chef.</span>
                    </div>
					<div class="row">
						<div class="col-lg-4 col-md-6">
							<div class="menu-post">
								<img src="upload/menu/11.jpg" alt="">
								<h3>Spaghetti all’Amatriciana</h3>
								<p>Tomato sauce, mozzarella, anchovies, oregano, basil</p>
								<span class="price">$ 21.00</span>
								<a href="menu2.html" class="button-one">Add To Cart</a>
							</div>
						</div>
						<div class="col-lg-4 col-md-6">
							<div class="menu-post">
								<img src="upload/menu/12.jpg" alt="">
								<h3>Spaghetti Carbonara</h3>
								<p>Tomato sauce, mozzarella, anchovies, oregano, basil</p>
								<span class="price">$ 24.00</span>
								<a href="menu2.html" class="button-one">Add To Cart</a>
							</div>
						</div>
						<div class="col-lg-4 col-md-6">
							<div class="menu-post">
								<img src="upload/menu/4.jpg" alt="">
								<h3>Lasagna</h3>
								<p>Tomato sauce, mozzarella, anchovies, oregano, basil</p>
								<span class="price">$ 22.00</span>
								<a href="menu2.html" class="button-one">Add To Cart</a>
							</div>
						</div>
					</div>
				</div>
			</div>
			
			<div class="menu-box burger-menu">
				<div class="container">
                    <div class="title-section">
                        <h2>Burgers</h2>
                        <span>Try the delicious new dishes from our chef.</span>
                    </div>
					<div class="row">
						<div class="col-lg-4 col-md-6">
							<div class="menu-post">
								<img src="upload/menu/13.jpg" alt="">
								<h3>Cheese Royale Burger</h3>
								<p>Tomato sauce, mozzarella, anchovies, oregano, basil</p>
								<span class="price">$ 21.00</span>
								<a href="menu2.html" class="button-one">Add To Cart</a>
							</div>
						</div>
						<div class="col-lg-4 col-md-6">
							<div class="menu-post">
								<img src="upload/menu/14.jpg" alt="">
								<h3>Single BBQ Chicken Burger</h3>
								<p>Tomato sauce, mozzarella, anchovies, oregano, basil</p>
								<span class="price">$ 8.50</span>
								<a href="menu2.html" class="button-one">Add To Cart</a>
							</div>
						</div>
						<div class="col-lg-4 col-md-6">
							<div class="menu-post">
								<img src="upload/menu/15.jpg" alt="">
								<h3>The Double Barrel Meat Feast</h3>
								<p>Tomato sauce, mozzarella, anchovies, oregano, basil</p>
								<span class="price">$ 22.50</span>
								<a href="menu2.html" class="button-one">Add To Cart</a>
							</div>
						</div>
					</div>
				</div>
			</div>
		</section>
		

	</div>

	<section class="newsletter">
	
		<h1>newsletter</h1>
		<p>subscribe for latest updates</p>
		<form action="">
			<input type="email" placeholder="enter your email">
			<input type="submit" value="subscribe">
		</form>
	
	</section>
	<section class="footer">
	
		<img src="images/shape-top.png" alt="">
	
		<div class="box-container">
	
			<div class="box">
				<h3 class="heading"> <span>why choose us?</span> </h3>
				<p>We are providing the best quality food in this town. You can get 24*7 hours support for any
					query/help
					with 100% moneyback guarantee! Who else do this in town?</p>
			</div>
	
			<div class="box">
				<h3 class="heading"> <span>locations</span> </h3>
				<a href="#">Dhaka</a>
				<a href="#">Chittagong</a>
				<a href="#">Barisal</a>
				<a href="#">Sylhet</a>
				<a href="#">Rajshahi</a>
				<a href="#">Cumilla</a>
				<a href="#">Rongpur</a>
			</div>
	
			<div class="box">
				<h3 class="heading"> <span>quick links</span> </h3>
				<a href="#">home</a>
				<a href="#">about</a>
				<a href="#">dishes</a>
				<a href="#">chef</a>
				<a href="#">speciality</a>
				<a href="#">contact</a>
				<a href="#">login</a>
			</div>
	
			<div class="box">
				<h3 class="heading"> <span>contact us</span> </h3>
				<p> <i class="fas fa-map-marker-alt"></i> Gulshan, Dhaka-1212, Bangladesh </p>
				<p> <i class="fas fa-envelope"></i> group9restaurant@gmail.com </p>
				<p> <i class="fas fa-globe"></i> www.restaurant.com </p>
			</div>
	
		</div>
	
		<h1 class="credit"> created by <span>Group 9</span> | all rights reserved! | </h1>
	</section>
	
	
	<script type="text/javascript" src="js/script.js"></script>


	
</body>
</html>