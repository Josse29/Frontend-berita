<?php 
  session_start();
  if(!isset($_SESSION["login"]))
  {
    echo "<script>
      alert('Mohon input terlebih dahulu username dan password anda di halaman login');
      document.location.href='../../registernlogin/index.php';
    </script>";
  }
?>
<?php
  date_default_timezone_set('GMT'); 
  require'../../functions.php';
  $id = $_GET["id"];
  $ade = read("SELECT * FROM berita WHERE id = $id")[0];
  if(isset($_POST["bsimpan"])){
    if(update($_POST)>0){
      echo "<script>
          alert('data berhasil diedit');
          document.location.href = '../Data/index.php';
          </script>";
    }else{
      echo "<script>
          alert('data gagal diedit');
          document.location.href = 'index.php';
          </script>";
    }
  }
?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Edit Data Berita</title>
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
  <!-- Script CK Editor -->
  <script src="https://cdn.ckeditor.com/ckeditor5/34.0.0/classic/ckeditor.js"></script>
</head>
<body>

	<!-- Awal Topnav -->
	<div class="topnav">
	  <div class="menu"></div>
	  <a class="active">Aplikasi Digital Ekspor | Portal Berita V.2</a>
	  <a class="profile"><i class="bi bi-calendar-minus-fill" style="margin-right: 10px;"></i><?= date('l, d-m-Y'); ?></a>
	  <a href="../logout.php" onclick="return confirm('apakah anda yakin keluar??')"><i class="bi bi-box-arrow-right" style="margin-right: 5px;"></i></a>
	</div>
	<label for="check">
		<i class="fas fa-bars" id="btn"></i>
	</label>
	<input type="checkbox" id="check">
	<!-- Akhir Topnav -->

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
			<li class="edit"><a href="index.php"><i class="fas fa-edit"></i>Edit News</a></li>
			<li class="about"><a href="../About/index.php"><i class="fas fa-users"></i>Team</a></li>
			<li class="profile"><a href="../Profile/index.php"><i class="bi bi-building"></i>About us</a></li>
			<li class="service"><a href="../Service/index.php"><i class="fas fa-envelope"></i>Services</a></li>
		</ul>
	</div>
	<!-- Akhir Sidebar  -->

	<!-- Awal Form -->
	<div class="data">
    <div class="card mt-0 ex">
        <div class="card-header text-white exam">
         <h1><b>Edit Data Ekspor</b></h1>
        </div>
        <div class="card-body">
        <form action="" method="POST" enctype="multipart/form-data">
          <div class="row">
            <div class="col">           
            <label >Judul Berita</label>
            <input type="text" name="judul" class="form-control" placeholder="Input Tanggal Berita Berita disini!" value="<?= $ade["judul"]; ?>"required>
            </div>
            <div class="col">           
            <label >Tanggal Berita</label>
            <input type="date" name="tanggal" class="form-control" placeholder="Input Tanggal Berita Berita disini!" value="<?= $ade["tanggal"] ?>" 
            required>
            </div>
          </div>
          <div class="row">
            <div class="col">
            <label>Jenis Ekspor</label>
            <input type="text" name="jenis" class="form-control" placeholder="Input Jenis Ekspor!" value="<?= $ade["jenis"] ;?>"required>
            </div>
            <div class="col">
            <label >Nomor Whats-App</label>
            <input type="text" name="wa" class="form-control" placeholder="Input Judul Berita disini!" value="<?= $ade["wa"]; ?>" required>
            </div>
            <div class="col">
            <label>Business inquiry</label>
            <input type="text" name="contact" class="form-control" value="<?= $ade["contact"] ;?>"placeholder="Input link Whats-App !" required>
            </div>
          </div>
          <div class="row">
            <div class="col">
            <label style="display: block;">Produk Berita</label>
            <img src="../../asset/<?= $ade["gambar"] ?>" alt="" style="width: 300px;height: 150px;" >
            <input type="file" style="font-size: 15px;" name="gambar">
            <p style="font-size: 15px;color:red;font-style: italic;opacity: .7;">Rekomendasi file berbentuk gambar(max-width :285px; max-height:180px)</p>
            </div>
            <div class="col">
            <label style="display: block;">Foto Artikel</label>
            <img src="../../asset/<?= $ade["gambar1"] ?>" alt="" style="width: 300px;height: 150px;">
            <input type="file" style="font-size: 15px;" name="gambar1" >
            <p style="font-size: 15px;color:red;font-style: italic;opacity: .7;">Rekomendasi file berbentuk gambar(max-width :800px; max-height:450px)</p>
            </div>
            <div class="col">
              <label style="display: block;">Sumber Foto</label>
              <input type="text" name="sumber" class="form-control" placeholder="ex : pixabay.com" value="<?= $ade["sumber"]; ?>" required>
            </div>
          </div>
          <div class="row">
            <div class="col">
              <label >Asal Ekspor</label>
              <input type="text" name="asal" class="form-control" placeholder="Input Tujuan Ekspor!" value="<?= $ade["asal"] ;?>" required>
            </div>
            <div class="col">
              <label >Tujuan Ekspor</label>
              <input type="text" name="tujuan" class="form-control" placeholder="Input Tujuan Ekspor!" value="<?= $ade["tujuan"] ;?>" required>
            </div>
            <div class="col">
              <label for="person" style="display: block;">Penerbit</label>
              <select name="penerbit" id="penerbit" class="form-select" style="font-size: 19px;padding: 5px;">
              <option value="<?= $ade["penerbit"]?>"><?= $ade["penerbit"]?></option>
              <?php $people = read("SELECT * FROM users");?>
              <?php foreach($people as $penerbit) :?>
                <option value="<?= $penerbit["fullname"] ;?>"><?= $penerbit["fullname"] ;?></option>
              <?php endforeach; ?>
              </select>
            </div>
            <div class="row" style="margin-left: 3px;font-size: 18px;margin-top:10px; ">
              <label for="isi" style="display: block;margin-left: -7px;"><h1 style="text-align: left;">Isi Berita</h1></label>
              <textarea name="isi" id="isi"><?= $ade["isi"]; ?></textarea>
            </div>
          </div>
          <input type="hidden" name="id" value="<?= $ade["id"] ; ?>">
          <input type="hidden" name="gambarLama" value="<?= $ade["gambar"] ; ?>">
          <input type="hidden" name="gambarLama1" value="<?= $ade["gambar1"] ; ?>">
          <button type="submit" class="btn btn-success mt-3" name="bsimpan">Simpan</button>
          <a href="../Data/index.php" class="btn btn-danger mt-3">kembali</a>
          </form>
        </div>
      </div>
    </div>
    <!-- Akhir Form -->

  <!-- Script CKEDITOR -->
  <script>
  ClassicEditor
  .create( document.querySelector( '#isi' ) )
  .then( editor => {
      console.log( editor );
      } )
  .catch( error => {
      console.error( error );
      } );
  </script>
  
	<!-- Script Java Script bootstrap  -->
	<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"> 
  </script>

</body>
</html>