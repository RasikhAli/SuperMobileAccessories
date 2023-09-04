<?php
	
	session_start();
	if(!isset($_SESSION['email']))
	{
		header("location:Login-Signup.php");
	}

?>
<?php
	require 'connection.php';
	$query = "SELECT * FROM `products`";
	$result = mysqli_query($conn, $query);
	$p1 = "";
	$p2 = "";
	$p3 = "";
	$p4 = "";
	$p5 = "";
	$p6 = "";
	$p7 = "";
	$p8 = "";

	while($row = mysqli_fetch_array($result))
	{
		if($row['Product_No'] == "Product1") 
		{ 
			$p1 = $row['Product_Name'];  
		}
		else if($row['Product_No'] == "Product2") 
		{ 
			$p2 = $row['Product_Name'];  
		}
		else if($row['Product_No'] == "Product3") 
		{ 
			$p3 = $row['Product_Name'];  
		}
		else if($row['Product_No'] == "Product4") 
		{ 
			$p4 = $row['Product_Name'];  
		}
		else if($row['Product_No'] == "Product5") 
		{ 
			$p5 = $row['Product_Name'];  
		}
		else if($row['Product_No'] == "Product6") 
		{ 
			$p6 = $row['Product_Name'];  
		}
		else if($row['Product_No'] == "Product7") 
		{ 
			$p7 = $row['Product_Name'];  
		}
		else if($row['Product_No'] == "Product8") 
		{ 
			$p8 = $row['Product_Name'];  
		}
	}

?>
<!DOCTYPE html>
<html>
	<head>

		<title>Super Mobile Accessories | Products </title>
		<link rel="stylesheet" type="text/css" href="main.css">
		<link rel="stylesheet" type="text/css" href="Products.css">
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
						<div class="carousel-caption d-none d-md-block">
						</div>
					</div>
				</div>
			</div>
		</div>

		<div class="divproducts">

			<div class="divheading">

				<h1>Our Products</h1>

			</div>

			

			<a href="product1.php" target="">
				<div class="product1">

				</div>
			</a>
			<a href="product2.php" target="">
				<div class="product2">
					
				</div>
			</a>
			<a href="product3.php" target="">
				<div class="product3">
					
				</div>
			</a>
			<a href="product4.php" target="">
				<div class="product4">
					
				</div>
			</a>
			<a href="product1.php" target="">
				<div class="text1">
					<?php echo $p1;  ?>
					<!-- Glowing Protector -->
				</div>
			</a>	
			<a href="product2.php" target="">
				<div class="text2">
					<?php echo $p2;  ?>
					<!-- Glitter Mobile Case -->
				</div>
			</a>
			<a href="product3.php" target="">
				<div class="text3">
					<?php echo $p3;  ?>
					<!-- Covers & Socket -->
				</div>
			</a>
			<a href="product4.php" target="">
				<div class="text4">
					<?php echo $p4;  ?>
					<!-- 360 Rubber Case -->
				</div>
			</a>

			<a href="product5.php" target="">
				<div class="product5">
					
				</div>
			</a>
			<a href="product6.php" target="">
				<div class="product6">
					
				</div>
			</a>
			<a href="product7.php" target="">
				<div class="product7">
					
				</div>
			</a>
			<a href="product8.php" target="">
				<div class="product8">
					
				</div>
			</a>

			<a href="product5.php" target="">
				<div class="text5">
					<?php echo $p5;  ?>
					<!-- Glitter Girly Case -->
				</div>
			</a>
			<a href="product6.php" target="">
				<div class="text6">
					<?php echo $p6;  ?>
					<!-- "I 🤍 Paris" Case -->
				</div>
			</a>
			<a href="product7.php" target="">
				<div class="text7">
					<?php echo $p7;  ?>
					<!-- Glitter Smiley Case -->
				</div>
			</a>
			<a href="product8.php" target="">
				<div class="text8">
					<?php echo $p8;  ?>
					<!-- Guitar Barbie Case -->
				</div>
			</a>
		</div>


		</div>

		<?php
			require 'Footer.html';
		?>

	</body>

</html>