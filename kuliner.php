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

    .box .titleBanner:hover {
        text-decoration: none;
    }

    .row {
        margin-left: 0;
        margin-right: 0;
    }

    .row a {
        color: black;
    }

    .row a:hover {
        color: rgb(97, 97, 97);
        text-decoration: none;
    }

    /* .row hr,
        .media hr {
            border: 1px solid blue;
            width: 100px;
        } */
    hr {
        width: 100px;
    }

    .sosmed {
        height: auto;
        display: flex;
        flex-direction: row;
        justify-content: center;
        padding-left: 0;
        padding-right: 0;
    }

    .sosmed-items {
        color: #fff;
        width: 120px;
        height: 120px;
        font-size: 30px;
        padding: 0;
        margin: 0;
        display: flex;
        justify-content: center;
        flex-direction: column;
        align-items: center;
    }

    .follower {
        margin-top: 20px;
        font-weight: normal;
        font-size: 13px;
    }

    .status {
        font-weight: bold;
        font-size: 17px;
    }

    .sosmed-items:hover {
        background-color: black;
    }

    .bg1 {
        background-color: #3b5998
    }

    .bg1:hover {
        color: #3b5998
    }

    .bg2 {
        background-color: #1da1f2
    }

    .bg2:hover {
        color: #1da1f2
    }

    .bg3 {
        background-color: #ea4335
    }

    .bg3:hover {
        color: #ea4335
    }

    .list-group li {
        border: none;
        padding-left: 0;
        padding-right: 0;
    }

    /* .bawah .container .row .col hr {
            border: 1.5px solid blue;
            width: 100px;
        } */
</style>

<div class="banner mb-5">
    <div class="container-fluid img">
        <div class="container-fluid box">
            <h3>KULINER</h3>
            <p>Home > <a href="#" class="titleBanner text-success">Kuliner</a></p>
        </div>
    </div>
</div>
<div class="container mb-5">
    <div class="row text-center">
        <?php
                $query="SELECT * FROM tbl_artikel WHERE kategori='Kuliner' LIMIT 3";
                $result=mysqli_query($db,$query);
                while ($data = mysqli_fetch_array($result)) {
                    $tgl = $data['tgl'];
        ?>
        <div class="col-md-4 col-sm-12 ">
            <div class="imgup mb-2"><img src="assets/img/images/<?php echo $data['gambar'];?>" height="280px" width="100%"
                    alt="...">
            </div>
            <h5><a href="detail-postingan.php?id=<?php echo $data['id_artikel'] ?>"
                        class="font-weight-bold"><?php echo $data['judul']; ?></a></h5>
            <hr align="center">
            <p class="font-weight-normal" style="font-size: 13px;"><i class="fa fa-calendar"></i> <?php echo date("F d, Y", strtotime($tgl)); ?>
            </p>
        </div>
        <?php } ?>
    </div>
</div>
<div class="tengah mb-5">
    <div class="container">
        <div class="row text-left">
            <?php
                $query="SELECT * FROM tbl_artikel WHERE kategori='Kuliner' ORDER BY Gambar asc LIMIT 1";
                $result=mysqli_query($db,$query);
                while ($data = mysqli_fetch_array($result)) {
                    $tgl = $data['tgl'];
            ?>
            <div class="col-md-8 col-sm-12">
                <h4 class="font-weight-bold"><span class="text-success">ARTIKEL</span> FAVORIT</h4>
                <hr align="left">
                <div class="imgup mb-2"> <img src="assets/img/images/<?php echo $data['gambar'];?>" height="400pxpx" width="100%"
                        alt="..."></div>
                <h5>
                    <a href="detail-postingan.php?id=<?php echo $data['id_artikel'] ?>"
                        class="font-weight-bold"><?php echo $data['judul']; ?></a>
                </h5>
                <hr align="left">
                <p class="font-weight-normal" style="font-size: 13px;"><i class="fa fa-calendar"></i> <?php echo date("F d, Y", strtotime($tgl)); ?></p>
            </div>
            <?php } ?>
            <div class="col-md-4 col-sm-12">
                <div class="row">
                    <div class="col">
                        <h5>IKUTI KAMI</h5>
                        <hr align="left">
                        <div class="sosmed mb-5">
                            <div class="sosmed-items bg1"><i class="fa fa-facebook"></i>
                                <div class="follower">56 K</div>
                                <div class="status">FANS</div>
                            </div>
                            <div class="sosmed-items bg2"><i class="fa fa-twitter"></i>
                                <div class="follower">1.5 M</div>
                                <div class="status">FOLLOWER</div>
                            </div>
                            <div class="sosmed-items bg3"><i class="fa fa-google"></i>
                                <div class="follower">13 K</div>
                                <div class="status">FOLLOWER</div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="row">
                    <div class="col">
                        <h5>KATEGORI POPULER</h5>
                        <hr align="left">
                        <ul class="list-group">
                            <li class="list-group-item d-flex justify-content-between align-items-center"
                                style="background-color: transparent;">Wisata Air
                                <span class="badge badge-success badge-pill">23</span>
                            </li>
                            <li class="list-group-item d-flex justify-content-between align-items-center"
                                style="background-color: transparent;">Wisata Candi
                                <span class="badge badge-success badge-pill">25</span>
                            </li>
                            <li class="list-group-item d-flex justify-content-between align-items-center"
                                style="background-color: transparent;">Kuliner Pedas
                                <span class="badge badge-success badge-pill">32</span>
                            </li>
                            <li class="list-group-item d-flex justify-content-between align-items-center"
                                style="background-color: transparent;">Tempat
                                Nongkrong
                                <span class="badge badge-success badge-pill">16</span>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<div class="bawah">
    <div class="container ">
        <div class="row">
            <div class="col">
                <h4 class="font-weight-bold"><span class="text-success">ARTIKEL</span> TERBARU</h4>
                <hr align="left">
            </div>
        </div>
        <div class="row mb-3">
            <?php
                $query="SELECT * FROM tbl_artikel WHERE kategori='Kuliner' ORDER BY id_artikel desc LIMIT 6";
                $result=mysqli_query($db,$query);
                while ($data = mysqli_fetch_assoc($result)) {
                    $tgl = $data['tgl'];
                    $kalimat= $data['isi'];
                    $huruf_maksimal=100;
                    $hasil=substr($kalimat, 0, $huruf_maksimal);
            ?>
            <div class="col-md-4 col-sm-12">
                <div class="imgup mb-2"><img src="assets/img/images/<?php echo $data['gambar'];?>" height="280px" width="100%"
                        alt="..."></div>
                <h5>
                     <a href="detail-postingan.php?id=<?php echo $data['id_artikel'] ?>"
                        class="font-weight-bold "><?php echo $data['judul']; ?></a>
                </h5>
                <hr align="left" class="mb-1">
                <p class="font-weight-normal" style="font-size: 13px;"><i class="fa fa-calendar"></i><?php echo date("F d, Y", strtotime($tgl)); ?></p>
                <div class="text-justify"><?php echo $hasil.' . . .'; ?></div>
            </div>
            <?php } ?>
        </div>
    </div>
</div>

<?php require "footer.php"; ?>