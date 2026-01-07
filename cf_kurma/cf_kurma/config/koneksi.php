<?php
$conn = mysqli_connect("localhost", "root", "", "db_sispak_kurma");

if (!$conn) {
    die("Koneksi gagal: " . mysqli_connect_error());
}
?>
