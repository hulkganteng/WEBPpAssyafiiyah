<?php
session_start();
if (!isset($_SESSION['username'])) {
    header("Location: login.php");
    exit;
}

include '../database.php';

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $judul = mysqli_real_escape_string($conn, $_POST['judul']);
    $isi = mysqli_real_escape_string($conn, $_POST['isi']);
    $target_dir = "../images/";

    $image_names = [];
    $uploadOk = 1;
    
    // Loop through each file
    foreach ($_FILES['gambar']['name'] as $key => $value) {
        $target_file = $target_dir . basename($_FILES["gambar"]["name"][$key]);
        $imageFileType = strtolower(pathinfo($target_file, PATHINFO_EXTENSION));
        $check = getimagesize($_FILES["gambar"]["tmp_name"][$key]);
        
        if ($check === false) {
            echo "File is not an image.";
            $uploadOk = 0;
            break;
        }
        
        if (file_exists($target_file)) {
            echo "Sorry, file already exists: " . $target_file;
            $uploadOk = 0;
            break;
        }
        
        if ($imageFileType != "jpg" && $imageFileType != "png" && $imageFileType != "jpeg" && $imageFileType != "gif") {
            echo "Sorry, only JPG, JPEG, PNG & GIF files are allowed.";
            $uploadOk = 0;
            break;
        }
        
        if ($_FILES["gambar"]["size"][$key] > 500000) { // 500KB max
            echo "Sorry, your file is too large.";
            $uploadOk = 0;
            break;
        }
        
        if ($uploadOk == 1) {
            if (!is_dir($target_dir)) {
                mkdir($target_dir, 0777, true); // Create directory if not exists
            }
            if (move_uploaded_file($_FILES["gambar"]["tmp_name"][$key], $target_file)) {
                $image_names[] = basename($_FILES["gambar"]["name"][$key]);
            } else {
                echo "Sorry, there was an error uploading your file.";
                $uploadOk = 0;
                break;
            }
        }
    }
    
    if ($uploadOk == 1) {
        $images = implode(',', $image_names);
        $sql = "INSERT INTO berita (judul, isi, gambar) VALUES ('$judul', '$isi', '$images')";
        if (mysqli_query($conn, $sql)) {
            header("Location: index.php");
        } else {
            echo "Error: " . $sql . "<br>" . mysqli_error($conn);
        }
    }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tambah Berita - Admin</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
</head>
<body>
<div class="container">
    <h2>Tambah Berita</h2>
    <form method="post" action="" enctype="multipart/form-data">
        <div class="form-group" id="judul">
            <label for="judul">Judul:</label>
            <input type="text" class="form-control" id="judul" name="judul" required>
        </div>
        <div class="form-group" id="isi">
            <label for="isi">Isi:</label>
            <textarea class="form-control" id="isi" name="isi" required></textarea>
        </div>
        <div class="form-group" id="gambar">
            <label for="gambar">Gambar:</label>
            <input type="file" class="form-control-file" id="gambar" name="gambar[]" multiple required>
        </div>
        <button type="submit" class="btn btn-primary">Tambah</button>
    </form>
</div>
</body>
</html>
