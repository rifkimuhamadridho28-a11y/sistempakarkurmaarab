<?php
session_start();
if (!isset($_SESSION['login'])) {
    header("Location: login.php");
    exit;
}
?>
<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <title>SISPAK KURMA</title>
    <link rel="stylesheet" href="assets/css/style.css">
    <style>
        .hero {
            position: relative;
            width: 100%;
            height: 100vh;
            background: url('assets/img/pohon-kurma.jpg') no-repeat center center/cover;
            display: flex;
            justify-content: center;
            align-items: center;
            color: white;
            text-align: center;
        }

        .hero .overlay {
            position: absolute;
            inset: 0;
            background: rgba(0,0,0,0.5);
            z-index: 1;
        }

        .hero .hero-content {
            position: relative;
            z-index: 2;
        }

        .btn {
            display: inline-block;
            padding: 12px 25px;
            background-color: #ff8c00;
            color: white;
            text-decoration: none;
            border-radius: 5px;
            transition: 0.3s;
        }

        .btn:hover {
            background-color: #e07b00;
        }

        /* opsional: menu aktif */
        .nav-menu li a.active {
            color: #ff8c00;
            font-weight: bold;
        }
    </style>
</head>
<body id="top">

<nav class="navbar">
    <div class="logo">SISPAK <span>KURMA</span></div>
    <ul class="nav-menu">
        <li><a href="dashboard.php">Dashboard</a></li>
        <li><a href="tentang.php">Tentang Kami</a></li>
        <li><a href="penyakit.php">Penyakit Kurma</a></li>
        <li><a href="diagnosa.php">Konsultasi</a></li>
        <li><a href="logout.php" onclick="return confirm('Yakin logout?')">Logout</a></li>
    </ul>
</nav>


<section class="hero">
    <div class="overlay"></div>
    <div class="hero-content">
        <h2>Selamat Datang!</h2>
        <h1>DI SISTEM PAKAR PENYAKIT KURMA</h1>
        <p>Halo, <strong><?= $_SESSION['nama']; ?></strong></p>
        <a href="diagnosa.php" class="btn">KONSULTASI</a>
    </div>
</section>

</body>
</html>
