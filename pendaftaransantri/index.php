<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Landing Page - Pondok Pesantren</title>
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">
</head>
<body>
  <nav class="navbar navbar-expand-lg navbar-light bg-light">
    <a class="navbar-brand" href="#">Pondok Pesantren</a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarNav">
      <ul class="navbar-nav ml-auto">
        <li class="nav-item">
          <a class="nav-link" href="register1.php"><i class="fas fa-user-plus"></i> Daftar</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="login.php"><i class="fas fa-sign-in-alt"></i> Login</a>
        </li>
      </ul>
    </div>
  </nav>

  <div class="jumbotron jumbotron-fluid text-center">
    <div class="container">
      <h1 class="display-4">Selamat Datang di Pondok Pesantren</h1>
      <p class="lead">Menyediakan pendidikan yang berkualitas dan berakhlak mulia.</p>
      <a class="btn btn-primary btn-lg" href="register1.php" role="button"><i class="fas fa-user-plus"></i> Daftar Sekarang</a>
    </div>
  </div>

  <div class="container mt-5">
    <div class="row">
      <div class="col-md-4">
        <div class="card">
          <div class="card-body text-center">
            <i class="fas fa-book fa-3x mb-3"></i>
            <h5 class="card-title">Pendidikan Agama</h5>
            <p class="card-text">Mempelajari ilmu agama yang mendalam dengan para ustadz yang berpengalaman.</p>
          </div>
        </div>
      </div>
      <div class="col-md-4">
        <div class="card">
          <div class="card-body text-center">
            <i class="fas fa-graduation-cap fa-3x mb-3"></i>
            <h5 class="card-title">Pendidikan Umum</h5>
            <p class="card-text">Kami juga menyediakan pendidikan umum yang setara dengan sekolah formal.</p>
          </div>
        </div>
      </div>
      <div class="col-md-4">
        <div class="card">
          <div class="card-body text-center">
            <i class="fas fa-mosque fa-3x mb-3"></i>
            <h5 class="card-title">Lingkungan Islami</h5>
            <p class="card-text">Menumbuhkan karakter islami dalam kehidupan sehari-hari.</p>
          </div>
        </div>
      </div>
    </div>
  </div>

  <footer class="bg-light text-center text-lg-start mt-5">
    <div class="container p-4">
      <div class="row">
        <div class="col-lg-6 col-md-12 mb-4 mb-md-0">
          <h5 class="text-uppercase">Pondok Pesantren</h5>
          <p>
            Alamat: Jl. Contoh Alamat No. 123, Kota Contoh, Provinsi Contoh
          </p>
        </div>
        <div class="col-lg-6 col-md-12 mb-4 mb-md-0">
          <h5 class="text-uppercase">Kontak</h5>
          <p>
            Tel: (021) 12345678 <br>
            Email: info@pondokpesantren.com
          </p>
        </div>
      </div>
    </div>
    <div class="text-center p-3 bg-dark text-white">
      © 2024 Pondok Pesantren
    </div>
  </footer>

  <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.4/dist/umd/popper.min.js"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>
</html>
