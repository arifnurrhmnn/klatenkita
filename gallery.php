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

    .col-md-4 {
        padding: 3px;
    }

    #box,
    #box-b {
        cursor: pointer;
        position: relative;
        overflow: hidden;
    }

    #box::after {
        background-color: black;
        opacity: 0.8;
        position: absolute;
        overflow: hidden;
        top: 100%;
        bottom: 0;
        left: 3px;
        right: 3px;
        padding: 23px;
        content: attr(data-text);
        text-align: center;
        font-size: 14px;
        color: white;
        transition: 0.9s ease;
    }

    #box-b::after {
        background-color: black;
        opacity: 0.8;
        position: absolute;
        overflow: hidden;
        top: 100%;
        bottom: 0;
        left: 3px;
        right: 3px;
        padding: 25px;
        content: attr(data-text);
        text-align: center;
        font-size: 14px;
        color: white;
        transition: 0.9s ease;
    }

    #box:hover::after,
    #box-b:hover::after {
        top: 75%;
    }
</style>
<div class="banner mb-5">
    <div class="container-fluid img">
        <div class="container-fluid box">
            <h3>GELLLERY</h3>
            <p>Home > <a href="gallery.php" class="text-success">Gallery</a></p>
        </div>
    </div>
</div>

<div class="content">
    <div class="container">
        <div class="row">
            <?php
                $query="SELECT * FROM tbl_artikel ORDER BY id_artikel desc";
                $result=mysqli_query($db,$query);
                while ($data = mysqli_fetch_array($result)) {
            ?>
            <div class="col-md-4" id="box" data-text="<?php echo $data['judul']; ?>">
                <a href="detail-postingan.php?id=<?php echo $data['id_artikel'] ?>">
                    <img src="assets/img/images/<?php echo $data['gambar'];?>" alt="" width="100%" height="280px">
                </a>
            </div>
            <?php } ?>
        </div>
    </div>
</div>
<?php require "footer.php"; ?>