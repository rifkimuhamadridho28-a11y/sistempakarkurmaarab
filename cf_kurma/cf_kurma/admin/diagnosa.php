<?php
session_start();
include "../koneksi.php";

/* Cek role admin */
if (!isset($_SESSION['role']) || $_SESSION['role'] != 'admin') {
    header("Location: ../dashboard.php");
    exit;
}

/* Simpan data */
if (isset($_POST['simpan'])) {
    mysqli_query($koneksi,
        "INSERT INTO diagnosa (kode_diagnosa, nama_diagnosa, deskripsi)
         VALUES ('$_POST[kode]', '$_POST[nama]', '$_POST[desk]')"
    );
}
?>
<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <title>Data Diagnosa | Sistem Pakar Penyakit Kurma</title>

    <style>
        * {
            box-sizing: border-box;
            font-family: 'Segoe UI', Arial, sans-serif;
        }

        body {
            margin: 0;
            min-height: 100vh;
            background: linear-gradient(135deg, #27ae60, #2ecc71);
            display: flex;
            justify-content: center;
            align-items: center;
        }

        .container {
            background: #ffffff;
            width: 650px;
            padding: 30px;
            border-radius: 12px;
            box-shadow: 0 15px 30px rgba(0,0,0,0.25);
        }

        h2 {
            text-align: center;
            margin-bottom: 25px;
            color: #2c3e50;
        }

        form label {
            font-weight: bold;
            color: #2c3e50;
        }

        form input,
        form textarea {
            width: 100%;
            padding: 10px;
            margin-top: 6px;
            margin-bottom: 15px;
            border: 1px solid #ccc;
            border-radius: 6px;
            font-size: 14px;
        }

        form textarea {
            resize: vertical;
            min-height: 100px;
        }

        button {
            width: 100%;
            padding: 12px;
            background: #27ae60;
            color: white;
            border: none;
            border-radius: 8px;
            font-size: 16px;
            font-weight: bold;
            cursor: pointer;
            transition: 0.3s;
        }

        button:hover {
            background: #219150;
        }

        .back {
            display: block;
            text-align: center;
            margin-top: 20px;
            text-decoration: none;
            color: #27ae60;
            font-weight: bold;
        }

        .back:hover {
            text-decoration: underline;
        }

        @media (max-width: 700px) {
            .container {
                width: 90%;
            }
        }
    </style>
</head>
<body>

<div class="container">

    <h2>Input Data Diagnosa</h2>

    <form method="post">
        <label>Kode Diagnosa</label>
        <input type="text" name="kode" required>

        <label>Nama Penyakit</label>
        <input type="text" name="nama" required>

        <label>Deskripsi & Penanganan</label>
        <textarea name="desk" required></textarea>

        <button type="submit" name="simpan">💾 Simpan Data</button>
    </form>

    <a href="../dashboard.php" class="back">⬅ Kembali ke Dashboard</a>

</div>

</body>
</html>
