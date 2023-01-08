<?php
include "koneksi.php";

$id_pemesanan = $_POST['id_pemesanan'];
$name_pemesan = $_POST['name_pemesan'];
$alamat = $_POST['alamat'];
$jumlah_tabung = $_POST['jumlah_tabung'];

$sql = "UPDATE pemesanan SET 
            name_pemesan = '$name_pemesan',
			alamat = '$alamat',
			jumlah_tabung = '$jumlah_tabung' WHERE id_pemesanan = '$id_pemesanan'";


$result = $connect->query($sql);

header('location:home.php');
