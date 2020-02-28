<?php
include 'include/header.php';
include '../config/database.php';

session_start();
 ?>
<div class="ui main  text container">
    <h3>FORMULIR PENAMBAHAN JURUSAN</h3>
    <form class="ui form" method="POST" action="data_jurusan_simpan.php">
        <div class="field">
            <div class="field">
                <label>Nama Lengkap Jurusan</label>
                <input type="text" name="nama_jurusan" placeholder="Masukan Nama Jurusan" required>
            </div>
        </div>
        <div class="field">
            <button class="fluid ui orange button" type="submit">TAMBAH</button>
    </form>
</div>

</div>