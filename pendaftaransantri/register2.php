<?php include 'includes/header.php'; ?>

<h2 class="text-center">Pendaftaran Santri Baru - Langkah 2</h2>
<form action="register3.php" method="POST">
  <!-- Hidden inputs to carry over data from the first form -->
  <input type="hidden" name="nama_lengkap" value="<?php echo $_POST['nama_lengkap']; ?>">
  <input type="hidden" name="tempat_lahir" value="<?php echo $_POST['tempat_lahir']; ?>">
  <input type="hidden" name="tanggal_lahir" value="<?php echo $_POST['tanggal_lahir']; ?>">
  <input type="hidden" name="jenis_kelamin" value="<?php echo $_POST['jenis_kelamin']; ?>">
  <input type="hidden" name="nik" value="<?php echo $_POST['nik']; ?>">
  <input type="hidden" name="nomor_kk" value="<?php echo $_POST['nomor_kk']; ?>">
  <input type="hidden" name="nisn" value="<?php echo $_POST['nisn']; ?>">

  <div class="form-group">
    <label for="nama_sekolah_asal">Nama Sekolah Asal:</label>
    <input type="text" class="form-control" id="nama_sekolah_asal" name="nama_sekolah_asal" required>
  </div>
  <div class="form-group">
    <label for="nama_sekolah_sekarang">Nama Sekolah Sekarang:</label>
    <input type="text" class="form-control" id="nama_sekolah_sekarang" name="nama_sekolah_sekarang" required>
  </div>
  <button type="submit" class="btn btn-primary">Lanjut</button>
</form>

<?php include 'includes/footer.php'; ?>
