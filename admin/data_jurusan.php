<?php

include "../config/database.php";
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

$sql = "SELECT * FROM jurusan";
$result = mysqli_query($conn, $sql);

if (mysqli_num_rows($result) > 0) {
    // output data of each row
    while ($row = mysqli_fetch_assoc($result)) {
        ?>



            <tr>
                <td><?=$row['id_jurusan']?></td>
                <td><?=$row['nama_jurusan']?></td>

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








