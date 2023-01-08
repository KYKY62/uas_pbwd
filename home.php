<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <!-- CSS -->
    <link rel="stylesheet" href="style.css">

    <title>Document</title>
</head>

<body>
    <div class="header">
        <a href="#home">Home</a>
        <a href="#pelayanan">Pelayanan</a>
        <a href="tambah.php">Pemesanan</a>
        <a href="#tentang">Tentang</a>
        <a href="#kontak">Kontak</a>
        <a href="index.php">LogOut</a>
    </div>

    <div class="banner" id="home">
        <img src="images/banner.png" alt="" srcset="">
    </div>

    <div class="pelayanan" id="pelayanan">
        <h1 class="title-pelayanan">Pelayanan</h1>
        <div class="garis-bawah"></div>
        <p class="deskripsi-pelayanan">Layanan RAS Gas menyediakan pengiriman gas ke rumah atau tempat lain sesuai dengan kebutuhan pelanggan. Layanan Kami ini biasanya menggunakan kendaraan khusus yang dilengkapi dengan tabung-tabung gas yang akan dikirimkan ke tujuan pelanggan. Pelanggan dapat memesan gas melalui telepon atau melalui Website online, dan layanan akan mengirimkan gas ke rumah pelanggan pada waktu yang telah ditentukan. Layanan ini sangat berguna bagi pelanggan yang tidak memiliki waktu atau kemampuan untuk mengambil gas sendiri di toko atau stasiun bensin terdekat.</p>
    </div>

    <div class="pemesanan">
        <div class="title_pemesanan">
            <h1>Pemesanan</h1>
            <div class="garis-bawah"></div>
        </div>
        <a class="btn btn-success mx-5" href="tambah.php">Tambah Pesanan</a>
        <div class="table_pemesanan p-5">
            <table class="table table-striped text-align-center">
                <tr>
                    <th>Id</th>
                    <th>UserName</th>
                    <th>Nama Pemesan</th>
                    <th>Alamat</th>
                    <th>Jumlah Tabung</th>
                    <th>Status</th>
                    <th>Nama Pengantar</th>
                    <th>Action</th>
                </tr>
                <?php

                include "koneksi.php";

                $sql_check = "SELECT * FROM  pemesanan , users, tracking WHERE pemesanan.id_user = users.id && pemesanan.id_tracking = tracking.id";

                $result_check = $connect->query($sql_check);
                while ($row = mysqli_fetch_array($result_check)) {
                ?>
                    <tr>
                        <td>
                            <?php echo $row['id_pemesanan']; ?>
                        </td>
                        <td>
                            <?php echo $row['username']; ?>
                        </td>
                        <td>
                            <?php echo $row['name_pemesan']; ?>
                        </td>
                        <td>
                            <?php echo $row['alamat']; ?>
                        </td>
                        <td>
                            <?php echo $row['jumlah_tabung']; ?>
                        </td>
                        <td>
                            <?php echo $row['status']; ?>
                        </td>
                        <td>
                            <?php echo $row['nama_pengantar']; ?>
                        </td>
                        <td>
                            <a class="btn btn-success  me-2" href="edit.php?id=<?php echo $row['id_pemesanan']; ?>">Edit</a>
                            <a class="btn btn-danger" href="hapus.php?id=<?php echo $row['id_pemesanan']; ?>">Hapus</a>
                        </td>
                    </tr>
                <?php
                }
                ?>
            </table>
        </div>

    </div>

    <div class="tentang" id="tentang">
        <h1 class="title-pelayanan">Tentang Kami</h1>
        <div class="garis-bawah"></div>
        <div class="pekerja">
            <img src="images/pekerja.png" alt="">
        </div>
        <div class="nama-pekerja">
            <p>Rudiawan AKA akang gas</p>
        </div>

        <div class="btn-pesan">
            <button><a href="tambah.php">Pesan Sekarang</a></button>
        </div>
    </div>

    <div class="footer" id="kontak">

        <div class="contact">
            <img src="images/location_icon.png" alt="Alamat" width="20">
            <p>Jl. Karya Jaya Gg Seroja, Medan</p>
        </div>
        <div class="contact">
            <img src="images/customer_icon.png" alt="Telepon" width="20">
            <p>0895-3254-1132</p>
        </div>
        <p>Terima kasih telah mengunjungi website kami!</p>
        <p>RAS [RIZKY AKBAR SIREGAR] </p>
    </div>
</body>

</html>