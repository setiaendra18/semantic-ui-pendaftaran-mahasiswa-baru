<?php
include 'include/header.php';
include '../config/database.php';

$id_pendaftar=$_GET['id_pendaftar'];




$query = mysqli_query($conn, "SELECT * FROM pendaftar WHERE id_pendaftar='$id_pendaftar'");
$data = mysqli_fetch_array($query);

?>


<div class="ui main  text container">
    <div class="ui fluid card ">
        <div class="card ">
            <div class="content">
                <div class="header">
                    <?= $data['nama']; ?>
                </div>
                <div class="meta">
                    <?php

                     if($data['jenis_kelamin']==0)
                     {
                         echo "laki-laki";
                     }
                     else
                     {
                         echo "Perempuan";
                     }
                     ?>

                </div>
                <div class="description">
                    <table class="ui single line table fluid">
                        <tbody>
                            <tr>
                                <td>KOTA ASAL</td>
                                <td>John Lilki</td>
                            </tr>
                            <tr>
                                <td>PROVINSI</td>
                                <td>John Lilki</td>
                            </tr>
                            <tr>
                                <td>JURUSAN</td>
                                <td>John Lilki</td>
                            </tr>
                            <tr>
                                <td>AGAMA</td>
                                <td>John Lilki</td>
                            </tr>
                            <tr>
                                <td>E-MAIL</td>
                                <td>John Lilki</td>
                            </tr>
                            <tr>
                                <td>SEKOLAH ASAL</td>
                                <td>John Lilki</td>
                            </tr>
                            <tr>
                                <td>NO TLPN</td>
                                <td>John Lilki</td>
                            </tr>
                            <tr>
                                <td>SKHUN</td>
                                <td class="center aligned">
                                    <?php
                                        if($data['foto_skhun']!=null)
                                        {
                                            echo '<i class="large green checkmark icon"></i>';
                                        }
                                        else
                                        {
                                            echo '<i class="large red crossmark icon"></i>';
                                        }
                                    ?>

                                </td>
                            </tr>
                            <tr>
                                <td>IJAZAH</td>
                                <td class="center aligned">
                                    <?php
                                        if($data['foto_ijazah']!=null)
                                        {
                                            echo '<i class="large green checkmark icon"></i>';
                                        }
                                        else
                                        {
                                            echo '<i class="large red close icon"></i>';
                                        }
                                    ?>


                                </td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>
            <div class="extra content">
                <div class="ui two buttons">
                    <div class="ui basic green button">Approve</div>
                    <div class="ui basic red button">Decline</div>
                </div>
            </div>
        </div>


    </div>

</div>




<?php
mysqli_close($conn);

?>