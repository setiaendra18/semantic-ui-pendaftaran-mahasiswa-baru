<?php
include '../config/database.php';
session_start();
 
echo "Hai, selamat datang ". $_SESSION['nama'];
 
?>
<br/>
<br/>
<a href="data_pendaftar.php">DATA PENDAFTAR</a></br>
<a href="data_jurusan.php">DATA JURUSAN</a></br>
<a href="logout.php">LOGOUT</a>
