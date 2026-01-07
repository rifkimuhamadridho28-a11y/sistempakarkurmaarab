<?php
include "config/koneksi.php";
?>
<!DOCTYPE html>
<html lang="id">
<head>
<meta charset="UTF-8">
<title>Diagnosa Penyakit Kurma</title>

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
.container{
    width:100%;
    max-width:520px;
    background:linear-gradient(180deg,#2f474e,#253b41);
    padding:40px 45px;
    border-radius:18px;
    box-shadow:0 30px 60px rgba(0,0,0,.6);
}

/* ================= TITLE ================= */
h2{
    text-align:center;
    color:#f1c40f;
    margin-bottom:30px;
    font-size:28px;
}

/* ================= GEJALA ================= */
.gejala{
    display:flex;
    align-items:flex-start;
    gap:10px;
    margin-bottom:12px;
    font-size:15px;
}

.gejala input{
    accent-color:#f1c40f;
    transform:scale(1.1);
    margin-top:3px;
}

/* ================= BUTTON ================= */
button{
    width:100%;
    margin-top:25px;
    padding:14px;
    border:none;
    background:#f1c40f;
    color:#1b1b1b;
    font-size:16px;
    font-weight:700;
    border-radius:30px;
    cursor:pointer;
    box-shadow:0 10px 25px rgba(241,196,15,.6);
    transition:.3s;
}

button:hover{
    transform:translateY(-3px);
    box-shadow:0 15px 35px rgba(241,196,15,.8);
}

/* ================= BACK ================= */
.back{
    display:block;
    text-align:center;
    margin-top:25px;
    text-decoration:none;
    color:#f1c40f;
    font-weight:600;
}

.back:hover{
    text-decoration:underline;
}

/* ================= RESPONSIVE ================= */
@media(max-width:600px){
    .container{
        padding:30px 25px;
    }

    h2{
        font-size:24px;
    }
}
</style>
</head>

<body>

<div class="container">
    <h2>Diagnosa Penyakit Kurma</h2>

    <form action="hasil.php" method="post">
        <?php
        $query = mysqli_query($conn, "SELECT * FROM gejala");
        while ($g = mysqli_fetch_assoc($query)) {
            echo '<div class="gejala">';
            echo '<input type="checkbox" name="gejala[]" value="'.$g['kode_gejala'].'">';
            echo '<label>'.$g['nama_gejala'].'</label>';
            echo '</div>';
        }
        ?>

        <button type="submit">Proses Diagnosa</button>
    </form>

    <a href="dashboard.php" class="back">← Kembali ke Dashboard</a>
</div>

</body>
</html>
