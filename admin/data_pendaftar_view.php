<?php
include 'include/header.php';
include '../config/database.php';

$id_pendaftar=$_GET['id_pendaftar'];


$query = mysqli_query($conn, "SELECT * FROM pendaftar JOIN jurusan ON pendaftar.jurusan_pilihan=jurusan.id_jurusan WHERE id_pendaftar='$id_pendaftar'");
$data = mysqli_fetch_array($query);

?>



<div class="ui three column doubling stackable grid">
    <div class="column">
        <div class="ui segment">
            <h3 class="ui block header">
                DATA PENDAFTAR
            </h3>
            <div class="card">
                <div class="content">
                    <div class="description">
                        <table class="ui single line table fluid">
                            <tbody>
                                <tr>
                                    <td>NAMA </td>
                                    <td> <?= $data['nama']; ?></td>
                                </tr>
                                <tr>
                                    <td>JENIS KELAMIN</td>
                                    <td>
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
                                    </td>
                                </tr>
                                <tr>
                                    <td>KOTA ASAL</td>
                                    <td> <?= $data['kota']; ?></td>
                                </tr>
                                <tr>
                                    <td>PROVINSI</td>
                                    <td> <?= $data['provinsi']; ?></td>
                                </tr>
                                <tr>
                                    <td>JURUSAN</td>
                                    <td><?= $data['nama_jurusan']; ?></td>
                                </tr>
                                <tr>
                                    <td>AGAMA</td>
                                    <td>
                                    <?php
                                        if($data['agama']==0)
                                        {
                                            echo "Islam";
                                        }
                                        else  if($data['agama']==1)
                                        {
                                            echo "Kristen";
                                        }
                                        else  if($data['agama']==2)
                                        {
                                            echo "katolik";
                                        }
                                        else  if($data['agama']==3)
                                        {
                                            echo "Hindu";
                                        }
                                        else  if($data['agama']==4)
                                        {
                                            echo "Budha";
                                        }
                                        else  if($data['agama']==5)
                                        {
                                            echo "Lainya";
                                        }
                                        ?>
                                    </td>
                                </tr>
                                <tr>
                                    <td>E-MAIL</td>
                                    <td> <?= $data['email']; ?></td>
                                </tr>
                                <tr>
                                    <td>SEKOLAH ASAL</td>
                                    <td> <?= $data['sekolah_asal']; ?></td>
                                </tr>
                                <tr>
                                    <td>NO TLPN</td>
                                    <td> <?= $data['no_tlpn']; ?></td>
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
                    <h3 class="ui block header">

                        <a href="data_pendaftar_update.php?id_pendaftar=<?= $id_pendaftar ?>&status_pendaftaran=2"
                            class="ui  green button">TERIMA</a>
                        <a href="data_pendaftar_update.php?id_pendaftar=<?= $id_pendaftar ?>&status_pendaftaran=3"
                            class="ui  red button">TOLAK</a>

                    </h3>
                </div>
            </div>
        </div>
    </div>
    <div class="column">
        <div class="ui segment">
            <h3 class="ui block header">
                FOTO SKHUN
            </h3>

            <img class="ui fluid image"
                src="../assets/images/gambar_pendaftar/<?= $data['id_pendaftar']."-".$data['foto_skhun'] ?>">
        </div>
    </div>
    <div class="column">
        <div class="ui segment">
            <h3 class="ui block header">
                FOTO IJAZAH
            </h3>
            <img class="ui fluid image"
                src="../assets/images/gambar_pendaftar/<?= $data['id_pendaftar']."-".$data['foto_ijazah'] ?>">
        </div>
    </div>

    <?php
mysqli_close($conn);
?>