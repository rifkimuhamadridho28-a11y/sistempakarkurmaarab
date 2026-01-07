<?php
include "config/koneksi.php";

$q = mysqli_query($koneksi, "SELECT * FROM gejala");
while ($d = mysqli_fetch_assoc($q)) {
    echo $d['nama_gejala'] . "<br>";
}
