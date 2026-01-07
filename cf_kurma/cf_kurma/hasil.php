<?php
include "config/koneksi.php";

$gejala_user = $_POST['gejala'] ?? [];

if (empty($gejala_user)) {
    die("Tidak ada gejala dipilih");
}

$hasil_cf = [];

/* ambil semua diagnosa */
$q_diagnosa = mysqli_query($conn, "SELECT * FROM diagnosa");

while ($d = mysqli_fetch_assoc($q_diagnosa)) {
    $kode_diagnosa = $d['kode_diagnosa'];

    $cf_total = 0;
    $first = true;

    foreach ($gejala_user as $g) {
        $q_bp = mysqli_query($conn, "
            SELECT * FROM basis_pengetahuan 
            WHERE kode_diagnosa='$kode_diagnosa' 
            AND kode_gejala='$g'
        ");

        if (mysqli_num_rows($q_bp) > 0) {
            $bp = mysqli_fetch_assoc($q_bp);
            $cf = $bp['mb'] - $bp['md'];

            if ($first) {
                $cf_total = $cf;
                $first = false;
            } else {
                $cf_total = $cf_total + ($cf * (1 - $cf_total));
            }
        }
    }

    if ($cf_total > 0) {
        $hasil_cf[] = [
            'kode' => $kode_diagnosa,
            'nama' => $d['nama_diagnosa'],
            'deskripsi' => $d['deskripsi'],
            'cf' => $cf_total
        ];
    }
}

/* urutkan CF tertinggi */
usort($hasil_cf, function($a, $b) {
    return $b['cf'] <=> $a['cf'];
});
?>
<!DOCTYPE html>
<html lang="id">
<head>
<meta charset="UTF-8">
<title>Hasil Diagnosa | Sistem Pakar Penyakit Kurma</title>

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

/* ================= CARD ================= */
.hasil-box{
    width:100%;
    max-width:600px;
    background:linear-gradient(180deg,#2f474e,#253b41);
    padding:45px 50px;
    border-radius:20px;
    box-shadow:0 30px 60px rgba(0,0,0,.65);
}

/* ================= TITLE ================= */
h2{
    text-align:center;
    color:#f1c40f;
    font-size:30px;
    margin-bottom:30px;
}

/* ================= HASIL ================= */
.penyakit{
    background:#f1c40f;
    color:#1b1b1b;
    padding:18px 22px;
    border-radius:14px;
    margin-bottom:30px;
    box-shadow:0 12px 25px rgba(241,196,15,.6);
}

.penyakit p{
    margin:6px 0;
    font-weight:600;
}

.cf{
    font-size:20px;
    font-weight:800;
}

/* ================= DESKRIPSI ================= */
h3{
    margin-top:0;
    margin-bottom:10px;
    color:#f1c40f;
}

.deskripsi{
    line-height:1.8;
    color:#ecf0f1;
    margin-bottom:35px;
}

/* ================= EMPTY ================= */
.kosong{
    text-align:center;
    color:#e74c3c;
    font-weight:700;
}

/* ================= BUTTON ================= */
.aksi{
    display:flex;
    justify-content:space-between;
    gap:15px;
}

.aksi a{
    flex:1;
    text-align:center;
    text-decoration:none;
    background:#f1c40f;
    color:#1b1b1b;
    padding:14px;
    border-radius:30px;
    font-weight:700;
    box-shadow:0 10px 25px rgba(241,196,15,.6);
    transition:.3s;
}

.aksi a:hover{
    transform:translateY(-3px);
    box-shadow:0 15px 35px rgba(241,196,15,.8);
}

/* ================= RESPONSIVE ================= */
@media(max-width:600px){
    .hasil-box{
        padding:35px 25px;
    }

    h2{
        font-size:24px;
    }

    .aksi{
        flex-direction:column;
    }
}
</style>
</head>

<body>

<div class="hasil-box">

    <h2>Hasil Diagnosa</h2>

    <?php if (empty($hasil_cf)): ?>
        <p class="kosong">Tidak ditemukan penyakit yang sesuai.</p>
    <?php else:
        $hasil = $hasil_cf[0];
    ?>
        <div class="penyakit">
            <p>Penyakit Terdeteksi:</p>
            <p><strong><?= $hasil['nama'] ?></strong></p>
            <p class="cf">Nilai Kepastian (CF): <?= round($hasil['cf'], 2) ?></p>
        </div>

        <h3>Deskripsi & Penanganan</h3>
        <p class="deskripsi"><?= $hasil['deskripsi'] ?></p>
    <?php endif; ?>

    <div class="aksi">
        <a href="diagnosa.php">🔁 Diagnosa Ulang</a>
        <a href="dashboard.php">🏠 Dashboard</a>
    </div>

</div>

</body>
</html>
