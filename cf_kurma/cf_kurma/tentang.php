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
<title>Tentang Kami | Sistem Pakar Penyakit Kurma</title>

<style>
*{
    box-sizing:border-box;
    font-family: 'Segoe UI', Arial, sans-serif;
}

body{
    margin:0;
    min-height:100vh;
    background: radial-gradient(circle at top, #1f3b42, #0b1e23);
    color:#ecf0f1;
}

/* ================= NAVBAR ================= */
.navbar{
    display:flex;
    justify-content:space-between;
    align-items:center;
    padding:18px 60px;
    background:#07161b;
    box-shadow:0 4px 20px rgba(0,0,0,.6);
}

.logo{
    font-size:22px;
    font-weight:700;
    color:#f1c40f;
}

.nav-menu{
    list-style:none;
    display:flex;
    gap:28px;
    margin:0;
    padding:0;
}

.nav-menu a{
    color:#ecf0f1;
    text-decoration:none;
    font-size:14px;
    letter-spacing:.5px;
}

.nav-menu a:hover{
    color:#f1c40f;
}

/* ================= CONTENT ================= */
.container{
    display:flex;
    justify-content:center;
    padding:90px 20px;
}

.card{
    width:100%;
    max-width:900px;
    background:linear-gradient(180deg,#2f474e,#253b41);
    border-radius:18px;
    padding:60px;
    box-shadow:0 30px 60px rgba(0,0,0,.6);
}

.card h1{
    text-align:center;
    font-size:36px;
    color:#f1c40f;
    margin-bottom:8px;
}

.subtitle{
    text-align:center;
    color:#cfd8dc;
    margin-bottom:40px;
}

/* ================= HIGHLIGHT ================= */
.highlight{
    background:#f1c40f;
    color:#1b1b1b;
    padding:18px 25px;
    border-radius:14px;
    font-weight:600;
    text-align:center;
    box-shadow:0 10px 25px rgba(241,196,15,.6);
    margin-bottom:35px;
}

/* ================= TEXT ================= */
.text{
    line-height:1.9;
    margin-bottom:30px;
    color:#ecf0f1;
}

/* ================= LIST ================= */
.list{
    list-style:none;
    padding:0;
    margin-bottom:40px;
}

.list li{
    margin-bottom:12px;
    font-size:15px;
}

.list li::before{
    content:"✔";
    color:#f1c40f;
    margin-right:10px;
    font-weight:bold;
}

/* ================= BUTTON ================= */
.btn-wrap{
    text-align:center;
}

.btn{
    display:inline-block;
    background:#f1c40f;
    color:#1b1b1b;
    padding:14px 32px;
    border-radius:30px;
    text-decoration:none;
    font-weight:700;
    box-shadow:0 10px 25px rgba(241,196,15,.6);
    transition:.3s;
}

.btn:hover{
    transform:translateY(-3px);
    box-shadow:0 15px 35px rgba(241,196,15,.8);
}

/* ================= RESPONSIVE ================= */
@media(max-width:768px){
    .navbar{
        flex-direction:column;
        gap:12px;
        padding:20px;
    }

    .card{
        padding:40px 25px;
    }

    .card h1{
        font-size:26px;
    }
}
</style>
</head>

<body>

<nav class="navbar">
    <div class="logo">SISPAK KURMA</div>
    <ul class="nav-menu">
        <li><a href="index.php">BERANDA</a></li>
        <li><a href="penyakit.php">PENYAKIT KURMA</a></li>
        <li><a href="diagnosa.php">KONSULTASI</a></li>
        <li><a href="logout.php">LOGOUT</a></li>
    </ul>
</nav>

<div class="container">
    <div class="card">

        <h1>Tentang Kami</h1>
        <p class="subtitle">Mengenal Sistem Pakar Diagnosis Kurma</p>

        <div class="highlight">
            Sistem Deteksi Penyakit Kurma Menggunakan Metode Certainty Factor (CF)
        </div>

        <p class="text">
            Sistem pakar ini dirancang untuk membantu masyarakat dan petani dalam
            mendiagnosis penyakit dan hama pada tanaman kurma secara cepat,
            akurat, dan mudah digunakan.
        </p>

        <ul class="list">
            <li>Menggunakan metode Certainty Factor (CF)</li>
            <li>Menentukan tingkat keyakinan hasil diagnosis</li>
            <li>Menyediakan informasi penanganan penyakit</li>
        </ul>

        <div class="btn-wrap">
            <a href="index.php" class="btn">← Kembali ke Halaman Utama</a>
        </div>

    </div>
</div>

</body>
</html>
