<?php 
	
	session_start();
	if(!isset($_SESSION['email']))
	{
		header("location:Login-Signup.php");
	}
	
	if(isset($_POST['submitbtn']))
	{
		$Fname = $_POST['nameF'];
		$Lname = $_POST['nameL'];
		$phone = $_POST['phone'];
		$email = $_POST['email'];
		$msg   = $_POST['messageField'];
		$msg   = addslashes($msg);

		require 'connection.php';

		$query = "INSERT INTO `contactusform`(`Fname`, `Lname`, `Contact`,`Email`,`Message`) VALUES ('$Fname','$Lname','$phone','$email','$msg')";
		$result = mysqli_query($conn, $query);
	}

?>

<!DOCTYPE html>
<html>
	<head>

		<title>Super Mobile Accessories | Products </title>
		<link rel="stylesheet" type="text/css" href="main.css">
		<link rel="stylesheet" type="text/css" href="Contact-us.css">
		<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
		
	</head>

	<body>

		<?php
			require 'Header.php';
		?>

		<div class="divBG">

			<div class="divContactUs">
				
				<div class="divForm">

					<div class="ContactUs">
						
						<center>
							<h1>Contact Us</h1>
							<p>We will get back to you ASAP!</p>
						</center>

					</div>


					<hr>


					<div class="ContactFields">
						
						<form action="" method="post">

							
							<div class="Fname">

								<img src="https://i.ibb.co/MMCrb0Q/usercircle.png" alt="usercircle" height="50px" width="50px">
								<input type="text" name="nameF" required placeholder="FirstName" >

							</div>

							<div class="Lname">

								<input type="text" name="nameL" required placeholder="LastName" >

							</div>

							<div class="OFields">

								<img src="https://i.ibb.co/DDBTMH7/phone-circle.png" alt="phone-circle" height="50px" width="50px" style="margin-right: 1%;">

								<input type="phone" placeholder="03XX-XXXXXXX" pattern="{0}{3}[0-9][0-9]-[0-9][0-9][0-9][0-9][0-9][0-9][0-9]" required name="phone">
								
								<br>
								<br>
								<img class="email" src="https://i.ibb.co/bW0k4KH/email-circle.webp" alt="email-circle" height="50px" width="50px">
								<input type="Email" required placeholder="Email@email.com" name="email">

								<br>

								<textarea name="messageField" rows="3" cols="70" placeholder="Message..." required ></textarea>

							</div>

							<br>

							<input type="submit" value="Send" name="submitbtn">

						</form>

					</div>

				</div>

			</div>

		</div>




		<?php
			require 'Footer.html';
		?>

	</body>

</html>