<?php 
require "include/header.php";

?>


<div class="ui segments">
    <div class="ui segment">

    <h3 class="ui blue block header">DATA PENDAFTAR PMB UTM 2020/2021

</h3>
        <table class="ui striped celled table">
            <thead class="ui striped celled table">
                <tr>
                    <th width="150px">NO PENDAFTARAN</th>
                    <th>NAMA</th>
                    <th>JURUSAN</th>
                    <th>FAKULTAS</th>
                    <th>JENIS KELAMIN</th>
                    <th>KOTA</th>
                    <th>PROVINSI</th>
                   
                    <th width="150px">STATUS</th>
                </tr>
            </thead>
            <tbody>
                <?php

$sql = "SELECT * FROM pendaftar JOIN jurusan ON pendaftar.jurusan_pilihan=jurusan.id_jurusan JOIN fakultas ON jurusan.id_fakultas=fakultas.id_fakultas";
$result = mysqli_query($conn, $sql);

if (mysqli_num_rows($result) > 0) {
    // output data of each row
    while($row = mysqli_fetch_assoc($result))
     {
         ?>



                <tr>
                    <td><?= $row['id_pendaftar']?></td>
                    <td><?= $row['nama']?></td>
                    <td><?= $row['nama_jurusan']?></td>
                    <td><?= $row['nama_fakultas']?></td>
                    <td>
                        <?php
                
                if($row['jenis_kelamin']==0)
                {
                    echo "Laki-Laki";
                }
                else 
                {
                    echo "Perempuan";
                }
                
                
                ?>

                    </td>
                    <td><?= $row['kota']?></td>
                    <td><?= $row['provinsi']?></td>
                    
                    <td>
                        <?php
                
                if($row['status_pendaftaran']==1)
                {
                    echo "<a class='ui orange label'>DALAM REVIEW</a>";
                }
                elseif($row['status_pendaftaran']==2)
                {
                    echo "<a class='ui green label'>DI TERIMA</a>";
                }
                else
                {
                    echo "<a class='ui red label'>DI TOLAK</a>";
                }
                
                
                ?>


                    </td>
                </tr>

                <?php
    }
} else {
    echo "0 results";
}

mysqli_close($conn);
?>


            </tbody>
        </table>

    </div>
</div>









<?php require "include/footer.php"?>