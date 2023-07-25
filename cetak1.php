<!DOCTYPE html>
<html>
<head>
	<title>Generate Lapporan Tanggapan</title>
</head>
<body>

	<center>

		<img src="img/logo.png"><h2>DATA LAPORAN TANGGAPAN</h2>

	</center>

	<?php 
	include 'config.php';
	?>

    <table border="1" style="width: 100%; height: 100%">
                                    <thead>
                                        <tr>
                                            <th>NO</th>
                                            <th>ID Tanggapan</th>
                                            <th>ID Pengaduan</th>
                                            <th>TGL Tanggapan</th>
                                            <th>Tanggapan</th>
                                            <th>ID Petugas</th>
                                        </tr>
                                    </thead>
                                    <tfoot>
                                        <tr>
                                            <th>NO</th>
                                            <th>ID Tanggapan</th>
                                            <th>ID Pengaduan</th>
                                            <th>TGL Tanggapan</th>
                                            <th>Tanggapan</th>
                                            <th>ID Petugas</th>
                                        </tr>
                                    </tfoot>
                                    <tbody>
                <?php
                //query ke database SELECT tabel masyarakat urut berdasarkan nik yang paling besar
                $sql = mysqli_query($koneksi, "SELECT * FROM tanggapan ORDER BY id_tanggapan ASC") or die(sql_error($koneksi,_LINE_));
                //jika query diatas menghasilkan nilai > 0 maka menjalankan script di bawah if...
                if(mysqli_num_rows($sql) > 0){
                    //membuat variabel $no untuk menyimpan nomor urut
                    $no = 1;
                    //melakukan perulangan while dengan dari dari query $sql
                    while($data = mysqli_fetch_assoc($sql)){
                        //menampilkan data perulangan
                        echo '
                                        <tr>
                                            <td>'.$no.'</td>
                                            <td>'.$data['id_tanggapan'].'</td>
                                            <td>'.$data['id_pengaduan'].'</td>
                                            <td>'.$data['tgl_tanggapan'].'</td>
                                            <td>'.$data['tanggapan'].'</td>
                                            <td>'.$data['id_petugas'].'</td>
                                        </tr>
                                                                ';
                        $no++;
                    }
                //jika query menghasilkan nilai 0
                }else{
                    echo '
                    <tr>
                        <td colspan="6">Tidak ada data.</td>
                    </tr>
                    ';
                }
                ?>
                                    </tbody>
                                </table>

	<script>
		window.print();
	</script>

</body>
</html>