<?php


function kode_pendaftaran($conn)
{
    $query = "SELECT max(id_pendaftar) as maxKode FROM pendaftar";
    $hasil = mysqli_query($conn,$query);
    $data = mysqli_fetch_array($hasil);
    $id_pendaftar = $data['maxKode'];
    $noUrut = (int) substr($id_pendaftar, 3, 5);
    $noUrut++;
    $char = "UTM";
    $id_pendaftar = $char . sprintf("%05s", $noUrut);

    return $id_pendaftar;
}


?>