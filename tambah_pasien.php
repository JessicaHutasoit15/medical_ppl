<?php
    session_start();
    include "koneksi.php";

?>

<!DOCTYPE html>
<html>
    <head>
        <title>Medical Receptionist</title>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width,initial-scale=1">
        <link rel="stylesheet" type="text/css" href="css/tambah.css">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css" integrity="sha512-1ycn6IcaQQ40/MKBW2W4Rhis/DbILU74C1vSrLJxCq57o941Ym01SwNsOMqvEBFlcgUa6xLiPY/NS5R+E6ztJQ==" crossorigin="anonymous" referrerpolicy="no-referrer">

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
                <h1>Register Pasien</h1>
                <table>
                    <tbody>
                        <tr>
                            <td>Nama Pasien</td>
                            <td><input name="nama" type="text"></td>
                        </tr>
                        <tr>
                            <td>Tanggal Lahir</td>
                            <td><input name="tgl_lahir" type="date"></td>
                        </tr>
                        <tr>
                            <td>Jenis Kelamin</td>
                            <td><input name="jenis_kelamin" type="text"></td>
                        </tr>
                        <tr>
                            <td>Alamat</td>
                            <td><input name="alamat" type="text"></td>
                        </tr>
                        <tr>
                            <td>Tipe Pembayaran</td>
                            <td><input name="tipe_pembayaran" type="text"></td>
                        </tr>
                        <tr>
                            <td>Penyakit</td>
                            <td><input name="penyakit" type="text"></td>
                        </tr>
                        <tr>
                            <td colspan="2" align="right">
                                <input class="tombol tambah" value="tambah" name="submit" type="submit">
                                <input class="tombol reset" value="Reset" type="reset">
                            </td>
                        </tr>
                    </tbody>
                </table>
            </form>


                <?php
                    if (isset($_POST['submit'])){
                        $nama = $_POST['nama'];
                        $tgl_lahir = $_POST['tgl_lahir'];
                        $jenis_kelamin = $_POST['jenis_kelamin'];
                        $alamat = $_POST['alamat'];
                        $tipe_pembayaran= $_POST['tipe_pembayaran'];
                        $penyakit = $_POST['penyakit'];
                        $qry = mysqli_query($koneksi,"INSERT INTO pasien VALUE ('','$nama','$tgl_lahir','$jenis_kelamin','$alamat','$tipe_pembayaran','$penyakit')");
                        if ($qry){
                            header ("location:pasien.php");
                        }
                    }

                ?>

            </div>
        </div>    
        </center>           
    </body>
</html>