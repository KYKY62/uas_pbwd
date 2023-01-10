<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="bootstrap/css/bootstrap.css">
    <!-- CSS -->
    <link rel="stylesheet" href="style.css">

    <title>RAS GAS</title>
    <link rel="icon" href="images/logo_gas.png">
</head>

<body>
    <!-- Nama : Rizky Akbar Siregar
    Nim  : 0702202066
    Mata Kuliah : Pemograman Berbasis Web Dasar
     -->

    <div class="header">
        <a href="#home">Home</a>
        <a href="#pelayanan">Pelayanan</a>
        <a href="#pemesanan">Pemesanan</a>
        <a href="#tentang">Tentang</a>
        <a href="#kontak">Kontak</a>
        <a href="index.php">
            <img src="images/logout_icon.png" width="20px" alt="" class="me-2">
            LogOut
        </a>
    </div>
    <!-- Home -->
    <div class="banner" id="home">
        <img src="images/banner.png" alt="" srcset="">
    </div>
    <!--Akhir Home -->

    <!-- Pelayanan -->
    <section id="pelayanan">
        <div class="container">
            <div class="row benefit-topHeader">
                <div class="col-12 text-center">
                    <h5>Pelayanan yang Kami Berikan</h5>
                    <h2>Produk yang Tersedia di Toko Kami?</h2>
                </div>
            </div>
            <div class="row">
                <div class="col-4 text-center">
                    <div class="benefit-card shadow-lg p-3 mb-5 position-relative">
                        <div class="circle-icon position-relative mx-auto">
                            <img src="images/gas3kg.png" alt="" class="position-absolute top-50 start-50 translate-middle" />
                        </div>
                        <h3>Gas 3 KG</h3>
                        <h5>Sedia Antar dan Pasang Gratis di Rumah Anda dengan Harga eceran Rp.16.000</h5>
                        <button class="benefit-button border-0 start-0 w-100 position-absolute bottom-0">
                            View Details
                            <img src="images/icon_smRight.png" alt="" />
                        </button>
                    </div>
                </div>
                <div class="col-4 text-center">
                    <div class="benefit-card  shadow-lg p-3 mb-5 position-relative">
                        <div class="circle-icon position-relative mx-auto">
                            <img src="images/gas12kg.png" alt="" class="position-absolute top-50 start-50 translate-middle" />
                        </div>
                        <h3>Gas 5 KG</h3>
                        <h5>
                            Sedia Antar dan Pasang Gratis di Rumah Anda dengan Harga eceran Rp.55.000
                        </h5>
                        <button class="benefit-button border-0 start-0 w-100 position-absolute bottom-0">
                            View Details
                            <img src="images/icon_smRight.png" alt="" />
                        </button>
                    </div>
                </div>
                <div class="col-4 text-center">
                    <div class="benefit-card  shadow-lg p-3 mb-5 position-relative">
                        <div class="circle-icon position-relative mx-auto">
                            <img src="images/gas5kg.png" alt="" class="position-absolute top-50 start-50 translate-middle" />
                        </div>
                        <h3>Gas 12 KG</h3>
                        <h5>Sedia Antar dan Pasang Gratis di Rumah Anda dengan Harga eceran Rp.215.000</h5>
                        <button class="benefit-button border-0 start-0 w-100 position-absolute bottom-0">
                            View Details
                            <img src="images/icon_smRight.png" alt="" />
                        </button>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Akhir Pelayanan -->

    <!-- Pemesanan -->
    <div class="pemesanan" id="pemesanan">
        <div class="title_pemesanan">
            <h1>Pemesanan</h1>
            <div class="garis-bawah"></div>
        </div>
        <button type="button" class="btn btn-success mx-5" data-bs-toggle="modal" data-bs-target="#exampleModal">
            Tambah Pesanan
        </button>

        <div class="modal fade " id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog ">
                <div class="modal-content primary">
                    <div class="modal-header">
                        <h5 class="modal-title" id="exampleModalLabel">Tambah Pemesanan</h5>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body">
                        <form class="row g-3" method="POST" action="input.php">
                            <div class="col-md-6">
                                <label for="id_user" class="form-label">Username</label>
                                <select id="id_user" class="form-select" name="id_user">
                                    <option selected>Choose...</option>
                                    <?php
                                    include "koneksi.php";
                                    $sql_check = "SELECT * FROM users";
                                    $result_check = $connect->query($sql_check);
                                    while ($row = mysqli_fetch_array($result_check)) {
                                        echo   "<option value=$row[id]>$row[username]</option>";
                                    }
                                    ?>
                                </select>
                            </div>
                            <div class="col-md-6">
                                <label for="name_pemesan" class="form-label">Nama Pemesan</label>
                                <input type="text" class="form-control" id="name_pemesan" name="name_pemesan">
                            </div>
                            <div class="col-12">
                                <label for="alamat" class="form-label">Alamat</label>
                                <input type="text" class="form-control" id="alamat" name="alamat" placeholder="alamat">
                            </div>
                            <div class="col-12">
                                <label for="jumlah_tabung" class="form-label">Jumlah Tabung</label>
                                <input type="text" class="form-control" id="jumlah_tabung" name="jumlah_tabung" placeholder="">
                            </div>
                            <div class="col-md-6">
                                <label for="id_tracking" class="form-label">Status Pemesanan</label>
                                <select id="id_tracking" class="form-select" name="id_tracking">
                                    <option selected>Choose...</option>
                                    <?php
                                    include "koneksi.php";
                                    $sql_check = "SELECT * FROM tracking";
                                    $result_check = $connect->query($sql_check);
                                    while ($row = mysqli_fetch_array($result_check)) {
                                        echo "<option value=$row[id]>$row[status]</option>";
                                    }
                                    ?>
                                </select>
                            </div>
                            <div class="col-12 ">
                                <button type="submit" class="btn btn-success mx-2">
                                    <img src="images/simpan_icon.svg" alt="" width="20" class="me-2"> Simpan
                                </button>

                                <button type="button" class="btn btn-danger" data-bs-dismiss="modal">Batal</button>

                            </div>
                        </form>
                    </div>

                </div>
            </div>
        </div>
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

                $sql_check = "SELECT * FROM  pemesanan , users, tracking WHERE pemesanan.id_user = users.id && pemesanan.id_tracking = tracking.id ORDER BY id_pemesanan";

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
                            <a class="btn btn-success  me-2" href="edit.php?id=<?php echo $row['id_pemesanan']; ?>">
                                <img src="images/edit_icon.png" width="20px" class="me-2" alt="">
                                Edit</a>
                            <a class="btn btn-danger" href="hapus.php?id=<?php echo $row['id_pemesanan']; ?>">
                                <img src="images/delete_icon.png" width="20px" alt="">
                            </a>
                        </td>
                    </tr>
                <?php
                }
                ?>
            </table>
        </div>
    </div>
    <!-- Akhir Pemesanan -->

    <!-- Tentang -->
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
    <!-- Akhir Tentang -->

    <!-- Kontak -->
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
    <!-- Akhir Kontak -->

</body>

<script src="bootstrap/js/bootstrap.bundle.js"></script>

</html>