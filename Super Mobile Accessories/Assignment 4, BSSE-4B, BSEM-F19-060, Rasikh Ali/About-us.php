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

		<title>Super Mobile Accessories | About-Us </title>
		
		<link rel="stylesheet" type="text/css" href="About-us.css">

		<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
	</head>

	<body>

		<?php
			require 'Header.php';
		?>

		<div class="bd-example">
			<div id="carouselExampleCaptions" class="carousel slide" data-ride="carousel">
				<div class="carousel-inner" role="listbox">
					<div class="carousel-item active">
						<img class="d-block w-100" data-src="holder.js/900x300?auto=yes&bg=777&fg=555&text=First slide" alt="First slide" src="https://i.ibb.co/515jGVh/19.png" style="filter: blur(3px);">
					</div>
				</div>
			</div>
		</div>
		<div class="divbannertext1">
			<h1>About Our Business</h1>
			<p>
				<span>Super Mobile Accesories</span> is dedicated to introduce unique and fine Products related to Mobiles.

				We are also committed to provide a delightful and exciting customer experience to our online buyers in Pakistan, by providing quality products on best price, easy return policy and multiple payment options including pre and post sale customer support.
			</p>
		</div>


		</div>

		<?php
			require 'Footer.html';
		?>

	</body>

</html>