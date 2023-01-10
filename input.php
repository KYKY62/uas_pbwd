<?php

include "koneksi.php";

$id_user = $_POST['id_user'];
$id_tracking = $_POST['id_tracking'];
$name_pemesan = $_POST['name_pemesan'];
$alamat = $_POST['alamat'];
$jumlah_tabung = $_POST['jumlah_tabung'];

$sql_check = "INSERT INTO pemesanan SET
			  id_user = '$id_user',
			  name_pemesan = '$name_pemesan',
			  alamat = '$alamat',
			  id_tracking = '$id_tracking',
			  jumlah_tabung = '$jumlah_tabung'";

$result_check = $connect->query($sql_check);
header('location:home.php#pemesanan');
