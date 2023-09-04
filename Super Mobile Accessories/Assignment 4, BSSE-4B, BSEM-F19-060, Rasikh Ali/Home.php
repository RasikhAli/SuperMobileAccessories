<?php
	
	session_start();
	if(!isset($_SESSION['email']))
	{
		header("location:Login-Signup.php");
	}
	

?>
<!DOCTYPE html>
<html>
	<head>

		<title>Super Mobile Accessories | Home Page </title>

		<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
		

	</head>

	<body>

		<?php
			require 'Header.php';
		?>

		<div class="bd-example">
			<div id="carouselExampleCaptions" class="carousel slide" data-ride="carousel">
				<ol class="carousel-indicators">
					<li data-target="#carouselExampleCaptions" data-slide-to="0" class="active"></li>
					<li data-target="#carouselExampleCaptions" data-slide-to="1"></li>
				</ol>
				<div class="carousel-inner" role="listbox">
					<div class="carousel-item active">
						<img class="d-block w-100" data-src="holder.js/900x300?auto=yes&bg=777&fg=555&text=First slide" alt="First slide" src="https://i.ibb.co/515jGVh/19.png" style="filter: blur(3px);">
						<div class="carousel-caption d-none d-md-block">
							<h3>Super Mobile Accessories</h3>
							<p></p>
						</div>
					</div>
					<div class="carousel-item">
						<img class="d-block w-100" data-src="holder.js/900x300?auto=yes&bg=666&fg=444&text=Second slide" alt="Second slide" src="https://i.ibb.co/515jGVh/19.png" style="filter: blur(3px); filter: invert(50);">
						<div class="carousel-caption d-none d-md-block">
							<h3>Super Mobile Accessories</h3>
							<p></p>
						</div>
					</div>
				</div>
				<a class="carousel-control-prev" href="#carouselExampleCaptions" role="button" data-slide="prev">
					<span class="carousel-control-prev-icon" aria-hidden="true"></span>
					<span class="sr-only">Previous</span>
				</a>
				<a class="carousel-control-next" href="#carouselExampleCaptions" role="button" data-slide="next">
						<span class="carousel-control-next-icon" aria-hidden="true"></span>
						<span class="sr-only">Next</span>
				</a>
			</div>
		</div>

		<div class="divtext1">

			<h3>
				WE DEAL IN ALL MOBILE ACCESSORIES,<br>
				NEW AND BRAND NEW PHONES
			</h3>

		</div>

		<div class="divtext2">
			<a href="">Latest Products</a>
		</div>

		<div class="container-fluid divproducts">
			<div class="row">
				<div class="col-xl-4 divpleft">
					<div class="divleftimg">
						<img class="rounded-lg border border-warning" src="https://i.ibb.co/mHBYDng/143257745-101391878636686-4104619594979026491-n.jpg" height="250px" width="296px">
					</div>
					<div class="divleftname">
						Glowing Glass Protector
					</div>
				</div>

				<div class="col-xl-4 divpcenter">
					<div class="divcenterimg">
						<img class="rounded-lg border border-warning" src="https://i.ibb.co/8mL0nfB/142114471-101361305306410-2325627881793470297-n.jpg" height="250px" width="296px">
					</div>
					<div class="divcentername">
						New Gliter Cover
					</div>
				</div>

				<div class="col-xl-4 divpright">
					<div class="divrightimg">
						<img class="rounded-lg border border-warning" src="https://i.ibb.co/3SCmPbn/142414263-101377558638118-3684385458910283815-n.jpg" height="250px" width="296px">
					</div>
					<div class="divrightname">
						Covers & Pop Socket
					</div>
				</div>
			</div>
		</div>

		<?php
			require 'Footer.html';
		?>

	</body>

</html>