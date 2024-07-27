<?php include 'includes/header.php'; ?>

<h2 class="text-center">Pendaftaran Santri Baru - Langkah 3</h2>
<form action="register_process.php" method="POST">
  <!-- Hidden inputs to carry over data from the previous forms -->
  <input type="hidden" name="nama_lengkap" value="<?php echo $_POST['nama_lengkap']; ?>">
  <input type="hidden" name="tempat_lahir" value="<?php echo $_POST['tempat_lahir']; ?>">
  <input type="hidden" name="tanggal_lahir" value="<?php echo $_POST['tanggal_lahir']; ?>">
  <input type="hidden" name="jenis_kelamin" value="<?php echo $_POST['jenis_kelamin']; ?>">
  <input type="hidden" name="nik" value="<?php echo $_POST['nik']; ?>">
  <input type="hidden" name="nomor_kk" value="<?php echo $_POST['nomor_kk']; ?>">
  <input type="hidden" name="nisn" value="<?php echo $_POST['nisn']; ?>">
  <input type="hidden" name="nama_sekolah_asal" value="<?php echo $_POST['nama_sekolah_asal']; ?>">
  <input type="hidden" name="nama_sekolah_sekarang" value="<?php echo $_POST['nama_sekolah_sekarang']; ?>">

  <div class="form-group">
    <label for="nama_ayah">Nama Ayah:</label>
    <input type="text" class="form-control" id="nama_ayah" name="nama_ayah" required>
  </div>
  <div class="form-group">
    <label for="nama_ibu">Nama Ibu:</label>
    <input type="text" class="form-control" id="nama_ibu" name="nama_ibu" required>
  </div>
  <div class="form-group">
    <label for="pekerjaan_ayah">Pekerjaan Ayah:</label>
    <input type="text" class="form-control" id="pekerjaan_ayah" name="pekerjaan_ayah" required>
  </div>
  <div class="form-group">
    <label for="pekerjaan_ibu">Pekerjaan Ibu:</label>
    <input type="text" class="form-control" id="pekerjaan_ibu" name="pekerjaan_ibu" required>
  </div>
  <div class="form-group">
    <label for="penghasilan_ayah">Penghasilan Ayah:</label>
    <input type="text" class="form-control" id="penghasilan_ayah" name="penghasilan_ayah" required>
  </div>
  <div class="form-group">
    <label for="penghasilan_ibu">Penghasilan Ibu:</label>
    <input type="text" class="form-control" id="penghasilan_ibu" name="penghasilan_ibu" required>
  </div>
  <div class="form-group">
    <label for="nik_ayah">NIK Ayah:</label>
    <input type="text" class="form-control" id="nik_ayah" name="nik_ayah" required>
  </div>
  <div class="form-group">
    <label for="nik_ibu">NIK Ibu:</label>
    <input type="text" class="form-control" id="nik_ibu" name="nik_ibu" required>
  </div>
  <button type="submit" class="btn btn-success">Daftar</button>
</form>

<?php include 'includes.footer.php'; ?>
