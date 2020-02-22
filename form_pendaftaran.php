<?php require "include/header.php"?>

<div class="ui main text container">

<form class="ui form">
  <div class="field">
    <label>Nama Lengkap</label>
    <input type="text" name="nama" placeholder="Masukan Nama Lengkap">
  </div>
  <div class="field">
  <label>Jenis Kelamin</label>
  <select class="ui dropdown">
  <option value="" disable> -- Pilih Jenis Kelamin --</option>
  <option value="1">Laki-Laki</option>
  <option value="0">Perempuan</option>
  </select>
</div>

  <div class="field">
    <label>Agama</label>
    <select class="ui dropdown">
  <option value="" disable> -- Pilih Agama --</option>
  <option value="1">Islam</option>
  <option value="0">Kristen</option>
</select>
  </div>

  <button class="ui red button" type="submit">DAFTAR</button>
</form>

</div>









<?php require "include/footer.php"?>