<?php require "include/header.php"?>

<div class="ui segments">
    <div class="ui segment">
    <h3>FORMULIR PENDAFTARAN MAHASISWA BARU</h3>
    <form class="ui form" method="POST" action="form_pendaftaran_simpan.php">
        <div class="two fields">
            <div class="field">
                <div class="field">
                    <label>Nama Lengkap</label>
                    <input type="text" name="nama" placeholder="Masukan Nama Lengkap" required>
                </div>
                <div class="field">
                    <label>Jenis Kelamin</label>
                    <select name="jenis_kelamin" class="ui dropdown">
                        <option value="" disable> -- Pilih Jenis Kelamin --</option>
                        <option value="0">Laki-Laki</option>
                        <option value="1">Perempuan</option>
                    </select>
                </div>
                <div class="field">
                    <label>Agama</label>
                    <select name="agama" class="ui dropdown">
                        <option value="" disable> -- Pilih Agama --</option>
                        <option value="0">Islam</option>
                        <option value="1">Kristen</option>
                        <option value="2">Katolik</option>
                        <option value="3">Budha</option>
                        <option value="4">Hindu</option>
                        <option value="5">Lainya</option>
                    </select>
                </div>
                <div class="field">
                    <label>E-mail</label>
                    <input type="email" name="email" placeholder="Masukan E-Mail anda yang aktif">
                </div>
            </div>

            <div class="field">
                <div class="field">
                    <label>Nomor telephone/Handphone</label>
                    <input type="text" name="no_tlpn" placeholder="Masukan Nomor telephone" max=12>
                </div>
                <div class="field">
                    <label>Provinsi</label>
                    <input type="text" name="provinsi" placeholder="Masukan Provinsi">
                </div>
                <div class="field">
                    <label>Kota</label>
                    <input type="text" name="kota_asal" placeholder="Masukan Kota Asal">
                </div>
                <div class="field">
                    <label>Sekolah Asal</label>
                    <input type="text" name="sekolah_asal" placeholder="Masukan Sekolah Asal">
                </div>
                <div class="field">
                    <label>Jurusan Pilihan</label>
                    <select name="jurusan_pilih" class="ui dropdown">
                        <option value="" disable> -- Pilih Jurusan --</option>
                        <option value="0">Teknik Informatika</option>
                        <option value="1">Sistem Informasi</option>
                    </select>
                </div>

            </div>
        </div>
        <div class="field">
            <button class="fluid ui orange button" type="submit">DAFTAR</button>
    </form>
</div>

</div>


</div>
</div>




<?php require "include/footer.php"?>