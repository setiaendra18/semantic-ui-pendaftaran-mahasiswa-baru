<?php

include '../config/database.php';

echo $id_jurusan=$_GET['id_jurusan'];
echo $nama_jurusan=$_GET['nama_jurusan'];

    $query = "UPDATE jurusan SET nama_jurusan='$nama_jurusan' WHERE id_jurusan='$id_jurusan'";
    if (!$result = mysqli_query($conn, $query))
    {
        exit(mysqli_error($conn));
    }
    else
    {
        header("location:data_jurusan.php");
    }

?>