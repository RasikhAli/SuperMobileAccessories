<!DOCTYPE html>
<html>
	<head>
		<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
		<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
		<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>

		<link rel="stylesheet" type="text/css" href="main.css">
	</head>
	<body>
		<div class="container-flex divhead">
			
			<div class="divleft">

			</div>

			<div class="divright">
				
				<div class="container-flex divrightsearch">
					<form class="form-inline my-2 my-lg-5">
						<input class="form-control mr-lg-1" type="text" placeholder="Search">
						<button class="btn btn-outline-warning my-6 my-sm-0" type="button">Search</button>
					</form>
				</div>
				<div class="container-flex divrighticons">

					<a href="https://www.facebook.com/Super-Mobile-Accessories-100697252039482/" target="_blank" class=""><p>Facebook 
					<i class="fa fa-facebook"></i></p></a>

					<a href="https://www.instagram.com/rasikh.ali.12/" target="_blank"><p>Instagram 
					<i class="fa fa-instagram"></i></p></a>
					
				</div>

			</div>

		</div>

	 	<nav class="navbar navbar-dark sticky-top" style="width: 100%;">
		 	<ul class="list1" style="width: 100%;">
				<li style="margin-right: 5%;">
					<a href="Home.php" target="">Home</a>
				</li>
				<li style="margin-right: 5%;">
					<a href="About-us.php" target="">About Us</a>
				</li>
				<li style="margin-right: 5%;">
					<a href="Products.php" target="">Products</a>
				</li>
				<li style="margin-right: 5%;">
					<a href="Contact-us.php" target="">Contact Us</a>
				</li>
				<?php 
					if(isset($_SESSION['email']))
					{
						if(isset($_SESSION['role']))
						{
							if($_SESSION['role'] == 1)
							{
				?>
								<li style="margin-left: 3%;">
									<a href="Admin.php" target="">ADMIN Panel</a>
								</li>
								<li style="margin-left: 3%;">
									<a href="Login-Signup.php" target="">Login/Sign-up</a>
								</li>
				<?php
							}
							else
							{
				?>
								<li style="margin-left: 10%;">
									<a href="Login-Signup.php" target="">Login/Sign-up</a>
								</li>
				<?php
							}
						}
					}
					else
					{	
				?>
						<li style="margin-left: 10%;">
								<a href="Login-Signup.php" target="">Login/Sign-up</a>
						</li>
				<?php
						
					}
				?>
				

			</ul>
		</nav> 

	</body>
</html>