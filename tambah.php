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
        <a href="home.php">Home</a>
        <a href="#pemesanan">Pemesanan</a>
        <a href="#kontak">Kontak</a>
        <a href="index.php">LogOut</a>
    </div>
    <div class="banner">
        <img src="images/banner.png" alt="" srcset="">
    </div>

    <div class="pemesanan" id="pemesanan">
        <div class="title_pemesanan">
            <h1>Tambah Pemesanan</h1>
        </div>
        <div class="container">
            <form role="form" method="POST" action="input.php" class="w-50 m-auto">
                <div class="form-check">
                    <label>Username</label>
                </div>
                <div class="form-check">
                    <td>
                        <select id="id_user" name="id_user">
                            <option>Data harus berisi</option>
                            <?php
                            include "koneksi.php";
                            $sql_check = "SELECT * FROM users";
                            $result_check = $connect->query($sql_check);
                            while ($row = mysqli_fetch_array($result_check)) {
                                echo   "<option value=$row[id]>$row[username]</option>";
                            }
                            ?>
                        </select>
                    </td>
                </div>
                <div class="form-check">
                    <label>Nama Pemesan</label>
                    <input class="form-control" name="name_pemesan">
                </div>
                <div class="form-check">
                    <label>Alamat</label>
                    <input class="form-control" name="alamat">
                </div>
                <div class="form-check">
                    <label>Jumlah tabung yang dipesan</label>
                    <input class="form-control" name="jumlah_tabung">
                </div>
                <div class="form-check">
                    <label>Status Pemesanan</label>
                </div>
                <div class="form-check">
                    <td>
                        <select name="id_tracking">
                            <option>Data harus berisi</option>
                            <?php
                            include "koneksi.php";
                            $sql_check = "SELECT * FROM tracking";
                            $result_check = $connect->query($sql_check);
                            while ($row = mysqli_fetch_array($result_check)) {
                                echo "<option value=$row[id]>$row[status]</option>";
                            }
                            ?>
                        </select>
                    </td>
                </div>
                <div class="form-check">
                    <button type="submit" class="btn btn-success pull-right mt-3 me-3">Simpan</button>
                    <a href="home.php" class="btn btn-danger pull-right mt-3" style="margin-right:1%;">Batal</a>
                </div>
            </form>
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
    </div>
</body>

</html>