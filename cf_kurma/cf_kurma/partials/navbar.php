<?php
if (session_status() === PHP_SESSION_NONE) {
    session_start();
}
?>
<nav class="navbar navbar-expand-lg navbar-dark bg-success fixed-top">
  <div class="container">
    <a class="navbar-brand fw-bold" href="index.php">SISPAK KURMA</a>

    <div class="collapse navbar-collapse">
      <ul class="navbar-nav ms-auto">
        <li class="nav-item">
          <a class="nav-link" href="tentang.php">Tentang</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="penyakit.php">Penyakit</a>
        </li>

        <?php
        if (isset($_SESSION['user_id'])) {
            echo '<li class="nav-item">
                    <a class="nav-link btn btn-warning text-dark ms-2 px-3" href="konsultasi.php">
                      Konsultasi
                    </a>
                  </li>';
        } else {
            echo '<li class="nav-item">
                    <a class="nav-link btn btn-warning text-dark ms-2 px-3" href="login_user.php">
                      Mulai Konsultasi
                    </a>
                  </li>';
        }
        ?>
      </ul>
    </div>
  </div>
</nav>
