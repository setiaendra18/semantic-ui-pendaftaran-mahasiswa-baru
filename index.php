<?php require "include/header.php"?>

<div class="ui two column stackable grid">
    <div class="four wide column">

        <div class="ui fluid card">
            <div class="image">
                <img src="assets/images/logo.png">
            </div>
            <div class="content">
                <a class="header">UTM</a>
                <div class="meta">
                    <span class="date">Universitas Teknologi Mataram</span>
                </div>
                <div class="description">
                    Pendaftaran Mahasiswa Baru 2020/2021
                </div>
            </div>

        </div>

    </div>
    <div class="twelve wide column">
        <img class="ui  bordered fluid image" src="assets/images/diskusi.jpg">
    </div>
</div>

<h4 class="ui divider"></h4>


<div class="ui centered grid stackable">
    <div class=" four wide column">
        <h3 class="ui green header">
            <i class="file icon"></i>
            <div class="content">
                TERAKREDITASI

            </div>
        </h3>
        Semua Program di Universitas Teknologi Mataram telah Terakreditasi oleh Badan
        Akreditasi Nasional Perguruan Tinggi (BAN-PT)
    </div>
    <div class=" five wide column">
        <h3 class="ui brown header">
            <i class="map icon"></i>
            <div class="content">
                LOCAL ACADEMCY

            </div>
        </h3>
        Universitas Teknologi Mataram dipercaya sebagai Local Academy sertifikasi internasional untuk Cisco (CCNA) dan
        MikroTik (MTCNA)
    </div>
    <div class="seven wide column">
        <h3 class="ui red header">
            <i class="desktop icon"></i>
            <div class="content">
                LSP UTM (Univsersitas Teknologi Mataram)

            </div>
        </h3>
        Memiliki Lembaga Sertifikasi Profesi dibawah Badan Nasional Sertifikasi Profesi, sehingga mahasiswa yang
        berkompeten dapat mengikuti sertifikasi bidang Networking dan Programing
    </div>
</div>

<h4 class="ui  divider"></h4>


<div class="ui segment">

    <div class="ui  centered  column stackable grid">


        <div class=" five wide column">

            <div class="ui blue fluid card">
                <div class="image">
                    <img class="ui fluid image" src="assets/images/3.jpg">
                </div>
                <div class="content">
                    <a class="ui blue header">TEKNOLOGI INFORMASI DAN KOMUNIKASI</a>
                    <div class="ui  divider"></div>
                    <div class="description">
                        <?php

$sql = "SELECT * FROM jurusan JOIN fakultas ON jurusan.id_fakultas=fakultas.id_fakultas WHERE jurusan.id_fakultas=1";
$result = mysqli_query($conn, $sql);
$nomor=1;
if (mysqli_num_rows($result) > 0) {
    // output data of each row
    while ($row = mysqli_fetch_assoc($result)) {
        ?>


                        <div class="ui items">
                            <div class="item">
                                <div class="content">
                                    <a class="header"><?=$row['nama_jurusan']?></a>
                                    <!--<div class="description">
                        <p>Stevie Feliciano is a <a>library scientist</a> living in New York City. She likes to spend
                            her time reading, running, and writing.</p>
                    </div>-->
                                </div>
                            </div>
                        </div>

                        <?php
                $nomor++;
}
} else {
    echo "0 results";
}


?>
                    </div>
                </div>

            </div>

        </div>


        <div class=" five wide column">

<div class="ui blue fluid card">
    <div class="image">
        <img class="ui medium image" src="assets/images/6.jpg">
    </div>
    <div class="content">
        <a class="ui orange header">ILMU SOSIAL DAN HUMANIORA</a>
        <div class="ui  divider"></div>
        <div class="description">
            <?php

$sql = "SELECT * FROM jurusan JOIN fakultas ON jurusan.id_fakultas=fakultas.id_fakultas WHERE jurusan.id_fakultas=2";
$result = mysqli_query($conn, $sql);
$nomor=1;
if (mysqli_num_rows($result) > 0) {
// output data of each row
while ($row = mysqli_fetch_assoc($result)) {
?>


            <div class="ui items">
                <div class="item">
                    <div class="content">
                        <a class="header"><?=$row['nama_jurusan']?></a>
                        <!--<div class="description">
            <p>Stevie Feliciano is a <a>library scientist</a> living in New York City. She likes to spend
                her time reading, running, and writing.</p>
        </div>-->
                    </div>
                </div>
            </div>

            <?php
    $nomor++;
}
} else {
echo "0 results";
}


?>
        </div>
    </div>

</div>

</div>

<div class=" five wide column">

<div class="ui blue fluid card">
    <div class="image">
        <img class="ui fluid image" src="assets/images/6.jpg">
    </div>
    <div class="content">
        <a class="ui purple header">VOKASI</a>
        <div class="ui  divider"></div>
        <div class="description">
            <?php

$sql = "SELECT * FROM jurusan JOIN fakultas ON jurusan.id_fakultas=fakultas.id_fakultas WHERE jurusan.id_fakultas=3";
$result = mysqli_query($conn, $sql);
$nomor=1;
if (mysqli_num_rows($result) > 0) {
// output data of each row
while ($row = mysqli_fetch_assoc($result)) {
?>


            <div class="ui items">
                <div class="item">
                    <div class="content">
                        <a class="header"><?=$row['nama_jurusan']?></a>
                        <!--<div class="description">
            <p>Stevie Feliciano is a <a>library scientist</a> living in New York City. She likes to spend
                her time reading, running, and writing.</p>
        </div>-->
                    </div>
                </div>
            </div>

            <?php
    $nomor++;
}
} else {
echo "0 results";
}


?>
        </div>
    </div>

</div>

</div>










    </div>


</div>




<?php require "include/footer.php"?>