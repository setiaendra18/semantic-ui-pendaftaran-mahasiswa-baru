<?php
include '../config/database.php';
 
// mengaktifkan session
session_start();
 
// cek apakah user telah login, jika belum login maka di alihkan ke halaman login

 
// menampilkan pesan selamat datang
echo "Hai, selamat datang ". $_SESSION['nama'];
 
?>
<br/>
<br/>
<a href="logout.php">LOGOUT</a>
