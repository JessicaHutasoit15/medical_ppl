<?php 
include "koneksi.php";

$no_pasien = $_GET["no_pasien"];

$query = "DELETE FROM pasien WHERE no_pasien = $no_pasien";
mysqli_query($koneksi,$query);
header ("location:pasien.php");
?>