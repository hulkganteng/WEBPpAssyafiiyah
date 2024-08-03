<?php
include 'includes/header.php';
include 'includes/navbar.php';
include 'database.php';

if (isset($_GET['id'])) {
    $id = intval($_GET['id']);
    $sql = "SELECT * FROM berita WHERE id = $id";
    $result = mysqli_query($conn, $sql);
    $row = mysqli_fetch_assoc($result);
    
    if ($row) {
        $gambarPath = 'images/';
        $images = explode(',', $row['gambar']);
        ?>
        <div class="container mt-5">
            <div class="row">
                <div class="col-md-8 offset-md-2">
                    <div class="card mb-4">
                        <?php foreach ($images as $image): ?>
                            <?php if (file_exists($gambarPath . $image)): ?>
                                <img class="card-img-top img-fluid mb-2" src="<?php echo $gambarPath . $image; ?>" alt="Berita">
                            <?php else: ?>
                                <div class="card-img-top bg-secondary text-white text-center py-5">
                                    <p>Gambar tidak tersedia</p>
                                </div>
                            <?php endif; ?>
                        <?php endforeach; ?>
                        <div class="card-body">
                            <h1 class="card-title mb-3"><?php echo $row['judul']; ?></h1>
                            <p class="card-text text-muted mb-3"><i class="fas fa-calendar-alt"></i> <?php echo date('d M Y', strtotime($row['created_at'])); ?></p>
                            <hr>
                            <p class="card-text"><?php echo nl2br($row['isi']); ?></p>
                        </div>
                    </div>
                    <a href="index.php" class="btn btn-secondary"><i class="fas fa-arrow-left"></i> Kembali ke Berita Utama</a>
                </div>
            </div>
        </div>
        <?php
    } else {
        echo '<div class="container mt-5"><div class="alert alert-danger">Berita tidak ditemukan.</div></div>';
    }
} else {
    echo '<div class="container mt-5"><div class="alert alert-danger">ID berita tidak disediakan.</div></div>';
}

include 'includes/footer.php';
?>
