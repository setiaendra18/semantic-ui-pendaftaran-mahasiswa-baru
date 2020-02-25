<?php 
require "include/header.php";
include "config/database.php";
?>



<div class="ui main  text container">
    <table class="ui striped celled table">
        <thead>
            <tr>
                <th>NO PENDAFTARAN</th>
                <th>NAMA</th>
                <th>JENIS KELAMIN</th>
                <th>KOTA</th>
                <th>PROVINSI</th>
                <th>STATUS PENDAFTARAN</th>
            </tr>
        </thead>
        <tbody>
            <?php

$sql = "SELECT * FROM pendaftar";
$result = mysqli_query($conn, $sql);

if (mysqli_num_rows($result) > 0) {
    // output data of each row
    while($row = mysqli_fetch_assoc($result))
     {
         ?>


           
            <tr>
                <td><?= $row['id_pendaftar']?></td>
                <td><?= $row['nama']?></td>
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
                    echo "<a class='ui red label'>DALAM REVIEW</a>";
                }
                else 
                {
                    echo "<a class='ui green label'>DI TERIMA</a>";
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








<?php require "include/footer.php"?>