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
<title>Penyakit Kurma | Sistem Pakar Penyakit Kurma</title>

<style>
*{
    box-sizing:border-box;
    font-family:'Segoe UI', Arial, sans-serif;
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
.section{
    display:flex;
    justify-content:center;
    padding:90px 20px;
}

.container{
    width:100%;
    max-width:1100px;
}

.section-title{
    text-align:center;
    font-size:36px;
    color:#f1c40f;
    margin-bottom:8px;
}

.section-subtitle{
    text-align:center;
    color:#cfd8dc;
    margin-bottom:50px;
}

/* ================= GRID ================= */
.penyakit-grid{
    display:grid;
    grid-template-columns:repeat(auto-fit, minmax(250px,1fr));
    gap:30px;
}

.penyakit-card{
    background:linear-gradient(180deg,#2f474e,#253b41);
    padding:28px;
    border-radius:18px;
    box-shadow:0 18px 35px rgba(0,0,0,.5);
    transition:.35s;
    position:relative;
}

.penyakit-card::before{
    content:'';
    position:absolute;
    top:0;
    left:0;
    width:100%;
    height:5px;
    background:#f1c40f;
    border-radius:18px 18px 0 0;
}

.penyakit-card:hover{
    transform:translateY(-10px);
    box-shadow:0 28px 55px rgba(0,0,0,.7);
}

.penyakit-card h3{
    margin-top:10px;
    margin-bottom:12px;
    color:#f1c40f;
}

.penyakit-card p{
    line-height:1.7;
    color:#ecf0f1;
}

/* ================= BUTTON ================= */
.back-btn-wrapper{
    text-align:center;
    margin-top:60px;
}

.back-btn{
    display:inline-block;
    background:#f1c40f;
    color:#1b1b1b;
    padding:14px 34px;
    border-radius:30px;
    text-decoration:none;
    font-weight:700;
    box-shadow:0 10px 25px rgba(241,196,15,.6);
    transition:.3s;
}

.back-btn:hover{
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

    .section-title{
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
        <li><a href="tentang.php">TENTANG KAMI</a></li>
        <li><a href="diagnosa.php">KONSULTASI</a></li>
        <li><a href="logout.php">LOGOUT</a></li>
    </ul>
</nav>

<section class="section">
    <div class="container">

        <h2 class="section-title">Penyakit Kurma</h2>
        <p class="section-subtitle">
            Penyakit dan hama yang sering menyerang tanaman kurma
        </p>

        <div class="penyakit-grid">

            <div class="penyakit-card">
                <h3>Busuk Akar</h3>
                <p>
                    Penyakit akibat jamur patogen yang menyerang akar tanaman
                    sehingga menghambat penyerapan nutrisi.
                </p>
            </div>

            <div class="penyakit-card">
                <h3>Layuh Fusarium</h3>
                <p>
                    Penyakit yang menyebabkan daun menguning, layu,
                    dan tanaman mati secara perlahan.
                </p>
            </div>

            <div class="penyakit-card">
                <h3>Bercak Daun</h3>
                <p>
                    Ditandai bercak cokelat kehitaman pada daun
                    yang dapat menyebar luas.
                </p>
            </div>

            <div class="penyakit-card">
                <h3>Hama Ulat Daun</h3>
                <p>
                    Hama yang merusak jaringan daun sehingga
                    mengganggu proses fotosintesis tanaman.
                </p>
            </div>

        </div>

        <div class="back-btn-wrapper">
            <a href="index.php" class="back-btn">← Kembali ke Halaman Utama</a>
        </div>

    </div>
</section>

</body>
</html>
