<?php
session_start();
if (!isset($_SESSION['user'])) {
    echo "<script>window.location='../login.php?pesan=dilarang'</script>";
} else {
    include("../koneksi.php");

    // cek apakah tombol daftar sudah diklik atau blum?
    if (isset($_POST['kirim'])) {

        // ambil data dari formulir
        $username = $_SESSION['user']['username'];
        $name = mysqli_escape_string($koneksi, $_POST['name']);
        $email = mysqli_escape_string($koneksi, $_POST['Email']);
        $address = mysqli_escape_string($koneksi, $_POST['address']);
        $message = mysqli_escape_string($koneksi, $_POST['message']);

        // cek apakah user telah melakukan message atau belum
        $query = mysqli_query($koneksi, "SELECT username FROM guestbook WHERE username='$username'");
        $row = mysqli_num_rows($query);
        if ($row >= 0) {
            // buat query PEMESANAN
            $sql = "INSERT INTO `guestbook` VALUES ('', DEFAULT, '$name', '$email', '$address','$message','$username')";
            $query = mysqli_query($koneksi, $sql) or die(mysqli_error($koneksi));
            if ($query) {
                if ($query) {
                    // kalau berhasil alihkan ke halaman pemesanan
                    echo "<script>window.location='./index.php?pesan=sukses#message';</script>";
                } else {
                    // kalau gagal alihkan ke halaman indek.php dengan status=gagal
                    echo "<script>window.location='./index.php?pesan=error#message';</script>";
                }
            } else {
                echo "<script>window.location='./index.php?pesan=gagal#message';</script>";
            }
        } else {
            echo "<script>window.location='./';</script>";
        }
    }
}
