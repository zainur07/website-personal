<?php
//include file config.php
include('config.php');

//jika benar mendapatkan GET id dari URL
if(isset($_GET['id_petugas'])){
	//membuat variabel $id yang menyimpan nilai dari $_GET['id']
	$id_petugas = $_GET['id_petugas'];
	
	//melakukan query ke database, dengan cara SELECT data yang memiliki id yang sama dengan variabel $id
	$cek = mysqli_query($koneksi, "SELECT * FROM petugas WHERE id_petugas='$id_petugas'") or die(sql_error($koneksi,_LINE_));
	
	//jika query menghasilkan nilai > 0 maka eksekusi script di bawah
	if(mysqli_num_rows($cek) > 0){
		//query ke database DELETE untuk menghapus data dengan kondisi id=$id
		$del = mysqli_query($koneksi, "DELETE FROM petugas WHERE id_petugas='$id_petugas'") or die(sql_error($koneksi,_LINE_));
		if($del){
			echo '<script>alert("Berhasil menghapus data."); document.location="data-petugas.php";</script>';
		}else{
			echo '<script>alert("Gagal menghapus data."); document.location="data-petugas.php";</script>';
		}
	}else{
		echo '<script>alert("id_petugas tidak ditemukan di database."); document.location="data-petugas.php";</script>';
	}
}else{
	echo '<script>alert("NIK tidak ditemukan di database."); document.location="data-masyarakat.php";</script>';
}

?>