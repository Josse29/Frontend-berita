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
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title> Pesan ke team</title>
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
	<!-- Css data rable -->
	<link rel="stylesheet" href="https://cdn.datatables.net/1.11.5/css/jquery.dataTables.min.css">
	<link rel="stylesheet" href="https://cdn.datatables.net/buttons/2.2.2/css/buttons.dataTables.min.css">
	<!-- Own my Style -->
	<link rel="stylesheet" href="admin.css">
</head>
<body>
	<!-- Awal Topnav -->
	<div class="topnav">
	  <div class="menu"></div>
	  <a class="active">Aplikasi Digital Ekspor | Portal Berita V.2</a>
	  <a class="admin"><i class="bi bi-person-circle" style="margin-right: 5px;"></i>Hi, Josse Surya Pinem !</a>
	  <a href="../logout.php" onclick="return confirm('apakah anda yakin keluar??')"><i class="bi bi-box-arrow-right" style="margin-right: 5px;"></i></a>
	</div>
	<!-- Akhir Topnav -->
	<label for="check">
		<i class="fas fa-bars" id="btn"></i>
	</label>
	<input type="checkbox" id="check">
	<!-- Awal Sidebar -->
	<div class="sidebar">
	<header><label for="check">
		<i class="fas fa-bars" id="btn"></i>
	</label>
	<input type="checkbox" id="check"></header>
		<ul>
			<li class="dashboard"><a href="../index.php"><i class="bi bi-speedometer2"></i>Dashboard</a></li>
			<li class="file"><a href="../Data/index.php"><i class="far fa-folder-open"></i>Data Export</a></li>
			<li class="tambah"><a href="../Tambah/index.php"><i class="fa fa-plus-square"></i>Add News</a></li>
			<!-- <li class="edit"><a href="../Edit/index.php"><i class="fas fa-edit"></i>Edit News</a></li> -->
			<li class="about"><a href="../About/index.php"><i class="fas fa-users"></i>About us</a></li>
			<li class="profile"><a href="../Profile/index.php"><i class="fas fa-user-edit"></i>Edit Profile</a></li>
			<li class="service"><a href="index.php"><i class="fas fa-envelope"></i>Services</a></li>
		</ul>
	</div>
	<!-- Akhir Sidebar  -->
	<!-- Awal Table -->
	<div class="data">
		<div class="judul">
			<h1><b>Data List Eksport </b></h1>
		</div>
		<table id="example" class="table table-striped scroll" style="width:100%">
	        <thead>
	            <tr>
	                <th>No</th>
	                <th>Tanggal</th>
	                <th>Judul</th>
	                <th>Jenis</th>
	                <th>Asal</th>
	                <th>Tujuan</th>
	                <th>Isi</th>
	                <th>Aksi</th>
	            </tr>
	        </thead>
	       <tbody>
			       	<td>1</td>
			       	<td>2</td>
			       	<td>2</td>
			       	<td>3</td>
			       	<td>4</td>
			       	<td>5</td>
			       	<td>6</td>
			       	<td>7</td>
	       </tbody>
	        <tfoot>
	            <tr>
	                <th>No</th>
	                <th>Tanggal</th>
	                <th>Judul</th>
	                <th>Jenis</th>
	                <th>Asal</th>
	                <th>Tujuan</th>
	                <th>Isi</th>
	                <th>Aksi</th>
	            </tr>
	        </tfoot>
	    </table>
    </div>
     <!-- Akhir table -->
	<!-- Script Java Script bootstrap  -->
	<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
	<!-- Script Data table -->
	<script src="https://code.jquery.com/jquery-3.5.1.js"></script>
	<script src="https://cdn.datatables.net/1.11.5/js/jquery.dataTables.min.js"></script>
	<script src="https://cdn.datatables.net/buttons/2.2.2/js/dataTables.buttons.min.js"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/jszip/3.1.3/jszip.min.js"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.53/pdfmake.min.js"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.53/vfs_fonts.js"></script>
	<script src="https://cdn.datatables.net/buttons/2.2.2/js/buttons.html5.min.js"></script>
	<script src="https://cdn.datatables.net/buttons/2.2.2/js/buttons.print.min.js"></script>
	<script>
	$(document).ready(function() {
    $('#example').DataTable( {
        dom: 'Bfrtip',
        buttons: [
            'copy', 'csv', 'excel', 'pdf', 'print'
        ]
    } );
} );
	</script>
</body>
</html>