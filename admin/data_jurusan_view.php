<?php
include 'include/header.php';
include '../config/database.php';

$id_jurusan=$_GET['id_jurusan'];




$query = mysqli_query($conn, "SELECT * FROM jurusan WHERE id_jurusan='$id_jurusan'");
$data = mysqli_fetch_array($query);

?>

<div class="ui segments">
    <div class="ui segment">
    <h3>FORMULIR UPDATE JURUSAN</h3>
    <form class="ui form" method="GET" action="data_jurusan_update.php">
    <input type=hidden name="id_jurusan" value="<?= $data['id_jurusan'];?>">
        <div class="field">
            <div class="field">
                <label>Nama Lengkap</label>
                <input type="text" name="nama_jurusan" value="<?= $data['nama_jurusan'];?>" >
            </div>
        </div>
        <div class="field">
            <button class="fluid ui orange button" type="submit">UPDATE</button>
    </form>
</div>

</div>
</div>
</div>