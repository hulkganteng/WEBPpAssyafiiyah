<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Kalender Tahunan</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">
</head>
<body>
<?php include 'includes/header.php'; ?>
<?php include 'includes/navbar.php'; ?>

    <div class="container mt-5">
        <h2>Kalender Tahunan</h2>
        <div class="kalender-content">
            <embed src="images/kalender_tahunan.pdf#toolbar=0" type="application/pdf" width="100%" height="600px" />
            <a href="images/kalender_tahunan.pdf" class="btn btn-primary mt-3" download="Kalender Tahunan.pdf"><i class="fas fa-download"></i> Unduh Kalender</a>
        </div>
    </div>

    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.4/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>
</html>
