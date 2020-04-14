<?php
$servername="localhost";
$username="root";
$dbname="pendaftaran";

include "Connect.php";

$sql="SELECT * FROM pendaftaran_tbl ORDER BY nama;";
$qry=mysqli_query($sql) or die("Proses cetak gagal");
while ($cetak = mysqli_fetch_array($query)) {
echo "<tr>";

  	echo "<td>".$cetak['nama']."</td>";
  	echo "<td>".$cetak['jklm']."</td>";
  	echo "<td>".$cetak['nisn']."</td>";
  	echo "<td>".$cetak['nik']."</td>";
  	echo "<td>".$cetak['temla']."</td>";
  	echo "<td>".$cetak['tangla']."</td>";
  	echo "<td>".$cetak['nral']."</td>";
    echo "<td>".$cetak['agama']."</td>";
    echo "<td>".$cetak['kwn']."</td>";
    echo "<td>".$cetak['bk']."</td>";
    echo "<td>".$cetak['alamat']."</td>";
    echo "<td>".$cetak['rt']."</td>";
    echo "<td>".$cetak['rw']."</td>";
    echo "<td>".$cetak['dusun']."</td>";
    echo "<td>".$cetak['lurah']."</td>";
    echo "<td>".$cetak['kecamatan']."</td>";
    echo "<td>".$cetak['pos']."</td>";
    echo "<td>".$cetak['lintang']."</td>";
    echo "<td>".$cetak['bujur']."</td>";
    echo "<td>".$cetak['tt']."</td>";
    echo "<td>".$cetak['mt']."</td>";
    echo "<td>".$cetak['kks']."</td>";
    echo "<td>".$cetak['anak']."</td>";
    echo "<td>".$cetak['penerima']."</td>";
    echo "<td>".$cetak['no']."</td>";
  	echo "</tr>";
  }
?>