<?php include 'includes/header.php'; ?>

<h2 class="text-center">Pendaftaran Santri Baru - Langkah 1</h2>
<form action="register2.php" method="POST">
  <div class="form-group">
    <label for="nama_lengkap">Nama Lengkap:</label>
    <input type="text" class="form-control" id="nama_lengkap" name="nama_lengkap" required>
  </div>
  <div class="form-group">
    <label for="tempat_lahir">Tempat Lahir:</label>
    <input type="text" class="form-control" id="tempat_lahir" name="tempat_lahir" required>
  </div>
  <div class="form-group">
    <label for="tanggal_lahir">Tanggal Lahir:</label>
    <input type="date" class="form-control" id="tanggal_lahir" name="tanggal_lahir" required>
  </div>
  <div class="form-group">
    <label for="jenis_kelamin">Jenis Kelamin:</label>
    <select class="form-control" id="jenis_kelamin" name="jenis_kelamin" required>
      <option value="Laki-laki">Laki-laki</option>
      <option value="Perempuan">Perempuan</option>
    </select>
  </div>
  <div class="form-group">
    <label for="nik">NIK:</label>
    <input type="text" class="form-control" id="nik" name="nik" required>
  </div>
  <div class="form-group">
    <label for="nomor_kk">Nomor KK:</label>
    <input type="text" class="form-control" id="nomor_kk" name="nomor_kk" required>
  </div>
  <div class="form-group">
    <label for="nisn">NISN:</label>
    <input type="text" class="form-control" id="nisn" name="nisn" required>
  </div>
  <button type="submit" class="btn btn-primary">Lanjut</button>
</form>

<?php include 'includes/footer.php'; ?>
