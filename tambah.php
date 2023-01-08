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
            <h1>Tambah Pemesanan</h1>
        </div>
        <div class="container">
            <form role="form" method="POST" action="input.php" class="w-50 m-auto">
                <div class="form-check">
                    <label>Category Name</label>
                    <input class="form-control" name="cat_name">
                </div>
                <div class="form-check">
                    <label>Category Text</label>
                    <input class="form-control" name="cat_text">
                </div>
                <div class="form-check">
                    <button type="submit" class="btn btn-success pull-right mt-3 me-3">Simpan</button>
                    <a href="home.php" class="btn btn-danger pull-right mt-3" style="margin-right:1%;">Batal</a>
                </div>

            </form>
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