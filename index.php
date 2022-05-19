<?php   
    require 'functions.php';
    $portal =  read("SELECT * FROM berita ORDER BY tanggal DESC");
    $people = read("SELECT * FROM users");
 ?>

<!DOCTYPE html>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<!-- google font -->
<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Righteous&display=swap" rel="stylesheet">
<!-- icons bootstrap -->
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.8.1/font/bootstrap-icons.css">
<style>
body {
  margin:75px;
  font-family:'Gill Sans','Gill Sans MT',Calibri,'Trebuchet MS',sans-serif;
  font-size: 23px;
}

.topnav {
  overflow: hidden;
  background-color: #04AA6D;
  position:fixed;
  z-index: 1;
  top: 0px;
  width: 100%;
  left:0px;
  right: 0px;
}

.topnav a {
  float: left;
  display: block;
  color: #f2f2f2;
  text-align: center;
  padding: 14px 16px;
  text-decoration: none;
  font-size: 28px;
}

.topnav a:hover {
  opacity: .5;
}

.topnav a.active {
  background-color: #04AA6D;
  color: white;
}

.topnav .icon {
  display: none;
}
.header{
  display:grid;
  grid-template-areas: 
  "hero feature-1"
  "hero feature-2";
  grid-gap:12px;
  height: 380px;
  grid-template-columns:2fr 1fr;
  font-size: 22px;
}
.hero{
  display: grid;
  grid-area:hero;
  justify-content:start;
  background-image: url(asset/hero.jpg);
  align-content: end;
  padding:30px;
  background-position:center;
  background-size: cover;
}
.feature-1{
  display:grid;
  grid-area:feature-1;
  place-content:center;
  padding:35px;
  background-image: url(asset/feature-1.jpg);
  background-position:bottom;
  background-size: cover;
}
.feature-2{
  display:grid;
  grid-area:feature-2;
  place-content:center;
  padding:35px;
  background-image: url(asset/feature-2.jpg);
  background-position:bottom;
  background-size: cover;
}
.header a:hover {
  opacity: .8;
  transition: .5s;
}
.berita .container img{
  border-radius: 10px;
  width:285px;
  height: 180px;
  border:none;
}
.container a h1:hover{
  color:#04AA6D;
}
.berita{
  display: grid;
  grid-template-columns: 1fr 1fr 1fr 1fr;
  grid-gap:16px;
  padding-top: 22px;
}

.personal{
  padding-top:5px;
  display: flex;
  justify-content: space-evenly;
  overflow: auto;
}

img{
  border-radius: 50%;
  width:200px;
  height:180px;
  border:2px solid #fff;
}

.bottom{
  margin-bottom:-75px;
  background-color: #04AA6D;
  padding: 15px;
  text-align: center;
  color:white;
  font-family: righteous;
}
button:hover {
  background-color: red;
  cursor: pointer;
}
@media screen and (max-width: 600px) {
  .topnav a:not(:first-child) {display: none;}
  .topnav a.icon {
    float: right;
    display: block;
  }
}

@media screen and (max-width: 600px) {
  .topnav.responsive {position: fixed;}
  .topnav.responsive .icon {
    position: absolute;
    right: 0;
    top: 0;
  }
  .topnav.responsive a {
    float: none;
    display: block;
    text-align: left;
  }
}
</style>
</head>
<body>

<div class="topnav" id="myTopnav"  >
  <a class="active" style="font-family: 'Righteous', cursive;margin-left: 100px;">Berita Ekspor</a>
  <a href="#news" style="margin-left:75px;"><i class="bi bi-house-door"></i> | News</a>
  <a href="#contact" style="margin-left:75px;"><i class="bi bi-telephone"></i> | Contact</a>
  <a href="#about" style="margin-left:75px;"><i class="bi bi-cart-plus"></i> | Product</a>
  <a href="" style="margin-left:75px;"><i class="bi bi-person-circle"></i> | Team </a>
  <a href="javascript:void(0);" class="icon" onclick="myFunction()">
    <i class="fa fa-bars" style="margin-right: 50px;"></i>
  </a>
</div>

<div class="header"style="padding-top: 25px;">
  <div class="hero"><a href="" style="text-decoration: none;color: white;font-size:17px;"><h1>Daftar List Peserta Batch 1 dan Batch 2 yang berhasil Ekspor</h1></a></div>
  <div class="feature-1"><a href="" style="text-decoration: none;color: white;font-size:22px;"><h3>Berita-2</h3></a></div>
  <div class="feature-2"><a href="" style="text-decoration: none;color: white;font-size:22px;"><h3>Berita-3</h3></a></div>
</div>

<div class="berita">
<?php foreach($portal as $berita): ?>
<div class="container">
 <img src="asset/<?= $berita["gambar"] ;?>" alt="">
  <a href="berita.php?id=<?= $berita["id"] ;?>" style="text-decoration: none;color:black;"><h1 style="margin:2px;font-size: 20px;text-transform: capitalize;"><?= $berita["judul"] ?></h1></a>
  <p style="display: block;margin:5px;opacity: .5;font-size: 15px;"><i class="bi bi-geo-alt"></i>&nbsp; <?= $berita["asal"] ;?></p>
  <p style="display: block;margin:5px;opacity: .5;font-size: 15px;"><i class="bi bi-calendar-event-fill"></i>&nbsp; <?= $berita["tanggal"] ?></p>
</div>
<?php endforeach; ?>
</div>

<h1 style="text-align: center;">Contact</h1>
<div id="contact" style="display: grid;justify-content: space-around;color:black;grid-template-columns: 1fr 1fr;">
  <div class="about">
    <p style="font-size: 20px;text-align: justify;"><img src="asset/4.jpg" alt="" style="width:280px;height:180px;border-radius: 10px;float: left;margin-right: 5px;">Lorem ipsum dolor sit amet consectetur adipisicing elit. Ullam nesciunt quia veniam possimus modi quo quis ab maxime ea temporibus, dolorum quibusdam? Facilis minima facere deleniti dignissimos ipsum odit, voluptas, quos voluptates blanditiis aut excepturi, assumenda. Non reiciendis earum totam accusantium ullam est magnam dolorum praesentium corporis pariatur eos amet maxime quibusdam, iste quo distinctio deleniti unde esse Lorem ipsum dolor sit amet consectetur adipisicing elit. Dolores, provident quo. Accusamus necessitatibus perspiciatis, quo cupiditate laudantium, odio rem dolorem!</p>
    <p><i class="bi bi-whatsapp" style="color:green;"></i> +6289524087023</p>
    <p><i class="bi bi-facebook" style="color:blue;"> @ekspor</i></p>
    <p><i class="bi bi-instagram" style="color: #F56040;"> @ekspor</i></p>
  </div>
  <div class="form" style="margin-top: -18px;font-size: 28px;">
     <form action="post">
      <ul style="list-style: none;">
        <li style="margin-bottom: 10px;">
          <label for="fullname">Your full name : </label>
          <input type="text" name="fullname" placeholder="input your full name" style="width: 100%;padding:10px;font-family:'Gill Sans','Gill Sans MT',Calibri,'Trebuchet MS',sans-serif;border-radius: 5px;font-size: 22px;border: 1px solid #ddd; ">
        </li>
        <li style="margin-bottom: 10px;">
          <label for="contact">Your Social media : </label>
          <input type="text" name="contact" placeholder="Ex: (IG:@ekspor)" style="width: 100%;padding:10px;font-family:'Gill Sans','Gill Sans MT',Calibri,'Trebuchet MS',sans-serif;border-radius: 5px;font-size: 22px;border: 1px solid #ddd; ">
        </li>
        <li style="margin-bottom: 10px;">
          <label for="komen">Komentar : </label>
          <textarea type="text" name="komen" placeholder="pesan dan kesan" style="width: 100%;padding:10px;font-family:'Gill Sans','Gill Sans MT',Calibri,'Trebuchet MS',sans-serif;border-radius: 5px;font-size: 22px;border: 1px solid #ddd; "></textarea>
        </li>
        <li>
          <button type="submit" name="kirim" class="btn" style="background-color: #04AA6D;padding:5px;color:white;border-radius: 10px;width: 100px;height: 40px;border:1px solid #ddd;font-size: 19px;">Kirim</button>
        </li>
        <br>
      </ul>
        
      </form>
  </div>
</div>

<h1 style="display:block;text-align: center;">Our Team</h1>
<div class="personal">
<?php foreach($people as $person) : ?>
  <div class="member">
    <img src="asset/<?= $person["pasfoto"]; ?>" alt="">
    <p style="text-align: center;opacity: .5;text-transform: capitalize;display: block;"><?= $person["fullname"] ?></p>
  </div>
<?php endforeach; ?>
</div>
<p class="bottom"><i class="bi bi-globe2" style="margin-right: 10px;"></i>www.adeportal.com</p>

</body>
<script>
function myFunction() {
  var x = document.getElementById("myTopnav");
  if (x.className === "topnav") {
    x.className += " responsive";
  } else {
    x.className = "topnav";
  }
}
</script>
</html>
