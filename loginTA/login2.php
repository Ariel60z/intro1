<!-- <?php
$conn = mysqli_connect("localhost","root","","healthydata");
require 'functions.php';
if( isset($_POST["login"]) ){
	if($_POST['login'] =="login"){
	$username = $_POST["username"];
	$password = $_POST["password"];

	$result = mysqli_query($conn, "SELECT * FROM healthyuser WHERE name = '$username' AND pass = '$password'");


	if( mysqli_num_rows ( $result ) == 1){


		$row = mysqli_fetch_assoc($result);
		if(password_verify($password, $row["password"]) ){
			header("Location: index.html");
			exit;
		}else{
			password_hash($pass, PASSWORD_BCRYPT, $row);
		}
	}
	}
}





?> -->

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


			    <div class="row">
					<button type="submit" name="login" value="login" class="btnlogin">Sign-in</button>
						<!--<button>Sign-In</button>-->
					<button>Sign-Up</button>
	</div>
			</li>
		</ul>
	</form>

	

</body>

</html>