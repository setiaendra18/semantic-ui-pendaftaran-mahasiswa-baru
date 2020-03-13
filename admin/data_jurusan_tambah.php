<?php
include 'include/header.php';

 ?>
<div class="ui segments">
    <div class="ui segment">
        <h3>FORMULIR PENAMBAHAN JURUSAN</h3>
        <form class="ui form" method="POST" action="data_jurusan_simpan.php">
            <div class="field">
                <div class="field">
                    <label>Pilih Fakultas</label>
                    <select name="fakultas_pilih" class="ui dropdown">
                            <?php  
                                $sql = "SELECT * FROM fakultas";
                                $result = mysqli_query($conn, $sql);

                                if (mysqli_num_rows($result) > 0)
                                 {
                                    while($row = mysqli_fetch_assoc($result))
                                    {
                            ?>

                            <option value="<?= $row['id_fakultas']; ?>"> <?= $row['nama_fakultas']; ?></option>
                            <?php 
                                    } 
                                    
                                }else 
                                {
                                    echo "0 results";
                                }
                                    mysqli_close($conn);
                                    ?>



                        </select>
                </div>
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
</div>
</div>