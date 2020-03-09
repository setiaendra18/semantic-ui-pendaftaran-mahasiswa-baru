<?php
include '../config/database.php';
session_start();
?>
<div class="ui blue stackable  inverted menu">
    <div class="ui main  container">
    <a href="#" class="header item">
        <img class="logo" src="../assets/images/logo.png">
        ADMIN PMB UTM
      </a>
        <a href="dashboard.php" class="item">DASHBOARD</a>
        <a href="data_pendaftar.php" class="item">DATA PENDAFTAR </a>
        <a href="data_jurusan.php" class="item">DATA JURUSAN</a>
        <div class="right item">
            <div class="ui labeled button" tabindex="0">
                <a href="logout.php" class="mini ui red button">
                  KELUAR
                </a>
                <a href="logout.php" class="mini ui basic red left pointing label">
                   ( <?=  $_SESSION['nama']; ?> )
                </a>
            </div>
        </div>
    </div>
</div>


<div class="ui container">