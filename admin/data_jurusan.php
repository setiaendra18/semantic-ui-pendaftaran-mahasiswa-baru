<?php
include 'include/header.php';
include '../config/database.php';
?>

<div class="ui segments">
    <div class="ui segment">


        <h3 class="ui blue block header">DATA JURUSAN UTM (UNIVERSITAS TEKNOLOGI MATARAM)

        </h3>

        <a href="data_jurusan_tambah.php" class="mini ui green  button">TAMBAH</a>
        <table class="ui striped celled table">
            <thead>
                <tr>
                    <th>NO</th>
                    <th>NAMA JURUSAN</th>
                    <th>FAKULTAS </th>
                    <th>AKSI</th>
                </tr>
            </thead>
            <tbody>
                <?php

$sql = "SELECT * FROM jurusan JOIN fakultas ON jurusan.id_fakultas=fakultas.id_fakultas";
$result = mysqli_query($conn, $sql);
$nomor=1;
if (mysqli_num_rows($result) > 0) {
    // output data of each row
    while ($row = mysqli_fetch_assoc($result)) {
        ?>
                <tr>
                    <td><?=$nomor?></td>
                    <td><?=$row['nama_jurusan']?></td>
                    <td><?=$row['nama_fakultas']?></td>
                    <td class="center aligned">
                        <a href="data_jurusan_view.php?id_jurusan=<?= $row['id_jurusan'];?>"
                            class="mini ui green button">  <i class="eye icon"></i></a>
                        <a href="data_jurusan_delete.php?id_jurusan=<?= $row['id_jurusan'];?>"
                            class="mini ui black button">  <i class="trash icon"></i></a><br>
                    </td>
                </tr>

                <?php
                $nomor++;
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
<div class="ui hidden divider"></div>