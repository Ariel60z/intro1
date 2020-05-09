<?php
require 'functions.php';
$conn = mysqli_connect("localhost","root","","healthydata");
if( isset($_POST["register"])) {

	if( registrasi($_POST) > 0 ) {
		echo "<script>
		alert('user baru berhasil ditambahkan!');
		</script>";
	} else {
		echo mysqli_error($conn);
	}
}
function registrasi($data){
	global $conn;

	$username = strtolower(stripslashes($data["username"]));
	$password = mysqli_real_escape_string($conn,$data["password"]);
	$password2 = mysqli_real_escape_string($conn,$data["password2"]);

	$result = mysqli_query($conn,"SELECT * FROM healthyuser WHERE name='$username'");
	if( mysqli_fetch_assoc($result) ){
		echo "<script>
		alert('Try another name!');
		</script>";
		return false;
	}


	if($password !== $password2){
		echo "<script>alert('failed');</script>";
		return false;
	}
	
	mysqli_query($conn,"INSERT INTO healthyuser VALUES('$username','$password')");
	header("Location: index.php");
	return mysqli_affected_rows($conn);

}


?>
<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
	<h1>Halaman Registrasi</h1>

	<form action="" method="post">

		<ul>
			<li>
				<label for="username">username :</label>
				<input type="text" name="username" id="username">
			</li>
			<li>
				<label for="password">password :</label>
				<input type="password" name="password" id="password">
			</li>
			<li>
				<label for="password2">konfirmasi password :</label>
				<input type="password" name="password2" id="password2">
			</li>
			<li>
				<button type="submit" name="register">Register!</button>
			</li>
		</ul>
</body>
</html>