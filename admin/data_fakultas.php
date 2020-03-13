<?php
include 'include/header.php';
include '../config/database.php';
?>

<div class="ui segments">
    <div class="ui segment">


        <h3 class="ui blue block header">DATA FAKULTAS UTM (UNIVERSITAS TEKNOLOGI MATARAM)

        </h3>

        <a href="data_fakultas_tambah.php" class="mini ui green  button">TAMBAH</a>
        <table class="ui striped celled table">
            <thead>
                <tr>
                    <th>NO</th>
                    <th>NAMA FAKULTAS</th>
                    <th>AKSI</th>
                </tr>
            </thead>
            <tbody>
                <?php

$sql = "SELECT * FROM fakultas";
$result = mysqli_query($conn, $sql);

if (mysqli_num_rows($result) > 0) {
    // output data of each row
    while ($row = mysqli_fetch_assoc($result)) {
        ?>
                <tr>
                    <td><?=$row['id_fakultas']?></td>
                    <td><?=$row['nama_fakultas']?></td>
                    <td class="center aligned">
                        <a href="data_fakultas_view.php?id_fakultas=<?= $row['id_fakultas'];?>"
                            class="mini ui green button">  <i class="eye icon"></i></a>
                        <a href="data_fakultas_delete.php?id_fakultas=<?= $row['id_fakultas'];?>"
                            class="mini ui black button">  <i class="trash icon"></i></a><br>
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
</div>