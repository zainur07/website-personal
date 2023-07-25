<?php
//include file config.php
include('config.php');

//jika benar mendapatkan GET id dari URL
if(isset($_GET['id_pengaduan'])){
	//membuat variabel $id yang menyimpan nilai dari $_GET['id']
	$id_pengaduan = $_GET['id_pengaduan'];
	
		//query ke database DELETE untuk menghapus data dengan kondisi id=$id
		$del = mysqli_query($koneksi, "DELETE * FROM pengaduan WHERE id_pengaduan=$id_pengaduan");
		if($del){
			echo '<script>alert("Berhasil menghapus data."); document.location="data-pengaduan.php";</script>';
		}else{
			echo '<script>alert("Gagal menghapus data."); document.location="data-pengaduan.php";</script>';

}
}
?>