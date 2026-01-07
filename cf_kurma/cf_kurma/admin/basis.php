<?php
session_start();
include "../koneksi.php";
if ($_SESSION['role'] != 'admin') {
    header("Location: ../dashboard.php");
}
if(isset($_POST['simpan'])){
    mysqli_query($koneksi,
        "INSERT INTO basis_pengetahuan (kode_diagnosa,kode_gejala,mb,md)
         VALUES ('$_POST[kd]','$_POST[kg]','$_POST[mb]','$_POST[md]')"
    );
}
?>
<h2>Basis Pengetahuan</h2>

<form method="post">
Kode Diagnosa <input name="kd"><br>
Kode Gejala <input name="kg"><br>
MB <input name="mb"><br>
MD <input name="md"><br>
<button name="simpan">Simpan</button>
</form>

<a href="../dashboard.php">⬅ Kembali</a>
