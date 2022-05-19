<?php
	date_default_timezone_set('GMT');  
 ?>
<?php 
	session_start();
 	if(!isset($_SESSION["login"]))
 	{
 		echo "<script>
 			alert('Mohon input terlebih dahulu username dan password anda di halaman login');
 			document.location.href='../registernlogin/index.php';
 		</script>";
 	}
?>
<?php 
	require'../functions.php';
	$admin = mysqli_query($conn,"SELECT * FROM users");
	$countadmin = mysqli_num_rows($admin);
	$berita = mysqli_query($conn,"SELECT * FROM berita");
	$countberita = mysqli_num_rows($berita);

 ?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Dashboard Portal Berita</title>
	<!-- Sytle CSS bootstrap -->
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
	<!-- Icon bootstrap -->
	<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.8.1/font/bootstrap-icons.css">
	<!-- Google Font -->
	<link rel="preconnect" href="https://fonts.googleapis.com">
	<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
	<link href="https://fonts.googleapis.com/css2?family=Righteous&display=swap" rel="stylesheet">
	<!-- Font Awesome -->
	<script src="https://kit.fontawesome.com/a076d05399.js" crossorigin="anonymous"></script>
	<!-- Own my Style -->
	<link rel="stylesheet" href="admin.css">
</head>
<body>

	<!-- Awal Topnav -->
	<div class="topnav">
	  <div class="menu"></div>
	  <a class="active">Aplikasi Digital Ekspor | Portal Berita V.2</a>
	 <a class="profile"><i class="bi bi-calendar-minus-fill" style="margin-right: 10px;"></i><?= date('l, d-m-Y'); ?></a>
	  <a href="logout.php" onclick="return confirm('apakah anda yakin keluar??')" ><i class="bi bi-box-arrow-right" style="margin-right: 10px;"></i></a>
	</div>
	<!-- Akhir Topnav -->

	<!-- Menu toggle -->
	<label for="check">
		<i class="fas fa-bars" id="btn"></i>
	</label>
	<input type="checkbox" id="check">
	<!-- Akhir menu toggle -->

	<!-- Awal Sidebar -->
	<div class="sidebar">
	<header><label for="check">
		<i class="fas fa-bars" id="btn"></i>
	</label>
	<input type="checkbox" id="check"></header>
		<ul>
			<li class="dashboard"><a href="index.php"><i class="bi bi-speedometer2"></i>Dashboard</a></li>
			<li class="file"><a href="Data/index.php"><i class="far fa-folder-open"></i>Data Export</a></li>
			<li class="tambah"><a href="Tambah/index.php"><i class="fa fa-plus-square"></i>Add News</a></li>
			<!-- <li class="edit"><a href="Edit/index.php"><i class="fas fa-edit"></i>Edit News</a></li> -->
			<li class="about"><a href="About/index.php"><i class="fas fa-users"></i>Team</a></li>
			<li class="profile"><a href="Profile/index.php"><i class="bi bi-building"></i>About us</a></li>
			<li class="service"><a href="Service/index.php"><i class="fas fa-envelope"></i>Services</a></li>
		</ul>
	</div>
	<!-- Akhir Sidebar  -->
	
	<!-- Awal dashboard -->
	<div class="data" >
		<div class="exam">
			<h1 style="text-align: left;"><b><i class="bi bi-speedometer2" style="margin-right: 10px;"></i>Dashboard </b></h1>
			</div>
		<div class="row">
			<div class="col">
				<div class="card bg-success text-white" style="padding:1px;">
					<div class="card-body">
						<i class="bi bi-house-door-fill" style="position:absolute;top:20px;right:30px;font-size: 90px;opacity: 0.5;"></i>
						<h3 class="card-title" style="text-align: left;" ><b>JUMLAH BERITA</b></h3>
						<div class="display-5"style="margin-left: 0px;"><?= $countberita; ?></div>
						<a href="../admin/Data/index.php" style="text-decoration:none;color:white;margin-left: 0px;">Lihat detail &raquo;</a>
					</div>
				</div>
			</div>
			<div class="col">
				<div class="card bg-warning text-white" style="padding:1px;">
					<div class="card-body">
						<i class="bi bi-person-badge-fill" style="position:absolute;top:20px;right:30px;font-size: 90px;opacity: 0.5;"></i>
						<h3 class="card-title" style="text-align: left;" ><b>JUMLAH ADMIN</b></h3>
						<div class="display-5"style="margin-left: 0px;"><?= $countadmin; ?></div>
						<a href="../admin/about/index.php" style="text-decoration:none;color:white;margin-left: 0px;">Lihat detail &raquo;</a>
					</div>
				</div>
			</div>
		</div>
    </div>
    </div>
     <!-- Akhir dashoard -->

</body>
</html>