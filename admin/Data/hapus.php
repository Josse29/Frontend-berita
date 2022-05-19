<?php 
	require'../../functions.php';
	$id =  $_GET["id"];
	if(delete($id)>0){
		echo "<script>
				alert('Hapus Data Berhasil');
				document.location.href='index.php';
			</script>";
	}else{
		echo "<script>
				alert('Hapus Data Gagal');
				document.location.href='hapus.php';
			</script>";
	}
 ?>