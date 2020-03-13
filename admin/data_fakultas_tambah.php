<?php
include 'include/header.php';

 ?>
<div class="ui segments">
    <div class="ui segment">
        <h3>FORMULIR PENAMBAHAN FAKULTAS</h3>
        <form class="ui form" method="POST" action="data_fakultas_simpan.php">
            <div class="field">
                <div class="field">
                    <label>Nama Lengkap Fakultas</label>
                    <input type="text" name="nama_fakultas" placeholder="Masukan Nama fakultas" required>
                </div>
            </div>
            <div class="field">
                <button class="fluid ui orange button" type="submit">TAMBAH</button>
        </form>
    </div>

</div>
</div>
</div>