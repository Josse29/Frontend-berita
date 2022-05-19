<?php
    date_default_timezone_set('GMT');     
    require'functions.php';
    $id = $_GET["id"];
    $berita =read("SELECT * FROM berita WHERE id = $id")[0];
 ?>


<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
</head>
<!-- google font -->
<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Righteous&display=swap" rel="stylesheet">
<!-- icons bootstrap -->
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.8.1/font/bootstrap-icons.css">
<style>
  *{
    margin:0px;
    padding:0px;
  }
  body{
    background-color: #dddd;
    margin:0px 135px;
    font-family:'Gill Sans','Gill Sans MT',Calibri,'Trebuchet MS',sans-serif;
    font-size: 18px;
    text-align: justify;
  }
  .container{
    padding:25px;
    background-color: #fff;
  }
  .top{
    font-family:  'Righteous';
    font-size: 25px; 
    color:white;
    background-color: #04AA6D;
    padding:17px;
    display: flex;
    justify-content: end; 
  }
  .bottom{
    font-family:  'Righteous';
    font-size: 23px; 
    color:white;
    background-color: #04AA6D;
    padding:15px;
    display: flex;
    justify-content: center; 
  }
  .top a {
    text-decoration: none;
    color:white;
    margin-right: 5px;
  }
  .top a:hover{
    opacity: .5;
  }
  .hero{
    display: grid;
    justify-content: center;
    margin-bottom: 15px;
    text-align: center;
    font-size: 20px;
    font-family:'Gill Sans','Gill Sans MT',Calibri,'Trebuchet MS',sans-serif;
  }
  .social {
    font-size: 40px;
    margin-top: 15px;
    display: flex;
    justify-content: space-evenly;
  }
  .social i:hover{
    opacity: .5;
    transition: .5s ease;
    cursor:pointer;
  }
  .about{
    text-align: right;
  }
  .about a:hover{
    opacity:.5;
  }
</style>
<body>
  <div class="top">
  <a href="index.php"><i class="bi bi-house-fill"></i> Home | </a>
  <a> Berita Ekspor | </a>
  <a style="text-transform: capitalize;text-align:left"><?= $berita["jenis"]; ?></a>
  </div>
  <div class="container">
    <h1 style="text-transform: capitalize;"><?= $berita["judul"]; ?></h1>
    <p style="display: block;opacity:.5;margin-top: 5px;margin-bottom: 5px;"><i class="bi bi-calendar3"></i> | <?= $berita["tanggal"]; ?></p>
    <p style="display: block;opacity:.5;margin-top: 5px;margin-bottom: 5px;"><i class="bi bi-geo-alt" > </i> | <?= $berita["asal"] ;?></p>
    <p style="display: block;opacity:.5;margin-top: 5px;margin-bottom: 5px;"><i class="bi bi-pen-fill"></i> | <?= $berita["penerbit"] ;?></p>

    <div class="hero">  
    <img src="asset/<?= $berita["gambar1"]; ?>" alt="" style="width: 800px;height: 450px;">
    <i>Picture by : <?= $berita["sumber"]; ?> </i>
    <p>Share : </p>
    <div class="social"><x class="bi bi-share-fill"></x><i class="bi bi-whatsapp" style="color:green;"></i><i class="bi bi-facebook" style="color:blue;"></i><i class="bi bi-instagram" style="color: #F56040;"></i><i class="bi bi-twitter" style="color:#55acee;"></i></div>
    </div>
    <p><?= $berita["isi"] ;?></p>
    <br>
    <div class="about">
      <p>For more information : </p>
      <a href="<?= $berita["contact"] ;?>" style="text-decoration: none; color:green;font-size: 25px;"><i class="bi bi-whatsapp" style="color:green;"></i> <?= $berita["wa"] ;?></a>
    </div>
  </div>

<div class="bottom"><i class="bi bi-globe2" style="margin-right: 10px;"></i>www.adeportal.com</div>
</body>
</html>