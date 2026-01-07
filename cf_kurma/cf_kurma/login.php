<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <title>Login | SISPAK KURMA</title>
    <link rel="stylesheet" href="assets/css/auth.css">
</head>
<body>

<div class="auth-box">
    <h2>Login</h2>

    <form action="auth/cek_login.php" method="POST">
        <input type="text" name="username" placeholder="Username" required>
        <input type="password" name="password" placeholder="Password" required>
        <button type="submit" name="login">Masuk</button>
    </form>

    <p>Belum punya akun? <a href="register.php">Daftar</a></p>
</div>

</body>
</html>
