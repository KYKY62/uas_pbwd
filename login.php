<?php
include 'koneksi.php';

$username = $_POST['username'];
$password = $_POST['password'];

$sql = "SELECT * FROM users
        WHERE
        username = '$username' AND password = '$password'
        ";

$result = $connect->query($sql);
$row = mysqli_fetch_assoc($result);


if ($row > 1) {
        if ($username == $row['username'] && $password == $row['password']) {
                header('location:home.php');
        }
} else {
        header('location:index.php');
}
