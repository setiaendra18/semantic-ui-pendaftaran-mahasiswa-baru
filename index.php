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

<h4 class="ui  divider"></h4>


<div class="ui three column stackable grid">
    <div class="five wide column">
        <h3 class="ui green header">
            <i class="file icon"></i>
            <div class="content">
                Terakreditasi

            </div>
        </h3>
        Semua Program di Universitas Teknologi Mataram telah Terakreditasi oleh Badan
        Akreditasi Nasional Perguruan Tinggi (BAN-PT)
    </div>
    <div class="five wide column">
        <h3 class="ui blue header">
            <i class="map icon"></i>
            <div class="content">
                Local Academy

            </div>
        </h3>
        Universitas Teknologi Mataram dipercaya sebagai Local Academy sertifikasi internasional untuk Cisco (CCNA) dan
        MikroTik (MTCNA)
    </div>
    <div class="five wide column">
        <h3 class="ui red header">
            <i class="desktop icon"></i>
            <div class="content">
                LSP Universitas Teknologi Mataram

            </div>
        </h3>
        Memiliki Lembaga Sertifikasi Profesi dibawah Badan Nasional Sertifikasi Profesi, sehingga mahasiswa yang
        berkompeten dapat mengikuti sertifikasi bidang Networking dan Programing
    </div>
</div>

<h4 class="ui  divider"></h4>

<div class="ui  column stackable grid">


    <div class="five wide column">

        <div class="ui fluid card">
            <div class="image">
                <img class="ui fluid image" src="assets/images/kelas.jpg">
            </div>
            <div class="content">
                <a class="ui blue header">FAKULTAS TEKNOLOGI INFORMASI DAN KOMUNIKASI</a>
                <div class="meta">
                    <span class="date">Joined in 2013</span>
                </div>
                <div class="description">
                    Kristy is an art director living in New York.
                </div>
            </div>

        </div>

    </div>
    <div class="ten wide column">

        <div class="ui yellow message">
            <i class="star icon"></i>
            To make the entire content of an item link, check out the link variation below
        </div>

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

    <div class="five wide column">

<div class="ui fluid card">
    <div class="image">
        <img class="ui fluid image" src="assets/images/kelas.jpg">
    </div>
    <div class="content">
        <a class="ui blue header">ILMU SOSIAL DAN HUMANIORA</a>
        <div class="meta">
            <span class="date">Joined in 2013</span>
        </div>
        <div class="description">
            Kristy is an art director living in New York.
        </div>
    </div>

</div>

</div>
<div class="ten wide column">

<div class="ui yellow message">
    <i class="star icon"></i>
    To make the entire content of an item link, check out the link variation below
</div>

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

<div class="five wide column">

        <div class="ui fluid card">
            <div class="image">
                <img class="ui fluid image" src="assets/images/kelas.jpg">
            </div>
            <div class="content">
                <a class="ui blue header">VOKASI</a>
                <div class="meta">
                    <span class="date">Joined in 2013</span>
                </div>
                <div class="description">
                    Kristy is an art director living in New York.
                </div>
            </div>

        </div>

    </div>
    <div class="ten wide column">

        <div class="ui yellow message">
            <i class="star icon"></i>
            To make the entire content of an item link, check out the link variation below
        </div>

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






<?php require "include/footer.php"?>