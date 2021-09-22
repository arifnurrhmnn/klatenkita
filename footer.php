    <style>
        .list-unstyled li a {
            color: white;
            text-decoration: none;
        }

        .list-unstyled li a:hover {
            color: rgb(163, 211, 255);
            text-decoration: none;
        }

        /* 
        .garis {
            background-color: white;
            border: 1px solid white;
            border-radius: 3px;
            width: 75%;
            height: 1px;
        } */

        input.btn.i {
            border: 2px solid white;
            width: 75%;
            padding: 7px;
            border-top-right-radius: 0;
            border-bottom-right-radius: 0;
        }

        button.btn.o {
            border: 2px solid white;
            padding: 7px;
            font-weight: bold;
            border-top-left-radius: 0;
            border-bottom-left-radius: 0;
        }

        ::placeholder {
            color: white;
        }

        footer {
            left: 0;
            bottom: 0;
            width: 100%;
        }
    </style>
    <footer>
        <div class="page-footer font-small indigo  bg-success mt-5">
            <div class="container-fluid text-center text-md-left pb-3">
                <div class="row text-white">
                    <div class="col-md-2 mx-auto">
                        <h5 class="font-weight-bold text-uppercase mt-3 mb-2">TENTANG KAMI</h5>
                        Website ini dibuat supaya bisa memberika informasi seputar tempat wisata dan tempat kuliner yang ada di daerah Kabupaten Klaten
                        <br>
                        <img src="assets/img/icon/ig.PNG" height="25px" width="25px" alt="">
                        <img src="assets/img/icon/fb.png" height="25px" width="25px" alt="">
                        <img src="assets/img/icon/twitter.png" height="23px" width="23px" alt="">
                    </div>
                    <div class="col-md-2.5 mx-auto">
                        <h5 class="font-weight-bold text-uppercase mt-3 mb-2">KATEGORI</h5>
                        <ul class="list-unstyled">
                            <li>
                                <a href="#!">Tempat Wisata</a>
                            </li>
                            <li>
                                <a href="#!">Wisata Kuliner </a>
                            </li>
                            <li>
                                <a href="#!">Galleri</a>
                            </li>
                        </ul>
                    </div>
                    <hr class="clearfix w-100 d-md-none">
                    <div class="col-md-1.5 mx-auto">
                        <h5 class="font-weight-bold text-uppercase mt-3 mb-2">INFORMASI</h5>
                        <ul class="list-unstyled">
                            <li>
                                <a href="#!">Privasi Pribadi</a>
                            </li>
                            <li>
                                <a href="#!">Syarat dan ketentuan</a>
                            </li>
                            <li>
                                <a href="#!">Pertanyaan</a>
                            </li>
                        </ul>
                    </div>
                    <hr class="clearfix w-100 d-md-none">
                    <div class="col-md-2 mx-auto">
                        <h5 class="font-weight-bold text-uppercase mt-3 mb-2">KABAR TERBARU?</h5>
                        <form action="#">
                            <div class="input-group">
                                <input class="btn i bg-success text-white text-md-left" name="email" id="email"
                                    type="email" placeholder="Email Kamu">
                                <button class="btn btn-info o bg-white text-success" type="submit">OK</button>
                            </div>
                        </form>
                    </div>
                    <hr class="clearfix w-100 d-md-none">
                    <div class="col-md-2 mx-auto">
                        <h5 class="font-weight-bold text-uppercase mt-3 mb-2">HUBUNGI KAMI</h5>
                        <ul class="list-unstyled">
                            +62 7654 2832 9237 <br>
                            klatenkita@gmail.com <br>
                            Jl.Sukasaya Km 9,2
                        </ul>
                    </div>
                </div>
            </div>
            <div class="footer-copyright text-center py-3 bg-dark text-white">©2019 Copyright :
                <a href="index.html" class="text-success"> klaten Kita</a>
            </div>
        </div>
    </footer>

    </body>
    <!-- Js Dasar -->
    <script src="assets/jquery/jquery.min.js"></script>
    <script src="assets/js/bootstrap.min.js"></script>
    <script src="assets/js/bootstrap.bundle.min.js"></script>
    <!-- Popper -->
    <script src="assets/js/popper/popper.min.js"></script>
    <!-- Owl Carausel -->
    <script src="assets/js/owl/owl.carousel.js"></script>
    <!-- Sweetalert -->
    <script src="assets/js/sweetalert/sweetalert.min.js"></script>
    <!--Tinymce js-->
    <script src="assets/plugins/tinymce/tinymce.min.js"></script>
    <script>
        $(document).ready(function () {
            if ($("#elm1").length > 0) {
                tinymce.init({
                    selector: "textarea#elm1",
                    theme: "modern",
                    height: 300,
                    plugins: [
                        "advlist autolink link image lists charmap print preview hr anchor pagebreak spellchecker",
                        "searchreplace wordcount visualblocks visualchars code fullscreen insertdatetime media nonbreaking",
                        "save table contextmenu directionality emoticons template paste textcolor"
                    ],
                    toolbar: "insertfile undo redo | styleselect | bold italic | alignleft aligncenter alignright alignjustify | bullist numlist outdent indent | l      ink image | print preview media fullpage | forecolor backcolor emoticons",
                    style_formats: [{
                            title: 'Bold text',
                            inline: 'b'
                        },
                        {
                            title: 'Red text',
                            inline: 'span',
                            styles: {
                                color: '#ff0000'
                            }
                        },
                        {
                            title: 'Red header',
                            block: 'h1',
                            styles: {
                                color: '#ff0000'
                            }
                        },
                        {
                            title: 'Example 1',
                            inline: 'span',
                            classes: 'example1'
                        },
                        {
                            title: 'Example 2',
                            inline: 'span',
                            classes: 'example2'
                        },
                        {
                            title: 'Table styles'
                        },
                        {
                            title: 'Table row 1',
                            selector: 'tr',
                            classes: 'tablerow1'
                        }
                    ]
                });
            }
        });
    </script>

    </html>