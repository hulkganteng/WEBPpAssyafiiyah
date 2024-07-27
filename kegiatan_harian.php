<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Kegiatan Harian</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">
    <style>
        .table thead th {
            background-color: #007bff;
            color: white;
        }
        .table tbody tr:nth-child(odd) {
            background-color: #f2f2f2;
        }
        .table tbody tr:nth-child(even) {
            background-color: #ffffff;
        }
    </style>
</head>
<body>
<?php include 'includes/header.php'; ?>
<?php include 'includes/navbar.php'; ?>

<div class="container mt-5">
        <h2 class="text-center">Kegiatan Harian</h2>
        <table class="table table-bordered">
            <thead>
                <tr>
                    <th>Waktu</th>
                    <th>Kegiatan</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td>03.45 - 04.00</td>
                    <td>Persiapan Jamaah Shubuh</td>
                </tr>
                <tr>
                    <td>04.00 - 04.40</td>
                    <td>Sholat Shubuh Berjamaah</td>
                </tr>
                <tr>
                    <td>04.40 - 05.15</td>
                    <td>Ngaji Al-Quran</td>
                </tr>
                <tr>
                    <td>05.15 - 06.20</td>
                    <td>Persiapan Sekolah</td>
                </tr>
                <tr>
                    <td>06.30 - selesai</td>
                    <td>Sekolah Formal</td>
                </tr>
                <tr>
                    <td>15.00 - 15.30</td>
                    <td>Sholat Ashar Berjamaah</td>
                </tr>
                <tr>
                    <td>15.30 - 16.30</td>
                    <td>Pengajian Kitab Kuning</td>
                </tr>
                <tr>
                    <td>16.30 - 17.20</td>
                    <td>Istirahat Sore dan Makan</td>
                </tr>
                <tr>
                    <td>17.20 - 17.40</td>
                    <td>Persiapan Jamaah</td>
                </tr>
                <tr>
                    <td>17.40 - 18.15</td>
                    <td>Sholat Maghrib Berjamaah</td>
                </tr>
                <tr>
                    <td>18.15 - 18.30</td>
                    <td>Ngaji Al-Quran</td>
                </tr>
                <tr>
                    <td>18.30 - 20.00</td>
                    <td>Madrasah Diniyah</td>
                </tr>
                <tr>
                    <td>20.15 - 20.45</td>
                    <td>Sholat Isya Berjamaah</td>
                </tr>
                <tr>
                    <td>20.45 - 21.00</td>
                    <td>Persiapan Takror</td>
                </tr>
                <tr>
                    <td>21.00 - 22.00</td>
                    <td>Takror (Belajar Bersama)</td>
                </tr>
                <tr>
                    <td>22.00 - 04.00</td>
                    <td>Istirahat Malam</td>
                </tr>
            </tbody>
        </table>
    </div>

    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.4/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>
</html>