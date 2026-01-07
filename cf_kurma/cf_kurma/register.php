<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <title>Register | SISPAK KURMA</title>
    <link rel="stylesheet" href="assets/css/auth.css">
</head>
<body>

<div class="auth-box">
    <h2>Register</h2>
    <form action="auth/proses_register.php" method="post">
        <input type="text" name="nama" placeholder="Nama Lengkap" required>
        <input type="text" name="username" placeholder="Username" required>
        <input type="password" name="password" placeholder="Password" required>
        <button type="submit">Daftar</button>
    </form>
    <p>Sudah punya akun? <a href="login.php">Login</a></p>
</div>

</body>
</html>
