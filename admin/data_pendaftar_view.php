<?php
include 'include/header.php';
include '../config/database.php';

$id_pendaftar=$_GET['id_pendaftar'];




$query = mysqli_query($conn, "SELECT * FROM pendaftar WHERE id_pendaftar='$id_pendaftar'");
$data = mysqli_fetch_array($query);

?>
<div class="ui main  text container">
   <h3>DATA PENDAFTAR</h3> KODE PENDAFTARAN <?= $id_pendaftar; ?>
    <form class="ui form" method="POST" action="data_pendaftaran_simpan.php">
        <div class="two fields">
            <div class="field">
                <div class="field">
                    <label>Nama Lengkap</label>
                    <input type="text" name="nama" placeholder="Masukan Nama Lengkap" value=<?= $data['nama']; ?>
                        disabled>
                </div>
                <div class="field">
                    <label>Jenis Kelamin</label>
                    <input type="text" name="nama" placeholder="Jenis Kelamin" value=<?= $data['jenis_kelamin']; ?>
                        disabled>
                </div>
                <div class="field">
                    <label>Agama</label>
                    <input type="text" name="nama" placeholder="Jenis Kelamin" value=<?= $data['agama']; ?> disabled>
                </div>
                <div class="field">
                    <label>E-mail</label>
                    <input type="email" name="email" placeholder="Masukan E-Mail anda yang aktif"
                        value=<?= $data['email'];?> disabled>
                </div>
            </div>

            <div class="field">
                <div class="field">
                    <label>Nomor telephone/Handphone</label>
                    <input type="text" name="no_tlpn" placeholder="Masukan Nomor telephone"
                        value=<?= $data['no_tlpn'];?> disabled>
                </div>
                <div class="field">
                    <label>Provinsi</label>
                    <input type="text" name="provinsi" placeholder="Masukan Provinsi" value=<?= $data['provinsi'];?>
                        disabled>
                </div>
                <div class="field">
                    <label>Kota</label>
                    <input type="text" name="kota_asal" placeholder="Masukan Kota Asal" value=<?= $data['kota'];?>
                        disabled>
                </div>
                <div class="field">
                    <label>Sekolah Asal</label>
                    <input type="text" name="sekolah_asal" placeholder="Masukan Sekolah Asal"
                        value=<?= $data['sekolah_asal'];?> disabled>
                </div>
                <div class="field">
                    <label>Jurusan Pilihan</label>
                    <input type="text" name="jurusan_pilih" placeholder="Jenis Kelamin"
                        value=<?= $data['jurusan_pilihan']; ?> disabled>
                </div>
                <div class="field">
                    <label>STATUS PENDAFTARAN</label>

                </div>

            </div>
        </div>
        <div class="two fields">
            <div class="field">
            <a href="data_pendaftar_update.php?id_pendaftar=<?= $data['id_pendaftar'];?>&status_pendaftaran=2" class="ui green primary button">TERIMA</a>
        
            <a href="data_pendaftar_update.php?id_pendaftar=<?= $data['id_pendaftar'];?>&status_pendaftaran=3" class="ui red button">TOLAK</a>
            </div>
           
    </form>
</div>

</div>




<?php
mysqli_close($conn);

?>