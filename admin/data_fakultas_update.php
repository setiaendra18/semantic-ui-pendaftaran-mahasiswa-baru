<?php

include '../config/database.php';

echo $id_fakultas=$_GET['id_fakultas'];
echo $nama_fakultas=$_GET['nama_fakultas'];

    $query = "UPDATE fakultas SET nama_fakultas='$nama_fakultas' WHERE id_fakultas='$id_fakultas'";
    if (!$result = mysqli_query($conn, $query))
    {
        exit(mysqli_error($conn));
    }
    else
    {
        header("location:data_fakultas.php");
    }

?>