<?php 
	// koneksi ke database 
	$conn= mysqli_connect("localhost","root","123","news");

	// Awal functions CRUD
	function create($post){
		global $conn;
		$tanggal = $post["tanggal"];
		$wa = $post["wa"];
		$judul = $post["judul"];
		$jenis = $post["jenis"];
		$asal = $post["asal"];
		$tujuan = $post["tujuan"];
		$penerbit = $post["penerbit"];
		$isi = $post["isi"];
		$contact = $post["contact"];
		$sumber = $post["sumber"];
		// upload gambar
		$gambar = upload();
		$gambar1 = uploadPic();
		if(!$gambar){
			return false;
		}
		if(!$gambar1){
			return false;
		}

		$queryTambah = " INSERT INTO berita(tanggal,wa,judul,jenis,asal,tujuan,penerbit,isi, gambar,gambar1,contact,sumber) 
						VALUES('$tanggal','$wa','$judul','$jenis','$asal','$tujuan','$penerbit', '$isi','$gambar','$gambar1','$contact','$sumber');
						";
		mysqli_query($conn,$queryTambah);
		return mysqli_affected_rows($conn);
	}

	// upload gambar pertama
	function upload(){
		$namaFile1 = $_FILES['gambar']['name'];
		$error1 = $_FILES['gambar']['error'];
		$tempName1 = $_FILES['gambar']['tmp_name'];

		// syntax check gambar sudah diupload
		if($error1 === 4){
			echo "<script>
					alert('Mohon maaf, Pilih Gambar terlebih dahulu');
				</script>";
			return false;
		}

		// syntax check ekstensi file gambar
		$ekstensiGambarValid1 = ['jpg','png','jpeg'];
		$ekstensiGambar1 = explode('.',$namaFile1);
		$ekstensiGambar1 = strtolower(end($ekstensiGambar1));
		if(!in_array($ekstensiGambar1, $ekstensiGambarValid1)){
			echo "<script>
					alert('Mohon maaf, yang anda pilih bukan Gambar');
				</script>";
			return false;
		}

		// generate uniq id 
		$newFile = uniqid();
		$newFile .= '.';
		$newFile .= $ekstensiGambar1;

		move_uploaded_file($tempName1,'../../asset/' . $newFile );
		return $newFile;
	}
	// upload gambar kedua
	function uploadPic(){
		$namaFile2 = $_FILES['gambar1']['name'];
		$error2 = $_FILES['gambar1']['error'];
		$tempName2 = $_FILES['gambar1']['tmp_name'];

		// syntax check gambar sudah diupload
		if($error2 === 4){
			echo "<script>
					alert('Mohon maaf, Pilih Gambar terlebih dahulu');
				</script>";
			return false;
		}

		// syntax check ekstensi file gambar
		$ekstensiGambarValid2 = ['jpg','png','jpeg'];
		$ekstensiGambar2 = explode('.',$namaFile2);
		$ekstensiGambar2 = strtolower(end($ekstensiGambar2));
		if(!in_array($ekstensiGambar2, $ekstensiGambarValid2)){
			echo "<script>
					alert('Mohon maaf, yang anda pilih bukan Gambar');
				</script>";
			return false;
		}

		// generate uniq id 
		$newFile2 = uniqid();
		$newFile2 .= '.';
		$newFile2 .= $ekstensiGambar2;

		move_uploaded_file($tempName2,'../../asset/' . $newFile2 );
		return $newFile2;

	}

	function read($query){
		global $conn;
		$result = mysqli_query($conn,$query);
		$rows =[];
		while($row = mysqli_fetch_assoc($result)){
			$rows[]=$row;
		}
		return $rows;
	}

	function update($post){
		global $conn;
		$id = $post["id"];
		$tanggal = $post["tanggal"];
		$wa = $post["wa"];
		$judul = $post["judul"];
		$jenis = $post["jenis"];
		$asal = $post["asal"];
		$tujuan = $post["tujuan"];
		$penerbit = $post["penerbit"];
		$isi = $post["isi"];
		$gambarLama = $post["gambarLama"];
		$gambarLama1 = $post["gambarLama1"];
		$sumber = $post["sumber"];

			// syntax user tidak update gambar ataupun update gambar yang pertama
			if($_FILES['gambar']['error'] === 4){
				$gambar = $gambarLama;
			}else{
				$gambar = upload();
			}

			// syntax user tidak update ataupun update gambar yang kedua 
			if($_FILES['gambar1']['error'] === 4){
				$gambar1 = $gambarLama1;
			}else{
				$gambar1 = uploadPic();
			}
			
		$contact = $post["contact"];
		$queryEdit = "UPDATE  berita SET
							tanggal = '$tanggal', 
							wa = '$wa',
							judul = '$judul',
							jenis = '$jenis',
							asal = '$asal',
							tujuan = '$tujuan',
							penerbit = '$penerbit',
							isi = '$isi',
							gambar = '$gambar',
							gambar1 = '$gambar1',
							contact = '$contact',
							sumber = '$sumber' 
					 WHERE id = $id ";
		mysqli_query($conn,$queryEdit);
		return mysqli_affected_rows($conn);
	}

	function delete($id){
		global $conn;
		$queryDelete = "DELETE FROM berita WHERE id = $id";
		mysqli_query($conn, $queryDelete);
		return mysqli_affected_rows($conn);
	}
	//Akhir functions CRUD  

	function register($data){
		global $conn;
		$username = strtolower(stripslashes($data["username"]));
		$password = mysqli_real_escape_string($conn,$data["password"]);
		$password2 = mysqli_real_escape_string($conn, $data["cpassword"]);
		$email = mysqli_real_escape_string($conn, $data["email"]);
		$pasfoto = pasfoto();
		$fullname = mysqli_real_escape_string($conn, $data["fullname"]);
		$asal = mysqli_real_escape_string($conn, $data["asal"]);

		// sintaks agar tidak ada duplikat username  
		$result = mysqli_query($conn,"SELECT username FROM users WHERE username = '$username'");
		if(mysqli_fetch_assoc($result)){
			echo"<script>
				alert('username yang dipilih sudah terdaftar!')
			</script>";
			return false;
		}
		
		// sintaks konfirmasi password
		if($password !== $password2){
			echo "<script>
				alert('konfirmasi password tidak sesuai')
				</script>";
			return false;
		}
		// enkripsi password
		$password = password_hash($password, PASSWORD_DEFAULT);

		// pasfoto
		if(!$pasfoto){
			return false;
		}

		mysqli_query($conn, " INSERT INTO users(username, password, email, pasfoto, fullname,asal)VALUES('$username','$password','$email','$pasfoto','$fullname','$asal') " );
		return mysqli_affected_rows($conn);
	}
	// upload pasfoto
	function pasfoto(){
		$namafoto = $_FILES['pasfoto']['name'];
		$errorfoto = $_FILES['pasfoto']['error'];
		$tempfoto = $_FILES['pasfoto']['tmp_name'];

		// syntax check gambar sudah diupload
		if($errorfoto === 4){
			echo "<script>
					alert('Mohon maaf, Pilih Gambar terlebih dahulu');
				</script>";
			return false;
		}

		// syntax check ekstensi file gambar
		$ekstensiValidfoto = ['jpg','png','jpeg'];
		$ekstensifoto = explode('.',$namafoto);
		$ekstensifoto = strtolower(end($ekstensifoto));
		if(!in_array($ekstensifoto, $ekstensiValidfoto)){
			echo "<script>
					alert('Mohon maaf, yang anda pilih bukan Gambar');
				</script>";
			return false;
		}

		// generate uniq id 
		$newFoto = uniqid();
		$newFoto .= '.';
		$newFoto .= $ekstensifoto;

		move_uploaded_file($tempfoto,'../asset/' . $newFoto );
		return $newFoto;

	}
?>
