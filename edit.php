<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="bootstrap/css/bootstrap.css">
    <!-- CSS -->
    <link rel="stylesheet" href="style.css">
    <title>Edit Pesanan</title>
    <link rel="icon" href="images/logo_gas.png">
</head>

<body>
    <div class="header">
        <a href="home.php">Home</a>
        <a href="tambah.php">Pemesanan</a>
        <a href="#kontak">Kontak</a>
        <a href="index.php">LogOut</a>
    </div>
    <div class="banner">
        <img src="images/banner.png" alt="" srcset="">
    </div>

    <div class="pemesanan">
        <div class="title_pemesanan">
            <h1>Perbarui Pesanan</h1>
        </div>
    </div>

    <?php
    include 'koneksi.php';
    $sql = "SELECT * FROM pemesanan,tracking,users WHERE id_pemesanan = $_GET[id]";
    $result_check = $connect->query($sql);
    $row = mysqli_fetch_array($result_check)

    ?>
    <div class="container">
        <form role="form" method="post" action="update.php" class="w-50 m-auto">
            <div class="form-check">
                <label>Nama Pemesan</label>
                <input type="hidden" name="id_pemesanan" value="<?php echo $row['id_pemesanan']; ?>">
                <input class="form-control" name="name_pemesan" value="<?php echo $row['name_pemesan']; ?>">
            </div>
            <div class="form-check">
                <label>Alamat</label>
                <input class="form-control" name="alamat" value="<?php echo $row['alamat']; ?>">
            </div>
            <div class="form-check">
                <label>Jumlah Tabung yang Dipesan</label>
                <input class="form-control" name="jumlah_tabung" value="<?php echo $row['jumlah_tabung']; ?>">
            </div>
            <div class="form-check">
                <button type="submit" class="btn btn-success pull-right mt-3 me-3">Simpan</button>
                <a href="home.php" class="btn btn-danger pull-right mt-3">Batal</a>
            </div>
        </form>

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
    </div>
</body>

</html>