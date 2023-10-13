<!DOCTYPE html>
<html>
    <head>
        <title>Medical Receptionist</title>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width,initial-scale=1">
        <link rel="stylesheet" type="text/css" href="css/index.css">
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

        <section>
            <table class="table">
                <thead>
                    <tr>
                        <th>No Pasien</th>
                        <th>Nama</th>
                        <th>Tanggal Lahir</th>
                        <th>Jenis Kelamin</th>
                        <th>Alamat</th>
                        <th>Tipe Pembayaran</th>
                        <th>Penyakit</th>
                        <th>Opsi</th>
                    </tr>
                </thead>

                    <?php
                        include 'koneksi.php';
                        $no_pasien = 1; // Inisialisasi variabel $no_pasien
                        $select = mysqli_query($koneksi, "SELECT * FROM pasien");
                        while ($hasil = mysqli_fetch_array($select)) {
                    ?>
                    <tbody>
                        <tr>
                            <td><?php echo $no_pasien++ ?></td>
                            <td><?php echo $hasil['nama']?></td>
                            <td><?php echo $hasil['tgl_lahir']?></td>
                            <td><?php echo $hasil['jenis_kelamin']?></td>
                            <td><?php echo $hasil['alamat']?></td>
                            <td><?php echo $hasil['tipe_pembayaran']?></td>
                            <td><?php echo $hasil['penyakit']?></td>
                            <td>
                                <a href="edit.php?no_pasien=<?php echo $hasil['no_pasien'] ?>" class="edit">Edit</a>
                                <a href="hapus.php?no_pasien=<?php echo $hasil['no_pasien']?>" onclick = "return confirm('Yakin data ini ingin dihapus?')" class="hapus">Hapus</a>
                            </td>  
                        </tr>
                    </tbody>
                    <?php } ?>
            </table>
        </section>     
    </body>
</html>