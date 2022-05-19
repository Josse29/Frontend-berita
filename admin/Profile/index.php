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
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>ADE | About Us </title>
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
	  <a class="menu" style="font-size: 20px;"><i class="bi bi-calendar-minus-fill" style="margin-right: 10px;"></i><?= date('l, d-m-Y') ;?></a>
	  <a href="../../registernlogin/index.php" onclick="return confirm('apakah anda yakin keluar??')"><i class="bi bi-box-arrow-right" style="margin-right: 5px;"></i></a>
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
			<li class="about"><a href="../About/index.php"><i class="fas fa-users"></i>Team</a></li>
			<li class="profile"><a href="index.php"><i class="bi bi-building"></i>About us</a></li>
			<li class="service"><a href="../Service/index.php"><i class="fas fa-envelope"></i>Services</a></li>
		</ul>
	</div>
	<!-- Akhir Sidebar  -->

	<!-- Awal contain -->
	<div class="data">
		<div class="judul">
			<h1><b>About Us</b></h1>
		</div>
		<div class="porto" style="border:1px solid #ccc;padding:20px;text-align:justify;">
			<h1>Lorem ipsum dolor, sit amet, consectetur adipisicing elit. At, voluptate!</h1>
			<p> <img src="../../asset/4.jpg" alt="" style="width: 400px;float:left;margin-right: 12px;">Lorem, ipsum dolor sit, amet consectetur adipisicing elit. Iste iusto explicabo enim ipsa, earum nostrum obcaecati neque consequuntur, voluptatibus ea modi fugiat id odit deleniti hic soluta cumque eius repellat tenetur tempora architecto libero vitae quidem. Numquam totam rem quidem repellendus vel tempore sit asperiores quos molestias quam deleniti eligendi, vitae ratione ab? Illo eveniet laboriosam velit obcaecati nesciunt aliquid nobis, corporis, sequi consectetur laborum facilis sed sapiente repellat quaerat, non. Eum saepe architecto quam quasi placeat voluptatem, ipsum tempora ipsa consequatur recusandae nisi quae accusantium quisquam ab similique eius optio voluptas, itaque ut laborum eaque modi est. Eaque, aliquid a sed incidunt, explicabo soluta sit vel nemo perspiciatis, aspernatur totam provident. Iusto dolorem atque veniam non excepturi veritatis minus amet tempora itaque ipsam totam ducimus architecto sit explicabo quos mollitia, et. Dolorum reprehenderit, ea possimus hic, veniam minima. Quae dicta numquam, fugiat laboriosam. Provident enim, sit consectetur cupiditate sint temporibus assumenda, similique? Vitae, commodi. Esse rerum iusto repellendus tenetur rem, qui tempora, adipisci laudantium nam quam voluptates dolor atque enim, eos non blanditiis vel animi molestias nulla. Optio nulla consequuntur officiis dolorem impedit labore enim aut iusto deserunt dignissimos eius, ad repellat hic at sunt dolor facilis facere animi?Lorem ipsum dolor sit, amet consectetur adipisicing elit. Et in dolores magni laboriosam, perferendis delectus neque adipisci est, id magnam accusamus molestias ut temporibus rerum unde iure. Blanditiis voluptate, aspernatur consequuntur voluptas veniam fugit quo aut, consectetur impedit ea, deleniti ut possimus. Libero, numquam dolores labore nisi, nesciunt nemo? Optio, nam, esse obcaecati unde fugiat eligendi ea explicabo aliquam, voluptatibus temporibus minus iste cum nihil, voluptas enim quia. Corporis sit nostrum tempora ipsam in amet similique perspiciatis recusandae deserunt veniam culpa praesentium dignissimos sint esse illo, explicabo est non dolorem, corrupti eveniet voluptas ipsum cupiditate tenetur dolorum suscipit. Quas minima dolorem quos itaque quo aspernatur omnis sit hic corrupti amet consectetur dignissimos odit natus, asperiores error, unde qui rerum quasi. Explicabo temporibus error nobis iste obcaecati modi hic vel exercitationem, ex, sunt aperiam quibusdam sint. Totam facilis accusantium est nobis deleniti iure quidem sit laudantium architecto. Et dicta mollitia inventore nesciunt minima expedita, nam ducimus quae magnam quos veritatis dolore ab temporibus quidem consequatur eaque accusamus at! Temporibus ipsum officiis ratione blanditiis maiores impedit, nam veniam! Sequi consectetur laborum illum magnam corrupti quasi? Quos dicta repellat hic commodi doloribus amet quibusdam! Iure facilis minus itaque, voluptatem soluta quia debitis, dolorem.</p>
			<p>Lorem, ipsum dolor sit amet consectetur, adipisicing elit. Id atque asperiores, suscipit, ipsa voluptatem eveniet inventore incidunt aperiam sit vero optio corporis et at cumque enim. Nihil iusto soluta ad sapiente architecto fuga modi perspiciatis odio obcaecati tempora dolorem et sequi saepe suscipit reiciendis, pariatur, quam nesciunt voluptate expedita magni maxime ullam animi velit totam. Tempora libero autem distinctio voluptatibus nihil facilis exercitationem odio fugiat repellat repellendus labore suscipit similique, sit, mollitia a quaerat. Qui quisquam deleniti maxime quaerat odit repellendus expedita laudantium commodi modi architecto, illum dolor! Culpa dolores corrupti, quasi numquam cum doloremque molestiae laboriosam ab natus nihil harum odit quae placeat maiores voluptatibus veniam. Dolorem vero fugit totam? Possimus ratione voluptatibus ad accusantium eaque placeat blanditiis? Facere officia hic maxime nihil quidem qui delectus ipsum adipisci odio quaerat minus aut cupiditate eum, aliquam at. Ipsa ratione accusantium, sapiente aliquam blanditiis iste non culpa rerum ullam perferendis molestiae incidunt ea, commodi, qui nihil? Voluptatibus laboriosam dolorum unde eaque expedita asperiores, facere vitae rem quis ex doloremque quae esse ut repudiandae? Consequatur, voluptas. Ratione blanditiis, quia perspiciatis facere nostrum enim beatae? Porro cupiditate deleniti asperiores accusantium necessitatibus voluptas voluptatum, officia, quisquam veritatis, molestias ab quibusdam? A eius esse nemo voluptatem, molestiae incidunt, doloribus sit voluptatibus consectetur provident impedit, quasi nesciunt natus. Fugiat ipsa eius quod atque autem obcaecati tempora temporibus quibusdam. Voluptatem, ex labore dolor non cupiditate atque nobis, doloribus illum reiciendis, corporis vel porro, dignissimos voluptatum quas neque tenetur quae. Incidunt provident sunt temporibus excepturi autem veritatis dignissimos.</p>
		<div class="footer" style="display:grid;grid-template-rows: 1fr;grid-template-columns: 0.5fr  1fr 0.5fr;text-align: center;grid-gap: 10px;">
			<a href="" class="btn btn-secondary" style="color:white;text-decoration: none;"><i class="bi bi-envelope" style="margin-right: 5px;"></i>adeportal@gmail</a>
			<a href="" class="btn btn-success" style="color:white;text-decoration: none;"><i class="bi bi-globe2" style="margin-right: 5px;"></i>www.adeportal.com</a>
			<a href="" class="btn btn-danger" style="color:white;text-decoration: none;"><i class="bi bi-instagram" style="margin-right: 5px;"></i>@adeportal</a>
		</div>
		</div>
    </div>
     <!-- Akhir contain -->

	<!-- Script Java Script bootstrap  -->
	<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>

</body>
</html>