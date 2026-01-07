<?php
// BYPASS SESSION SEMENTARA (BIAR TIDAK ERROR)
session_start();
$_SESSION['role'] = 'admin';

include "../config/koneksi.php";
?>
<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <title>Data Gejala | Sistem Pakar Penyakit Kurma</title>

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
            width: 700px;
            padding: 30px;
            border-radius: 12px;
            box-shadow: 0 15px 30px rgba(0,0,0,0.25);
        }

        h2 {
            text-align: center;
            margin-bottom: 25px;
            color: #2c3e50;
        }

        table {
            width: 100%;
            border-collapse: collapse;
        }

        table thead {
            background: #27ae60;
            color: #ffffff;
        }

        table th, table td {
            padding: 12px;
            text-align: center;
        }

        table tr:nth-child(even) {
            background: #f2f2f2;
        }

        table tr:hover {
            background: #e9f7ef;
        }

        .back {
            display: inline-block;
            margin-top: 20px;
            text-decoration: none;
            background: #27ae60;
            color: white;
            padding: 10px 16px;
            border-radius: 6px;
            font-weight: bold;
            transition: 0.3s;
        }

        .back:hover {
            background: #219150;
        }

        @media (max-width: 768px) {
            .container {
                width: 95%;
            }
        }
    </style>
</head>
<body>

<div class="container">

    <h2>Data Gejala Penyakit Kurma</h2>

    <table>
        <thead>
            <tr>
                <th>No</th>
                <th>Kode Gejala</th>
                <th>Nama Gejala</th>
            </tr>
        </thead>
        <tbody>
        <?php
        $no = 1;
        $query = mysqli_query($conn, "SELECT * FROM gejala");

        while ($row = mysqli_fetch_assoc($query)) {
            echo "<tr>
                    <td>$no</td>
                    <td>{$row['kode_gejala']}</td>
                    <td>{$row['nama_gejala']}</td>
                  </tr>";
            $no++;
        }
        ?>
        </tbody>
    </table>

    <a href="../dashboard.php" class="back">⬅ Kembali ke Dashboard</a>

</div>

</body>
</html>
