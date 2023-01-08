<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <!-- CSS -->
    <link rel="stylesheet" href="CSS/style.css">
    <title>Aplikasi CRUD Sederhana</title>
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