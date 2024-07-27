<?php
include 'includes/db.php';

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Mengambil data dari halaman pertama
    $nama_lengkap = $_POST['nama_lengkap'];
    $tempat_lahir = $_POST['tempat_lahir'];
    $tanggal_lahir = $_POST['tanggal_lahir'];
    $jenis_kelamin = $_POST['jenis_kelamin'];
    $nik = $_POST['nik'];
    $nomor_kk = $_POST['nomor_kk'];
    $nisn = $_POST['nisn'];

    // Mengambil data dari halaman kedua
    $nama_sekolah_asal = $_POST['nama_sekolah_asal'];
    $nama_sekolah_sekarang = $_POST['nama_sekolah_sekarang'];

    // Mengambil data dari halaman ketiga
    $nama_ayah = $_POST['nama_ayah'];
    $nama_ibu = $_POST['nama_ibu'];
    $pekerjaan_ayah = $_POST['pekerjaan_ayah'];
    $pekerjaan_ibu = $_POST['pekerjaan_ibu'];
    $penghasilan_ayah = $_POST['penghasilan_ayah'];
    $penghasilan_ibu = $_POST['penghasilan_ibu'];
    $nik_ayah = $_POST['nik_ayah'];
    $nik_ibu = $_POST['nik_ibu'];

    // SQL query to insert data into the database
    $sql = "INSERT INTO santri (nama_lengkap, tempat_lahir, tanggal_lahir, jenis_kelamin, nik, nomor_kk, nisn, nama_sekolah_asal, nama_sekolah_sekarang, nama_ayah, nama_ibu, pekerjaan_ayah, pekerjaan_ibu, penghasilan_ayah, penghasilan_ibu, nik_ayah, nik_ibu, status_pendaftaran) 
            VALUES ('$nama_lengkap', '$tempat_lahir', '$tanggal_lahir', '$jenis_kelamin', '$nik', '$nomor_kk', '$nisn', '$nama_sekolah_asal', '$nama_sekolah_sekarang', '$nama_ayah', '$nama_ibu', '$pekerjaan_ayah', '$pekerjaan_ibu', '$penghasilan_ayah', '$penghasilan_ibu', '$nik_ayah', '$nik_ibu', 'Pending')";

    if ($conn->query($sql) === TRUE) {
        echo "<div class='alert alert-success'>Pendaftaran berhasil!</div>";
    } else {
        echo "<div class='alert alert-danger'>Error: " . $sql . "<br>" . $conn->error . "</div>";
    }

    $conn->close();
}
?>
