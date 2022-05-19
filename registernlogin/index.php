<?php date_default_timezone_set('GMT');  ?>
<?php 
session_start();
require '../functions.php';
	if(isset($_POST["login"])){
		$username = $_POST["username"];
		$password = $_POST["password"];
		$result = mysqli_query($conn,"SELECT * FROM users WHERE username = '$username'");

		// cek username 
		if(mysqli_num_rows($result)=== 1){
		
			// cek password
			$row = mysqli_fetch_assoc($result);
			if(password_verify($password, $row["password"])){
		
				// cek session
				$_SESSION["login"] = true;
			
				echo "<script>
					alert('Login berhasil');
					document.location.href='../admin/index.php';					
					</script>";
				exit;
			}
		}$error = true;
	}
 ?>

<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>ADE | Portal Berita </title>
	<!-- link style bootstrap -->
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
	<!-- google font -->
	<link rel="preconnect" href="https://fonts.googleapis.com">
	<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
	<link href="https://fonts.googleapis.com/css2?family=Righteous&display=swap" rel="stylesheet">
	<!-- my own style -->
	<style>
		body{
			background-image: url(asset/1.jpg);
			background-repeat: no-repeat;
			background-size: cover;
			min-height: 100vh;
			display: grid;
			justify-content: center;
			align-items: center;
		}
		.container{
			background-color: #dadfe6;
			padding:30px;
			width: 600px;
			font-family:'Gill Sans','Gill Sans MT',Calibri,'Trebuchet MS',sans-serif;
			font-size: 25px;
			margin:30px auto;
			border-radius:15px;
		}
		.container h1 {
			text-align: center;
			font-family:righteous;		
		}
		.container form ul li{
			list-style: none;
		}
		.container form ul li label{
			display: block;
		}
		.container form ul li input{
			width: 100%;
			background-color: #e2ebd1;
			padding:10px;
			border:none;
		}
		.container form ul li button{
			width: 100%;
			background-color: black;
			border-radius:20px;
			color:white;
			padding:8px;
			margin-top: 30px;
		}
		.container form ul li button:hover{
			background-color: red;
		}
		.next{
			margin-top:20px;
			text-align: right;
			color:blue;

		}
		.next a {
			text-decoration: none;
			color:green;
		}
		.next a:hover{
			color:red;
		}
		p{
			color:red;
			font-style: oblique;
			margin-bottom:-10px;
		}
	</style>
</head>
<body>
	<div class="container">
		<h1>Login Portal Berita</h1>
		<form action="" method="POST" autocomplete="off">
			<ul>
				<li>
					<label for="username">Username :</label>
					<input type="text" name="username" id="username" placeholder="Input username anda!" autocomplete="off" required>
				</li>
				<li>
					<label for="password">Password :</label>
					<input type="password" name="password" id="password" placeholder="Input password anda!" autocomplete="off" required >
				</li>
				<?php if(isset($error)): ?>
					<p>Username / password anda salah</p>
				<?php endif; ?>
				<li>
					<button type="submit" name="login">Login </button>
				</li>
				<div class="next">
					already haven't an account ?
					<a href="register.php">Register &raquo;</a>
				</div>
			</ul>
		</form>
	</div>
</body>
</html>