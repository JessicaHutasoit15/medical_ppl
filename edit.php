<?php 
include "koneksi.php";


$no_pasien = $_GET["no_pasien"];
$query = mysqli_query($koneksi,"SELECT * FROM pasien WHERE no_pasien = $no_pasien");
$data = mysqli_fetch_array($query);
if (isset($_POST["submit"])) {
	$nama = $_POST['nama'];
    $tgl_lahir = $_POST['tgl_lahir'];
    $jenis_kelamin = $_POST['jenis_kelamin'];
    $alamat = $_POST['alamat'];
    $tipe_pembayaran = $_POST['tipe_pembayaran'];
    $penyakit = $_POST['penyakit'];
    mysqli_query($koneksi, "UPDATE pasien SET nama = '$nama', tgl_lahir = '$tgl_lahir', jenis_kelamin = '$jenis_kelamin', alamat = '$alamat', tipe_pembayaran = '$tipe_pembayaran', penyakit = '$penyakit' WHERE no_pasien = $no_pasien");
    header ("location:pasien.php");
}

?>

<!DOCTYPE html>
<html>
    <head>
        <title>Medical Receptionist</title>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width,initial-scale=1">
        <link rel="stylesheet" type="text/css" href="css/tambah.css">
        
    </head>
    
    <body>
        <header class="navbar-container">
            <nav class="nav-list">
                <ul>
                    <li> <a href="index.php" class="aktif">Beranda</a></li>
                    <li> <a href="pasien.php">Data Pasien</a></li>
                    <li> <a href="tambah_pasien.php">Register Pasien</a> </li>
                </ul>
            </nav>
        </header>
        <!-- End of Navigation Bar -->

        <center>
        <div id="card">
            <div id="card-content">
                <form method="post" class="form">
                    <input type="hidden" name = "no_pasien" value = "<?php echo $data["no_pasien"]; ?>">
                    <h1>Edit Data Pasien</h1>
                  
                    <table>
                        <tbody>
                            <tr>
                                <td>Nama Pasien</td> 
                                <td><input name="nama" type="text" value="<?php echo $data['nama'] ?>"></td>
                            </tr>
                            <tr>
                                <td>Tanggal Lahir</td>
                                <td><input name="tgl_lahir" type="date" value="<?php echo $data['tgl_lahir'] ?>"></td>
                            </tr>
                            <tr>
                                <td>Jenis Kelamin</td>
                                <td><input name="jenis_kelamin" type="text" value="<?php echo $data['jenis_kelamin'] ?>"></td>
                            </tr>
                            <tr>
                                <td>Alamat</td>
                                <td><input name="alamat" type="text" value="<?php echo $data['alamat'] ?>"></td>
                            </tr>
                            <tr>
                                <td>Tipe Pembayaran</td>
                                <td><input name="tipe_pembayaran" type="text" value="<?php echo $data['tipe_pembayaran'] ?>"></td>
                            </tr>
                            <tr>
                                <td>Penyakit</td>
                                <td><input name="penyakit" type="text" value="<?php echo $data['penyakit'] ?>"></td>
                            </tr>
                            
                            <tr><td colspan="2" align="right"><input class="tombol edit" value="Edit" name="submit" type="submit"></td></tr> 
                        </tbody>
                    </table>
                </form>
            </div>
        </div>    
        </center>           
    </body>
</html>