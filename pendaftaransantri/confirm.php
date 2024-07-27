<?php
session_start();
if (!isset($_SESSION['admin'])) {
  header("Location: login.php");
  exit();
}

include 'db.php';

if (isset($_GET['id'])) {
  $id = intval($_GET['id']);
  $sql = "UPDATE santri SET status_pendaftaran='Confirmed' WHERE id=$id";

  if ($conn->query($sql) === TRUE) {
    $_SESSION['message'] = "Pendaftaran berhasil dikonfirmasi.";
  } else {
    $_SESSION['message'] = "Terjadi kesalahan: " . $conn->error;
  }

  $conn->close();
  header("Location: admin.php");
  exit();
} else {
  $_SESSION['message'] = "ID tidak valid.";
  header("Location: admin.php");
  exit();
}
?>
