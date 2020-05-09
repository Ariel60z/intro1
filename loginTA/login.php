<?php
$conn = mysqli_connect("localhost","root","","healthydata");
require 'functions.php';
if( isset($_POST["login"]) ){
	if($_POST['login'] =="login"){
		$options = [
			'cost' => 10,];



	$username = $_POST["username"];
	$password = $_POST["password"];
	$password_hash = password_hash($password,PASSWORD_BCRYPT, $options);

	$result = mysqli_query($conn, "SELECT * FROM healthyuser WHERE name = '$username' AND pass = '$password'");


	if( mysqli_num_rows ( $result ) == 1){


		$row = mysqli_fetch_assoc($result);
		if(password_verify($row["pass"],$password_hash) ){
			header("Location: index.html");
			exit;
		}else{
			header("Location: lupasandi.html");
		}
	}
	}
}





?>

<!DOCTYPE html>



<html>

<head>
	<link rel="stylesheet" type="text/css" href="style/login.css">
	<link href="https://fonts.googleapis.com/css?family=Changa&display=swap" rel="stylesheet">
	<link rel="shortcut icon" href="assets/5.png" type="image/x-icon">
	<link rel="icon" href="assets/5.png" type="image/x-icon">
	<title>Login Page</title>
</head>

<body>

	<div class="header">
		<h1>HEALTH-Y</h1>
	</div>

	<div class="logo">
		<img src="assets/5.png" alt="logo">
	</div>	

	<form action="" method="POST">
		<ul>
			<li>
				<div class="box">
					<div class="finput">
						<input type="text" name="username" placeholder="username" required>
					</div>

					<div class="finput">
						<input type="password" name="password" placeholder="Password please" required>
					</div>
			    </div>


			    <div class="row" style="margin: -33px 53px;">
			    	<a href="Registrasi.php" style="color: white;background-color: #777;border-radius: 10px;text-decoration: none;padding:3px 3px;align-items: center;">Sign Up</a><br>	
					<button type="submit" name="login" value="login" class="btnlogin">Sign-in</button>
						<!--<button>Sign-In</button>-->
					
	</div>
			</li>
		</ul>
	</form>

	

</body>

</html>