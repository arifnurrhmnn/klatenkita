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

    /*     .col-md-4 p {
        white-space: nowrap;
        overflow: hidden;
        text-overflow: ellipsis;
    } */
</style>

<div class="banner mb-3">
    <div class="container-fluid img">
        <div class="container-fluid box">
            <h3>POSTINGAN</h3>
            <p>Home > <a href="about.php" class="text-success">Postingan</a></p>
        </div>
    </div>
</div>
<div class="containt">
    <div class="container">
        <div class="row">
            <div class="col-md-8 mb-2">
                <form class="form-group">
                    <input class="form-control" width="100%" type="search" name="select" placeholder="Search">
                </form>
            </div>
            <div class="col-md-2 mb-2">
                <form action="">
                    <input type="submit" class="btn btn-success btn-block" name="wisata" value="wisata">
                </form>
            </div>
            <div class="col-md-2 mb-2">
                <form action="">
                    <input type="submit" class="btn btn-success btn-block" name="kuliner" value="kuliner">
                </form>
            </div>
            <div class="row mb-4">
                <div class="col-12 pl-5 text-secondary">
                <?php 
                if (isset($_GET['select'])) {
                    $cari = $_GET['select'];
                    echo "<h4><i>Hasil pencarian : ".$cari."</i></h4>";
                }
                else if (isset($_GET['wisata'])) {
                    $cari = $_GET['wisata'];
                    echo "<h4><i>Filter : ".$cari."</i></h4>";
                }
                else if (isset($_GET['kuliner'])) {
                    $cari = $_GET['kuliner'];
                    echo "<h4><i>Filter : ".$cari."</i></h4>";
                }
                ?>
                </div>
            </div>
        </div>
        <div class="row">
            <?php
                if (isset($_GET['select'])) {
                    $cari = $_GET['select'];
                    $query="SELECT * FROM tbl_artikel WHERE judul LIKE '%".$cari. "%'ORDER BY id_artikel desc";
                }elseif (isset($_GET['wisata'])) {
                    $cari = $_GET['wisata'];
                    $query="SELECT * FROM tbl_artikel WHERE kategori ='$cari' ORDER BY id_artikel desc";
                }elseif (isset($_GET['kuliner'])) {
                    $cari = $_GET['kuliner'];
                    $query="SELECT * FROM tbl_artikel WHERE kategori ='$cari' ORDER BY id_artikel desc";
                }
                else {
                    $query="SELECT * FROM tbl_artikel ORDER BY id_artikel desc";
                }
                $result=mysqli_query($db,$query);
                while ($data = mysqli_fetch_assoc($result)) {
                    $tgl = $data['tgl'];
                    $kalimat= $data['isi'];
                    $huruf_maksimal=110;
                    $hasil=substr($kalimat, 0, $huruf_maksimal);
            ?>
            <div class="col-md-4 mb-3">
                <div class="">
                    <img src="assets/img/images/<?php echo $data['gambar'];?>" height="250px" width="100%" alt="...">
                </div>
                <h5 class="mt-2">
                    <a href="detail-postingan.php?id=<?php echo $data['id_artikel'] ?>"
                        class="font-weight-bold text-dark"
                        style="text-decoration: none;"><?php echo $data['judul']; ?></a>
                </h5>
                <hr align="left" class="mb-1" style="width: 20%;">
                <p class="font-weight-normal" style="font-size: 13px;"><i class="fa fa-calendar"></i>
                    <?php echo date("F d, Y", strtotime($tgl)); ?>
                </p>
                <div class="text-justify"><?php echo $hasil.' . . .'; ?></div>
            </div>
            <?php } ?>
        </div>
    </div>
</div>
<!-- <?php
    $query="SELECT * FROM tbl_artikel";
    $ecex=mysqli_query($db, $query);
    $data = mysqli_fetch_assoc($ecex);
?>
<pre>
<?php
$tgl = $data['tgl'];
echo date("F d,Y", strtotime($tgl));
?>
</pre> -->
<?php require "footer.php"; ?>