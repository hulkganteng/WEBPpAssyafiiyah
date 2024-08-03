<?php include 'includes/header.php'; ?>
<?php include 'includes/navbar.php'; ?>
<?php include 'database.php'; ?>

<div class="container mt-4">
    <h1>Galeri</h1>
    <div class="row">
        <?php
        // Query untuk mendapatkan data galeri
        $sql = "SELECT * FROM galeri ORDER BY created_at DESC";
        $result = mysqli_query($conn, $sql);
        while ($row = mysqli_fetch_assoc($result)) {
        ?>
            <div class="col-md-4 col-sm-6 mb-4">
                <div class="card">
                    <img src="assets/images/<?php echo $row['gambar']; ?>" class="card-img-top img-fluid" alt="<?php echo $row['judul']; ?>">
                    <div class="card-body">
                        <h5 class="card-title"><?php echo $row['judul']; ?></h5>
                        <p class="card-text"><?php echo $row['deskripsi']; ?></p>
                    </div>
                </div>
            </div>
        <?php
        }
        ?>
    </div>
</div>

<?php include 'includes/footer.php'; ?>
