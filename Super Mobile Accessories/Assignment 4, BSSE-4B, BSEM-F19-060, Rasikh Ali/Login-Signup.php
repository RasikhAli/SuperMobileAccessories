<?php
	session_start();
	if(isset($_POST['loginbtn']))
	{
		$email = $_POST['email'];
		$pass  = $_POST['password'];

		require 'connection.php';

		$query = "SELECT * FROM `user`";
		$result = mysqli_query($conn, $query);
		
		while($row = mysqli_fetch_array($result))
		{
			if($row['Email'] == $email)
			{
				if($row['Password'] == $pass)
				{

					if(!isset($_SESSION['email']))
					{
						$_SESSION['email'] = $email;
						if($row['role'] == 0)
						{
							$_SESSION['role'] = 0;
							header("location:Home.php");
						}
						else if($row['role'] == 1)
						{
							$_SESSION['role'] = 1;
							header("location:Admin.php");
						}
					}
					else
					{
						session_unset();
						$_SESSION['email'] = $email;
						if($row['role'] == 0)
						{
							$_SESSION['role'] = 0;
							header("location:Home.php");
						}
						else if($row['role'] == 1)
						{
							$_SESSION['role'] = 1;
							header("location:Admin.php");
						}
					}

				}
				else
				{
					echo '<script>alert("Incorrect Password")</script>';
				}
			}
			else
			{
				echo '<script>alert("Wrong Credentials")</script>';
			}
		}
	}

	if(isset($_POST['signupbtn']))
	{
		$semail = $_POST['s-email'];
		$spass  = $_POST['s-pass'];

		$record = 0;

		require 'connection.php';

		$query = "SELECT * FROM `user`";
		$result = mysqli_query($conn, $query);

		
		if(mysqli_num_rows($result) > 0)
		{
			while($row = mysqli_fetch_array($result))
			{
				if($row['Email'] == $semail)
				{
					$record = 1;
					echo '<script>alert("Data Already Exists")</script>';
				}
			}
		}

		if(!$record == 1)
		{
			$query = "INSERT INTO `user`(`Email`, `Password`, `Role`) VALUES ('$semail','$spass','0')";
			$result = mysqli_query($conn, $query);
			echo '<script>alert("Data Entered Successfully, Can Login Now")</script>';
		}
	}

	if (isset($_POST['logoutbtn'])) 
	{	
		if(isset($_SESSION['email']))
		{
			session_unset();
			echo '<script>alert("Successfully Logged Out")</script>';
		}
	}

?>

<!DOCTYPE html>
<html>
	<head>

		<title>Super Mobile Accessories | Login/Sign-up </title>
		<link rel="stylesheet" type="text/css" href="main.css">
		<link rel="stylesheet" type="text/css" href="Login-Signup.css">
		<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
		
	</head>

	<body>

		<?php
			require 'Header.php';
		?>

		<div class="divBG">

			<div class="divLogin">
				
				<div class="Login-head">

					<center>
						<h1>Login Panel</h1>
					</center>
						<?php 
							if(isset($_SESSION['email']))
							{
								if(isset($_SESSION['role']))
								{
						?>
						<form action="" method="post">
							<button name="logoutbtn" style="float: right; margin-top: -7%; border: none; border-radius: 5px; margin-right: 5%; color: white; font-weight: bold; background-color: rgb(225,138,7); width: 15%;">
								Log Out
							</button>
						</form>
						<?php
								}
							}
						?>
					<center>
						<br>
						<p>Login Manually</p>
					</center>

					<form action="" method="post">

						<hr>

						<div class="Login">

							<center>
						        <input type="email" name="email" placeholder="email" required>
						        <br><br>
						        <input type="password" name="password" placeholder="Password" required>
						        <br><br>
						        <input type="submit" value="Login" name="loginbtn">
							</center>

						</div>

						<br>
						<hr>

						<div class="LoginOther">

							<center>
						        <a href="#" class="facebook butn">
						          <i class="fa fa-facebook fa-fw"></i> Login with Facebook
						         </a>
						         <br><br>
						        <a href="#" class="twitter butn">
						          <i class="fa fa-twitter fa-fw"></i> Login with Twitter
						        </a>
					        </center>

					    </div>

					</form>

				</div>

			</div>

			<div class="divSignup">
				
				<div class="Sign-up-head">
					
					<center>
						<h1>Sign-Up Panel</h1>
						<br>
						<p>Please fill in this form to create an account.</p>
					</center>

					<form action="" method="post">

						<hr>
						<br>

						<div class="Sign-up">
							<label for="email"><b>Email</b></label><br>
						    <input type="text" placeholder="Enter Email" name="s-email" required>
						    
						    <br>

						    <label for="psw"><b>Password</b></label><br>
						    <input type="password" placeholder="Enter Password" name="s-pass" required>

						    <br>

						    <label for="psw-repeat"><b>Repeat Password</b></label><br>
						    <input type="password" placeholder="Repeat Password" name="s-pass-repeat" required>

						    <br>

						    <label>
						      <input type="checkbox" checked="checked" name="remember" style="margin-bottom:15px"> Remember me
						    </label>

						    <p>By creating an account you agree to our <a href="#" style="color:dodgerblue">Terms & Privacy</a>.</p>

	     				 	<button type="submit" class="signupbtn" name="signupbtn">Sign Up</button>

					    </div>

					</form>

				</div>

			</div>
			
		</div>


		

		<?php
			require 'Footer.html';
		?>

	</body>

</html>