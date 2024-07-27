<?php
session_start();
if (!isset($_SESSION['admin'])) {
  header("Location: login.php");
  exit();
}

include 'includes/db.php';
include 'includes/header.php';

if (isset($_SESSION['message'])) {
  echo "<div class='alert alert-info mt-3'>".$_SESSION['message']."</div>";
  unset($_SESSION['message']);
}
?>

<h2 class="text-center">Dashboard Admin</h2>
<a href="logout.php" class="btn btn-danger mb-3"><i class="fas fa-sign-out-alt"></i> Logout</a>
<h3>Daftar Santri</h3>
<table class="table table-bordered">
  <thead class="thead-dark">
    <tr>
      <th>Nama Lengkap</th>
      <th>Tempat Lahir</th>
      <th>Tanggal Lahir</th>
      <th>Jenis Kelamin</th>
      <th>NIK</th>
      <th>Nomor KK</th>
      <th>NISN</th>
      <th>Sekolah Asal</th>
      <th>Sekolah Sekarang</th>
      <th>Nama Ayah</th>
      <th>Nama Ibu</th>
      <th>Pekerjaan Ayah</th>
      <th>Pekerjaan Ibu</th>
      <th>Penghasilan Ayah</th>
      <th>Penghasilan Ibu</th>
      <th>NIK Ayah</th>
      <th>NIK Ibu</th>
      <th>Status Pendaftaran</th>
      <th>Aksi</th>
    </tr>
  </thead>
  <tbody>
    <?php
    $sql = "SELECT * FROM santri";
    $result = $conn->query($sql);

    if ($result->num_rows > 0) {
      while($row = $result->fetch_assoc()) {
        echo "<tr>
                <td>{$row['nama_lengkap']}</td>
                <td>{$row['tempat_lahir']}</td>
                <td>{$row['tanggal_lahir']}</td>
                <td>{$row['jenis_kelamin']}</td>
                <td>{$row['nik']}</td>
                <td>{$row['nomor_kk']}</td>
                <td>{$row['nisn']}</td>
                <td>{$row['nama_sekolah_asal']}</td>
                <td>{$row['nama_sekolah_sekarang']}</td>
                <td>{$row['nama_ayah']}</td>
                <td>{$row['nama_ibu']}</td>
                <td>{$row['pekerjaan_ayah']}</td>
                <td>{$row['pekerjaan_ibu']}</td>
                <td>{$row['penghasilan_ayah']}</td>
                <td>{$row['penghasilan_ibu']}</td>
                <td>{$row['nik_ayah']}</td>
                <td>{$row['nik_ibu']}</td>
                <td>{$row['status_pendaftaran']}</td>
                <td>
                  <a href='confirm.php?id={$row['id']}' class='btn btn-success'><i class='fas fa-check'></i> Konfirmasi</a>
                  <a href='delete.php?id={$row['id']}' class='btn btn-danger'><i class='fas fa-trash'></i> Hapus</a>
                </td>
              </tr>";
      }
    } else {
      echo "<tr><td colspan='18' class='text-center'>Tidak ada data</td></tr>";
    }
    ?>
  </tbody>
</table>

<?php include 'includes/footer.php'; ?>
