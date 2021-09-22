<?php require "header.php"; ?>
<style>
    .banner .img {
        width: 100%;
        height: 250px;
        background-image: url('assets/img/header.jpg');
        padding: 0px;
        margin: 0px;
    }

    .img .box {
        height: 250px;
        background-color: rgb(41, 41, 41, 0.7);
        display: flex;
        justify-content: center;
        align-items: center;
        flex-direction: column;
        color: white;
        padding-top: 70px;
    }

    .row {
        margin-left: 0;
        margin-right: 0;
    }

    .row>[class^="col-sm-4"] {
        padding-left: 0;
        padding-right: 0;
    }

    .row>[class^="col-sm-8"] {
        padding-right: 100px;
    }
</style>

<div class="banner mb-5">
    <div class="container-fluid img">
        <div class="container-fluid box">
            <h3>TENTANG KAMI</h3>
            <p>Home > <a href="about.php" class="text-success">About</a></p>
        </div>
    </div>
</div>
<div class="content">
    <div class="container">
        <div class="row no-gutter">
            <div class="col-sm-8 text-justify">
                <h4>KLATEN KAMI</h4>
                <p>Website ini dibuat supaya bisa memberika informasi seputar tempat-tempat wisata dan kuliner yang ada
                    di daerah Kabupaten Klaten Jawa Tengah ini.
                    Supaya bisa membantu para wisatawan yang datang di Kabupaten Klaten dalam mecari tempat wisata
                    maupun kuliner.
                </p>
                <p>Dalam website ini terdapat fitur bagi pengguna yang di mana dapat mengunggah sebuah artikel. Sehinga
                    pengguna website ini bisa memberikan informasi tentang
                    tempat wisata dan kuliner terbaru apa saja yang ada di kabupaten klaten ini. Tetapi fitur tersebut
                    di dapatkan apabila pengguna sudah mendaftar di website ini dan sudah menjadi member.
                </p>
            </div>
            <div class="col-sm-4">
                <img src="assets/img/1-carausel.jpg" height="300px" width="100%">
            </div>
        </div>
    </div>
</div>
<?php require "footer.php"; ?>