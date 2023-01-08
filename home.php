<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <!-- CSS -->
    <link rel="stylesheet" href="CSS/style.css">
    <!-- CSS footer -->
    <link rel="stylesheet" href="CSS/utils/style.css">
    <link rel="stylesheet" href="CSS/utils/responsive.css">
    <title>Document</title>
</head>

<body>
    <div class="header">
        <a href="#">Home</a>
        <a href="#">Pemesanan</a>
        <a href="#">Tentang</a>
        <a href="#">Kontak</a>
        <a href="#">LogOut</a>
    </div>
    <div class="banner">
        <img src="images/banner.png" alt="" srcset="">
    </div>

    <div class="pemesanan">
        <div class="title_pemesanan">
            <h1>Pemesanan</h1>
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
                            <a class="btn btn-success" href="tambah.php">Tambah</a>
                            <a class="btn btn-success ms-2 me-2" href="detail.php?id=<?php echo $row['cat_id']; ?>">Detail</a>
                            <a class="btn btn-success  me-2" href="edit.php?id=<?php echo $row['cat_id']; ?>">Edit</a>
                            <a class="btn btn-danger" href="hapus.php?id=<?php echo $row['cat_id']; ?>">Hapus</a>
                        </td>
                    </tr>
                <?php
                }
                ?>
            </table>
        </div>

    </div>


    <div class="footer">

        <div class="contact">
            <img src="https://image.flaticon.com/icons/svg/25/25231.svg" alt="Alamat" width="20">
            <p>Jl. Merdeka No. 1, Jakarta</p>
        </div>
        <div class="contact">
            <img src="https://image.flaticon.com/icons/svg/1409/1409705.svg" alt="Telepon" width="20">
            <p>123-456-7890</p>
        </div>
        <p>Terima kasih telah mengunjungi website kami!</p>
    </div>
</body>

</html>