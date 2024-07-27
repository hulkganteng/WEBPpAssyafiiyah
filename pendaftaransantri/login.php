<?php include 'includes/header.php'; ?>

<h2 class="text-center">Login Admin</h2>
<form action="login.php" method="POST">
  <div class="form-group">
    <label for="username">Username:</label>
    <input type="text" class="form-control" id="username" name="username" required>
  </div>
  <div class="form-group">
    <label for="password">Password:</label>
    <input type="password" class="form-control" id="password" name="password" required>
  </div>
  <button type="submit" class="btn btn-primary">Login</button>
</form>

<?php
session_start();
if ($_SERVER["REQUEST_METHOD"] == "POST") {
  include 'db.php';

  $username = mysqli_real_escape_string($conn, $_POST['username']);
  $password = mysqli_real_escape_string($conn, $_POST['password']);

  $sql = "SELECT * FROM admin WHERE username = '$username' AND password = '$password'";
  $result = $conn->query($sql);

  if ($result->num_rows > 0) {
    $_SESSION['admin'] = $username;
    header("Location: admin.php");
    exit();
  } else {
    echo "<div class='alert alert-danger mt-3'>Username atau password salah.</div>";
  }

  $conn->close();
}
?>

<?php include 'includes/footer.php'; ?>
