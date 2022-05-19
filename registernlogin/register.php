<?php date_default_timezone_set('GMT');  ?>
<?php 
require '../functions.php';
	if(isset($_POST["register"])){
		if(register($_POST)>0){
			echo "<script>
				alert('Admin baru berhasil ditambahkan');
				document.location.href = 'index.php';
				</script>";
		}else{
			echo "<script>
				alert('Admin baru gagal ditambahkan');
				</script>";
		}
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
			padding:32px;
			width: 600px;
			height:950px;
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
		.container form ul li input.pasfoto{
			width: 100%;
			background-color:#dadfe6; 
		}
		.container form ul li button{
			width: 100%;
			background-color: black;
			border-radius:20px;
			color:white;
			margin-top:15px;
			padding:8px;
		}
		.container form ul li button:hover{
			background-color: red;
		}
		.next{
			margin-top: 10px;
			margin-bottom: 25px;
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
	</style>
</head>
<body>
	<div class="container">
		<h1>Register Portal Berita</h1>
		<form action="" method="POST" autocomplete="off" enctype="multipart/form-data">
			<ul>
				<li>
					<label for="username">Username :</label>
					<input type="text" name="username" id="username" placeholder="Input username anda!" autocomplete="off" required>
				</li>
				<li>
					<label for="password">Password :</label>
					<input type="password" name="password" id="password" placeholder="Input password anda!" autocomplete="off" required >
				</li>
				<li>
					<label for="cpassword">Re- entry Password :</label>
					<input type="password" name="cpassword" id="cpassword" placeholder="Input Konfirmasi password anda!" required>
				</li>
				<li>
					<label for="fullname">Fullname :</label>
					<input type="text" name="fullname" id="fullname" placeholder="Input Nama Lengkap anda!" required > 
				</li>
				<li>
					<label for="asal">Asal :</label>
					<input type="text" name="asal" id="asal" placeholder="Input Asal anda!" required>
				</li>
				<li>
					<label for="email">Email :</label>
					<input type="email" name="email" id="email" placeholder="Input Email anda!" required>
				</li>
				<li>
					<label for="gambar">Pas-Photo :</label>
					<input type="file" name="pasfoto" id="gambar" class="pasfoto" required>
					<p style="font-style: oblique;color: red;font-size: 18px;">max-width(200px),max-height(180px)</p>
				</li>
				<li>
					<button type="submit" name="register">Register</button>
				</li>
				<div class="next">
					already have an account ?
					<a href="index.php">Login &raquo;</a>
				</div>
			</ul>
		</form>
	</div>
</body>
</html>