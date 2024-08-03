<?php
session_start();
if (!isset($_SESSION['username'])) {
    header("Location: login.php");
    exit;
}

include '../database.php';

// Ambil data berita dari database
$sql = "SELECT * FROM berita";
$result = mysqli_query($conn, $sql);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin - Pondok Pesantren Assyafiiyah</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
</head>
<body>
<div class="container">
    <h2>Halaman Admin</h2>
    <div class="mb-3">
        <a href="add_news.php" class="btn btn-primary">
            <i class="fas fa-plus"></i> Tambah Berita
        </a>
        <a href="add_ustad.php" class="btn btn-secondary">
            <i class="fas fa-user-plus"></i> Tambah Ustad/Ustadzah
        </a>
        <a href="add_foto_galeri.php" class="btn btn-info">
            <i class="fas fa-image"></i> Tambah Foto Galeri
        </a>
        <a href="logout.php" class="btn btn-danger">
            <i class="fas fa-sign-out-alt"></i> Logout
        </a>
    </div>
    <h3>Daftar Berita</h3>
    <table class="table table-responsive">
        <thead>
            <tr>
                <th>ID</th>
                <th>Judul</th>
                <th>Isi</th>
                <th>Gambar</th>
                <th>Aksi</th>
            </tr>
        </thead>
        <tbody>
            <?php while($row = mysqli_fetch_assoc($result)): ?>
                <tr>
                    <td><?php echo $row['id']; ?></td>
                    <td><?php echo $row['judul']; ?></td>
                    <td><?php echo substr($row['isi'], 0, 100); ?></td>
                    <td><img src="../images/<?php echo $row['gambar']; ?>" alt="Gambar Berita" width="100"></td>
                    <td>
                        <a href="edit_news.php?id=<?php echo $row['id']; ?>" class="btn btn-warning">Edit</a>
                        <a href="delete_news.php?id=<?php echo $row['id']; ?>" class="btn btn-danger">Hapus</a>
                    </td>
                </tr>
            <?php endwhile; ?>
        </tbody>
    </table>
</div>
<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/js/all.min.js"></script>
</body>
</html>
