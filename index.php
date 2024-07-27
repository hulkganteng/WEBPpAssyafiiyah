<?php include 'includes/header.php'; ?>
<?php include 'includes/navbar.php'; ?>

<div class="container">
    <!-- Carousel -->
    <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
        <ol class="carousel-indicators">
            <?php
            include 'database.php';
            $sql = "SELECT * FROM berita ORDER BY created_at DESC LIMIT 3";
            $result = mysqli_query($conn, $sql);
            $active = 'active';
            $count = 0;
            while ($row = mysqli_fetch_assoc($result)) {
                echo '<li data-target="#carouselExampleIndicators" data-slide-to="' . $count . '" class="' . $active . '"></li>';
                $active = '';
                $count++;
            }
            ?>
        </ol>
        <div class="carousel-inner">
            <?php
            $result = mysqli_query($conn, $sql); // Run the query again
            $active = 'active';
            while ($row = mysqli_fetch_assoc($result)) {
                echo '<div class="carousel-item ' . $active . '">';
                echo '<img class="d-block w-100" src="images/' . $row['gambar'] . '" alt="' . $row['judul'] . '">';
                echo '<div class="carousel-caption d-none d-md-block">';
                echo '<h5>' . $row['judul'] . '</h5>';
                echo '<p>' . substr($row['isi'], 0, 100) . '...</p>';
                echo '</div>';
                echo '</div>';
                $active = '';
            }
            ?>
        </div>
        <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="sr-only">Previous</span>
        </a>
        <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="sr-only">Next</span>
        </a>
    </div>

    <!-- Berita Terbaru -->
    <h2 class="mt-5">Berita Terbaru</h2>
    <div class="row">
        <?php
        $result = mysqli_query($conn, $sql); // Run the query again for latest news section
        while ($row = mysqli_fetch_assoc($result)) {
            echo '<div class="col-md-4">';
            echo '<div class="card mb-4">';
            echo '<img class="card-img-top" src="images/' . $row['gambar'] . '" alt="Berita">';
            echo '<div class="card-body">';
            echo '<h5 class="card-title">' . $row['judul'] . '</h5>';
            echo '<p class="card-text">' . substr($row['isi'], 0, 100) . '...</p>';
            echo '<a href="news_detail.php?id=' . $row['id'] . '" class="btn btn-primary">Baca Selengkapnya</a>';
            echo '</div>';
            echo '</div>';
            echo '</div>';
        }
        ?>
    </div>

<?php include 'includes/footer.php'; ?>
