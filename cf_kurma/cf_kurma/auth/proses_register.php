<?php
include "../config/koneksi.php";

$nama     = $_POST['nama'];
$username = $_POST['username'];
$password = password_hash($_POST['password'], PASSWORD_DEFAULT);

$query = mysqli_query($conn, "
    INSERT INTO users (nama, username, password)
    VALUES ('$nama', '$username', '$password')
");

if ($query) {
    echo "<script>
        alert('Registrasi berhasil, silakan login!');
        window.location='../login.php';
    </script>";
} else {
    echo "<script>
        alert('Registrasi gagal!');
        window.location='../register.php';
    </script>";
}
?>
