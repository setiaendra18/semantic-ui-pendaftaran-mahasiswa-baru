<?php
include 'include/header.php';
include '../config/database.php';

session_start();
 ?>
 <div class="ui main  text container">
<h3>Hai, selamat datang "<?= $_SESSION['nama']; ?></h3>
 </div>

 
