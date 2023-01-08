<?php
include "koneksi.php";

$id_pemesanan = $_GET["id"];

$sql_check = "DELETE FROM pemesanan WHERE id_pemesanan= '$id_pemesanan'";

$result_check = $connect->query($sql_check);

header('location:home.php');
