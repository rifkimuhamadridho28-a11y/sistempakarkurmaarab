<?php
session_start();
include "../config/koneksi.php";

// pastikan form dikirim
if (!isset($_POST['username']) || !isset($_POST['password'])) {
    header("Location: ../login.php");
    exit;
}

$username = mysqli_real_escape_string($conn, $_POST['username']);
$password = $_POST['password'];

$query = mysqli_query($conn, "SELECT * FROM users WHERE username='$username'");
$data  = mysqli_fetch_assoc($query);

if ($data && password_verify($password, $data['password'])) {
    // SET SESSION
    $_SESSION['login'] = true;
    $_SESSION['nama']  = $data['nama'];

    // ARAHKAN KE INDEX
    header("Location: ../index.php");
    exit;
} else {
    echo "<script>
        alert('Username atau Password salah!');
        window.location='../login.php';
    </script>";
}
