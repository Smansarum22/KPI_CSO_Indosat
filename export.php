<?php
  session_start();
  require 'server.php';
  $db = new server;
?>

<?php
    //koneksi ke database
    $conn=mysqli_connect("localhost", "root", "", "xyz");

    if (!$conn)
    {
    die("Connection Failed".mysqli_connect_errno());
    }
?>

<?php
// Fungsi header dengan mengirimkan raw data excel
header("Content-type: application/vnd-ms-excel");
 
// Mendefinisikan nama file ekspor "hasil-export.xls"
header("Content-Disposition: attachment; filename=cso_performance_monitoring.xls");
 
// Tambahkan table
include 'InputDataAdmin.php';
?>