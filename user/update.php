<?php
session_start();
if (!isset($_SESSION['user'])) {
    echo "<script>window.location='../login.php?pesan=dilarang'</script>";
} else {
    include("../koneksi.php");

    // cek apakah tombol daftar sudah diklik atau blum?
    if (isset($_POST['simpan'])) {

        // ambil data dari formulir
        $username = $_SESSION['user']['username'];
        $origin = mysqli_escape_string($koneksi, $_POST['origin']);
        $destination = mysqli_escape_string($koneksi, $_POST['destination']);
        $seat = mysqli_escape_string($koneksi, $_POST['seat']);
        $datestart = mysqli_escape_string($koneksi, $_POST['datestart']);
        $dateend = mysqli_escape_string($koneksi, $_POST['dateend']);

        // cek apakah user telah melakukan pemesanan atau belum
        $query = mysqli_query($koneksi, "SELECT username FROM pemesanan WHERE username='$username'");
        $row = mysqli_num_rows($query);
        if ($row == 0) {
            echo "<script>window.location='./pemesanan.php?pesan=beli#pemesanan';</script>";
        } else {
            // buat query PEMESANAN
            $sql = "UPDATE pemesanan SET username='$username', origin='$origin', destination='$destination', seat='$seat', datestart='$datestart', dateend='$dateend' WHERE username='$username'";
            $query = mysqli_query($koneksi, $sql);
            if ($query) {
                // kalau berhasil alihkan ke halaman pemesanan
                echo "<script>window.location='./pemesanan.php?pesan=editsukses#pemesanan';</script>";
            } else {
                echo "<script>window.location='./pemesanan.php?pesan=editgagal#pemesanan';</script>";
            }
        }
    } else {
        echo "<script>window.location='./';</script>";
    }
}
