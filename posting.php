<?php 
require "header.php";

if (!isset($_SESSION["member"])) {
    echo "<script>alert('Silahkan Login Dulu');</script>";
    echo "<script>location='login.php';</script>";
}; 
?>


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
</style>

<div class="banner mb-5">
    <div class="container-fluid img">
        <div class="container-fluid box">
            <h3>POSTING</h3>
            <p>Home > <a href="about.php" class="text-success">Posting</a></p>
        </div>
    </div>
</div>
<!-- <pre>
    <?php
    print_r($_SESSION["member"]["id_member"]);
    ?>
</pre> -->
<!-- <?php
echo date('F j, Y');
?> -->
<div class="content">
    <div class="container">
        <?php
        if (isset($_POST['post']))
        {
            $idMember = $_SESSION["member"]["id_member"];
            $judul = $_POST['judul'];
            $isi = $_POST['isi'];
            $kategori = $_POST['kategori'];
            $tgl= date('Y-m-d');
            $nmGambar = $_FILES['gambar']['name'];
            $lokasi = $_FILES['gambar']['tmp_name'];

            if (!empty($lokasi)) //Jika temporari tidak kosong 
            { 
                //memindah file gambar dari file temporari ke folder assets/images/foto_produk/
                move_uploaded_file($lokasi, "assets/img/images/" . $nmGambar);
                //Memasukkan data ke tabel tbl_produk
                $query = "INSERT INTO tbl_artikel
                        (id_member,judul,isi,gambar,kategori,tgl)
                        VALUE('$idMember', '$judul', '$isi', '$nmGambar', '$kategori','$tgl')";
                $exec= mysqli_query($db, $query);
                //Menampilkan pesan jika data berhasil di masukkan
                echo "<p class='alert alert-success' role='alert'>
                        Berhasil Menambahkan Postingan.<br />
                        <a href='postingan.php'>Lihat Postingan</a>
                        </p>";
            }
            else //jika temporari kosong
            {
                //Menampilkan pesan jika gambar belum dimasukkan
                echo "<p class='alert alert-danger' role='alert'>
                        [Error] Upload Gambar Gagal.<br />
                        </p>";
            }
        };
        ?>
        <form action="" method="POST" enctype="multipart/form-data">
            <div class="row">
                <div class="col-md-8 mb-2">
                    <div class="card">
                        <div class="card-body">
                            <div class="form-group">
                                <label class="font-weight-bold">Judul</label>
                                <input type="text" class="form-control" name="judul" required="required">
                            </div>
                            <div class="form-group">
                                <label class="font-weight-bold">Isi Postingan </label>
                                <textarea id="elm1" name="isi"></textarea>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="card">
                        <div class="card-body">
                            <div class="form-group">
                                <label class="font-weight-bold">Kategori</label>
                                <select name="kategori" id="" class="form-control required="required"">
                                    <option value="">Pilih Kategori</option>
                                    <option value="Kuliner">Kuliner</option>
                                    <option value="Wisata">Wisata</option>
                                </select>
                            </div>
                            <div class="form-group">
                                <label class="font-weight-bold">Gambar</label>
                                <input type="file" class="form-control-file" name="gambar" required="required">
                            </div>
                            <button type="submit" class="btn btn-success waves-effect waves-light mt-3" name="post">Post
                                Sekarang</button>
                        </div>
                    </div>
                </div>
            </div>
        </form>
    </div>
</div>
<?php require "footer.php"; ?>