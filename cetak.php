<!DOCTYPE html>
<html>
<head>
	<title>Generate Lapporan Pengaduan</title>
</head>
<body>

	<center>

		<img src="img/logo.png"><h2>DATA LAPORAN PENGADUAN</h2>

	</center>

	<?php 
	include 'config.php';
	?>

	<table border="1" style="width: 100%; height: 100%">
                                    <thead>
                                        <tr>
                                                <th>NO</th>
                                                <th>TGL_Pengaduan</th>
                                                <th>Nama</th>
                                                <th>Judul</th>
                                                <th>ISI_laporan</th>
                                                <th>Foto</th>
                                                <th>Status</th>

                                        </tr>
                                    </thead>
                                    <tfoot>
                                        <tr>
                                                <th>NO</th>
                                                <th>TGL_Pengaduan</th>
                                                <th>Nama</th>
                                                <th>Judul</th>
                                                <th>ISI_laporan</th>
                                                <th>Foto</th>
                                                <th>Status</th>
                                        </tr>
                                    </tfoot>
                                    <tbody>
            <?php
            $query = mysqli_query($koneksi, "select a.*, b.* from pengaduan a
                                          inner join masyarakat b on a.nik=b.nik");
            if(mysqli_num_rows($query) > 0 ){
                $no =1;
            while($row = mysqli_fetch_assoc($query)) {
            ?>
              <tr>
                <td><?php print $no ?></td>
                <td style="text-align: top"><?php print $row['tgl_pengaduan']?></td>
                <td><?php print $row['nama']?></td>
                <td><?php print $row['judul']?></td>
                <td><?php print $row['isi_laporan']?></td>
                <td><img src="<?php print $row['foto']?>" width="50%"></td>
                <td>
                <?php
                if ($row['status'] == '0') {
                  $status = "<label class='btn btn-danger btn-icon-split btn-sm'><span=class'icon text-white-50'><i class='fas fa-question'></i></span><span class='text'>NULL</span></label>";
                } else if($row['status'] == 'proses') {
                  $status = "<label class='btn btn-info btn-icon-split btn-sm'><span='icon text-white-50'><i class='fas fa-info-circle'></i></span><span class='text'>PROSES</span></label>";
                } else {
                  $status = "<label class='btn btn-success btn-icon-split btn-sm'><span='icon text-white-50'><i class='fas fa-check'></i></span><span class='text'>SELESAI</span></label>";
                }

                print $status;
                ?>
                </td>
              </tr>
                          <?php } $no++;
                           }else{
                            echo '
                            <tr>
                            <td cosplan="7">Tidak ada data</td>
                            </tr>';
                           }    ?>
                                    </tbody>
                                </table>

	<script>
		window.print();
	</script>

</body>
</html>