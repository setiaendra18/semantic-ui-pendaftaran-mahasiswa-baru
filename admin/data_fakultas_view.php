<?php
include 'include/header.php';
include '../config/database.php';

$id_fakultas=$_GET['id_fakultas'];




$query = mysqli_query($conn, "SELECT * FROM fakultas WHERE id_fakultas='$id_fakultas'");
$data = mysqli_fetch_array($query);

?>
<div class="ui segments">
    <div class="ui segment">
    <h3>FORMULIR UPDATE fakultas</h3>
    <form class="ui form" method="GET" action="data_fakultas_update.php">
    <input type=hidden name="id_fakultas" value="<?= $data['id_fakultas'];?>">
        <div class="field">
            <div class="field">
                <label>Nama Lengkap</label>
                <input type="text" name="nama_fakultas" value="<?= $data['nama_fakultas'];?>" >
            </div>
        </div>
        <div class="field">
            <button class="fluid ui orange button" type="submit">UPDATE</button>
    </form>
</div>
</div>
</div>
</div>