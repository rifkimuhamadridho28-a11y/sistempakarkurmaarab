<?php
session_start();

/* BYPASS LOGIN */
if (!isset($_SESSION['login'])) {
    $_SESSION['login'] = true;
    $_SESSION['role'] = 'admin';
}
?>
<!DOCTYPE html>
<html lang="id">
<head>
<meta charset="UTF-8">
<title>Dashboard | Sistem Pakar Penyakit Kurma</title>

<style>
*{
    box-sizing:border-box;
    font-family:'Segoe UI', Arial, sans-serif;
}

body{
    margin:0;
    min-height:100vh;
    display:flex;
    justify-content:center;
    align-items:center;
    background: radial-gradient(circle at top, #1f3b42, #0b1e23);
    color:#ecf0f1;
}

/* ================= DASHBOARD CARD ================= */
.dashboard{
    width:100%;
    max-width:720px;
    background:linear-gradient(180deg,#2f474e,#253b41);
    padding:45px 50px;
    border-radius:22px;
    box-shadow:0 35px 70px rgba(0,0,0,.65);
    animation:fadeUp .8s ease;
}

@keyframes fadeUp{
    from{opacity:0; transform:translateY(40px);}
    to{opacity:1; transform:translateY(0);}
}

/* ================= HEADER ================= */
.header{
    text-align:center;
    margin-bottom:40px;
}

.header h2{
    margin:0;
    font-size:30px;
    color:#f1c40f;
}

.header p{
    margin-top:8px;
    color:#cfd8dc;
}

/* ================= MENU GRID ================= */
.menu{
    display:grid;
    grid-template-columns:repeat(2,1fr);
    gap:22px;
}

.menu a{
    text-decoration:none;
    background:linear-gradient(135deg,#f1c40f,#f39c12);
    color:#1b1b1b;
    padding:22px 18px;
    border-radius:16px;
    text-align:center;
    font-size:16px;
    font-weight:700;
    box-shadow:0 12px 25px rgba(241,196,15,.55);
    transition:.35s;
}

.menu a:hover{
    transform:translateY(-6px);
    box-shadow:0 18px 40px rgba(241,196,15,.8);
}

/* ================= TOMBOL KEMBALI ================= */
.back{
    margin-top:35px;
    text-align:center;
}

.back a{
    display:inline-block;
    padding:12px 28px;
    border-radius:14px;
    background:linear-gradient(135deg,#3498db,#2980b9);
    color:#fff;
    text-decoration:none;
    font-weight:600;
    box-shadow:0 10px 25px rgba(52,152,219,.6);
    transition:.3s;
}

.back a:hover{
    transform:translateY(-4px);
    box-shadow:0 16px 35px rgba(52,152,219,.8);
}

/* ================= RESPONSIVE ================= */
@media(max-width:650px){
    .dashboard{
        padding:35px 25px;
    }

    .menu{
        grid-template-columns:1fr;
    }

    .header h2{
        font-size:24px;
    }
}
</style>
</head>

<body>

<div class="dashboard">

    <div class="header">
        <h2>Sistem Pakar Penyakit Kurma</h2>
        <p>Dashboard Utama</p>
    </div>

    <div class="menu">
        <a href="diagnosa.php">🔍 Diagnosa Penyakit</a>
        <a href="admin/gejala.php">📋 Data Gejala</a>
        <a href="admin/diagnosa.php">📋 Data Penyakit</a>
        <a href="logout.php">🚪 Logout</a>
    </div>

    <div class="back">
        <a href="index.php">⬅ Kembali ke Halaman Utama</a>
    </div>

</div>

</body>
</html>
