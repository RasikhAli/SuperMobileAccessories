<?php  
	
	session_start();
	if(!isset($_SESSION['email']))
	{
		header("location:Login-Signup.php");
	}
	if(isset($_SESSION['email']))
	{
		if(isset($_SESSION['role']))
		{
			if($_SESSION['role'] == 0)
			{
				header("location:Login-Signup.php");
			}
		}
	}

	require 'connection.php';

	$query = "SELECT * FROM `products`";
	$result = mysqli_query($conn, $query);

	if(isset($_POST['Addbtn'])) 
	{
		$query = "SELECT * FROM `products`";
		$result = mysqli_query($conn, $query);

		$AddID = $_POST['ID'];
		$Pname = $_POST['Pname'];
		$Pdetails = $_POST['Pdetails'];
		$Pprice = trim($_POST['Pprice']);
		$Pnum = $_POST['Pnum'];

		$record = 0;

		if(mysqli_num_rows($result) > 0)
		{
			while($row = mysqli_fetch_array($result))
			{
				if($row['ID'] == $AddID || $row['Product_No'] == $Pnum)
				{
					$record = 1;
					echo '<script>alert("ID/Product Already Exists")</script>';
				}
			}
		}

		if(!$record == 1)
		{
			$query = "INSERT INTO `products`(`ID`, `Product_Name`, `Product_Description`, `Product_Price`, `Product_No`) VALUES ('$AddID','$Pname','$Pdetails','$Pprice','$Pnum')";
			$result = mysqli_query($conn, $query);
		}

	}
	       	 
	if(isset($_POST['Updatebtn']))
	{
		$query = "SELECT * FROM `products`";
		$result = mysqli_query($conn, $query);

		$UPnum = $_POST['UPnum'];
		$UID = $_POST['UID'];
		$UPname = $_POST['UPname'];
		$UPdetails = $_POST['UPdetails'];
		$UPprice = trim($_POST['UPprice']);

		$record = 0;

		while($row = mysqli_fetch_array($result)) 
		{
			if($row['Product_No'] == $UPnum) 
			{
				if($UID == "")
				{
					$query = "UPDATE `products` SET `Product_Name` = '$UPname', `Product_Description` = '$UPdetails', `Product_Price`= '$UPprice' WHERE `Product_No`='$UPnum'";
				}
				else if($UPname == "")
				{
					$query = "UPDATE `products` SET `ID` = '$UID', `Product_Description` = '$UPdetails', `Product_Price`= '$UPprice' WHERE `Product_No`='$UPnum'";
				}
				else if($UPdetails == "")
				{
					$query = "UPDATE `products` SET `ID` = '$UID', `Product_Name` = '$UPname', `Product_Price`= '$UPprice' WHERE `Product_No`='$UPnum'";
				}
				else if($UPprice == "")
				{
					$query = "UPDATE `products` SET `ID` = '$UID', `Product_Name` = '$UPname', `Product_Description` = '$UPdetails' WHERE `Product_No`='$UPnum'";
				}

				if($UID == "" && $UPdetails == "")
				{
					$query = "UPDATE `products` SET `Product_Name` = '$UPname', `Product_Price`= '$UPprice' WHERE `Product_No`='$UPnum'";
				}

				if($UID == "" && $UPname == "")
				{
					$query = "UPDATE `products` SET `Product_Description` = '$UPdetails', `Product_Price`= '$UPprice' WHERE `Product_No`='$UPnum'";
				}

				if($UID == "" && $UPdetails == ""  && $UPname == "" )
				{
					$query = "UPDATE `products` SET `Product_Price`= '$UPprice' WHERE `Product_No`='$UPnum'";
				}
				else
				{
					$query = "UPDATE `products` SET `ID` = '$UID', `Product_Name` = '$UPname', `Product_Description` = '$UPdetails', `Product_Price`= '$UPprice' WHERE `Product_No`='$UPnum'";
				}
				$record = 1;
			}
		}

		if(!$record == 1)
		{
			echo '<script>alert("No Product Found to Update")</script>';
		}
		else
		{
			$result = mysqli_query($conn, $query);
		}
	
	}

	if(isset($_POST['Deletebtn']))
	{
		$query = "SELECT * FROM `products`";
		$result = mysqli_query($conn, $query);

		$DPnum = $_POST['DPnum'];
		$DID = $_POST['DID'];

		$record = 0;

		while($row = mysqli_fetch_array($result)) 
		{

			if($DPnum == "") 
			{
				if(!empty($DID))
				{
					if($row['ID'] == $DID)
					{
						$query = "DELETE FROM `products` WHERE `ID` = '$DID'";
						$record = 1;
					}
				}
				
			}

			if($DID == "")
			{
				if(!empty($DPnum))
				{
					if($row['Product_No'] == $DPnum)
					{
						$query = "DELETE FROM `products` WHERE `Product_No` = '$DPnum'";
						$record = 1;
					}
				}
			}
		}


		if(!$record == 1)
		{
			echo '<script>alert("No Product Found to Delete")</script>';
		}
		else
		{
			$result = mysqli_query($conn, $query);
		}

	}

?>

<!DOCTYPE html>
<html>
	<head>

		<title>Super Mobile Accessories | ADMIN </title>
		<link rel="stylesheet" type="text/css" href="main.css">
		<link rel="stylesheet" type="text/css" href="Admin.css">
		<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

	</head>

	<body>

		<?php
			require 'Header.php';
		?>

		<div class="divBG">
			<center>
				<div class="divAVUD" style="min-height: 500px;">
					<center>
						<h1>GET Products Details</h1>
						<p>View Products</p>
					</center>

					<form method="post">

						<hr>

						<div class="AVUD">
							
							<center>
								<p>Enter Product ID</p>
						        <input type="text" name="VID" placeholder="ID" required>
						        <br><br>
						    </center>
						    <?php  
								if(isset($_POST['Getbtn']))
								{
									$query = "SELECT * FROM `products`";
									$result = mysqli_query($conn, $query);
									$ID = $_POST['VID'];

									while($row = mysqli_fetch_array($result)) {
										if($row['ID'] == $ID) 
										{
							?>
						        <p style="float: left; margin-left: 15%;">Product Name: </p>
						        <p style="float: left; margin-left: 6%;"><?php echo $row['Product_Name']; ?></p>
						        <br><br>
						        <p style="float: left; margin-left: 15%;">Product Price: </p>
						        <p style="float: left; margin-left: 7.5%;"><?php echo $row['Product_Price']; ?></p>
						        <br><br>
						        <p style="float: left; margin-left: 15%;">Product Details: </p>
						        <p style="float: left; margin-left: 5.5%;"><?php echo $row['Product_Description']; ?></p>
						        <br><br>
						        <p style="float: left; margin-left: 15%;">Product Number: </p>
						        <p style="float: left; margin-left: 4%;"><?php echo $row['Product_No']; ?></p>
						        <br><br>
						    
						    <?php } } } ?>
						    
						    <center>
						        <input type="submit" value="Get Product Details" name="Getbtn">
							</center>

						</div>

						<br>
						<hr>

					</form>
				</div>
				<div class="divAVUD">
					<center>
						<h1>ADD Products Details</h1>
						<p>Enter More Products</p>
					</center>

					<form action="" method="post">

						<hr>

						<div class="AVUD">

							<center>
						        <input type="text" name="ID" placeholder="ID" required>
						        <br><br>
						        <input type="text" name="Pname" placeholder="Product Name" required>
						        <br><br>
						        <input type="text" name="Pdetails" placeholder="Product Details" required>
						        <br><br>
						        <input type="text" name="Pprice" placeholder="Product Price" required>
						        <br><br>
						        <input type="text" name="Pnum" placeholder="Product Number" required>
						        <br><br>
						        <input type="submit" value="Add Product" name="Addbtn">
							</center>

						</div>

						<br>
						<hr>

					</form>
				</div>
				<div class="divAVUD">
					<center>
						<h1>Update Products Details</h1>
						<p>Update Existing Products</p>
					</center>

					<form action="" method="post">

						<hr>

						<div class="AVUD">

							<center>
								<p>Enter Product Number</p>
						        <input type="text" name="UPnum" placeholder="Product Number" required>
						        <br>
						        <hr>
						        <input type="text" name="UID" placeholder="ID" >
						        <br><br>			       
								<input type="text" name="UPname" placeholder="Product Name" >
						        <br><br>
						        <input type="text" name="UPdetails" placeholder="Product Details" >
						        <br><br>
						        <input type="text" name="UPprice" placeholder="Product Price" >
						        <br><br>
						        <input type="submit" value="Update Details" name="Updatebtn">
							</center>

						</div>

						<br>
						<hr>

					</form>
				</div>
				<div class="divAVUD" style="min-height: 450px;">
					<center>
						<h1>Delete Products Details</h1>
						<p>Delete Existing Products</p>
					</center>

					<form action="" method="post">

						<hr>

						<div class="AVUD">

							<center>
								<p>Enter Product Number</p>
						        <input type="text" name="DPnum" placeholder="Product Number">
						        <br><br>
						        <p>OR</p>
						        <br>
						        <p>Enter Product ID</p>
						        <input type="text" name="DID" placeholder="ID" >
						        <br><br>
						        <input type="submit" value="Delete Details" name="Deletebtn">
							</center>

						</div>

						<br>
						<hr>

					</form>
				</div>

			</center>
		</div>
		

		<?php
			require 'Footer.html';
		?>

	</body>

</html>