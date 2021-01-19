<?php
require_once 'koneksi.php';

function registration($data)
{
    global $koneksi;
    $username = strtolower(stripslashes($data["username"]));
    $password = mysqli_real_escape_string($koneksi, $data["password"]);
    $password2 = mysqli_real_escape_string($koneksi, $data["password2"]);
    $result = mysqli_query($koneksi, "SELECT username FROM user WHERE username = '$username'");

    if (mysqli_fetch_assoc($result)) {
        echo "<script>window.location='./registrasi.php?pesan=usernameada';</script>";
    }

    if ($password !== $password2) {
        echo "<script>window.location='./registrasi.php?pesan=salahpassword';</script>";
    }
    mysqli_query($koneksi, "INSERT INTO `user` VALUES('','$username', '$password')");
    return mysqli_affected_rows($koneksi);
}

if (isset($_POST["registration"])) {
    if (registration($_POST) > 0) {
        echo "<script>window.location='./registrasi.php?pesan=berhasil';</script>";
    } else {
        echo mysqli_error($koneksi);
    }
}
