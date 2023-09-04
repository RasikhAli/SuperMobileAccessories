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

?>

<!DOCTYPE html>
<html>
	<head>

		<title>Super Mobile Accessories | Product-2 </title>
		<link rel="stylesheet" type="text/css" href="main.css">
		<link rel="stylesheet" type="text/css" href="Product2.css">
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

			<div class="divheading1">

				<?php while($row = mysqli_fetch_array($result)) {  ?>
				<h1><?php if($row['Product_No'] == "Product2") { echo $row['Product_Name']; ?> Details:</h1>

			</div>


			<a href="product2.php" target="_blank">
				<div class="product2">

				</div>
			</a>

			<div class="product2details">
				
				<p>Product Price: <span><?php echo $row['Product_Price']; ?>pkr</span></p>
				<p>Product Code : <span><?php echo $row['ID']; ?></span></p>
				
				<p>Product Stock Left: <span>5pieces</span></p>
				<p>Available For: <span>Honor, Samsung & Iphone</span></p>

			</div>

			<div class="divheading2">

				<h1>Product Details:</h1>

			</div>

			<div class="productdetails">
				<p>
					▣ <?php echo $row['Product_Description']; ?>
				</p>
				<p>
					▣ Only iPhone, Honor & Samsung models are available
				</p>
				<p>
					▣ <?php echo $row['Product_Price']; ?> + 90rs with HOME DELIVERY
				</p>
			</div>
			
			<?php } } ?>

		</div>


		</div>

		<?php
			require 'Footer.html';
		?>

	</body>

</html>