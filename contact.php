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

        .box a {
            color: #0066FF;
        }

        .box a:hover {
            text-decoration: none;
            color: rgb(6, 87, 209);
        }

        /* content */
        .row {
            margin-left: 0;
            margin-right: 0;
            margin-bottom: 6px;
        }

        .row>[class^="col"] {
            padding-left: 3px;
            padding-right: 3px;
        }

        textarea {
            width: 100%;
        }

        #googleMap {
            width: 100%;
            height: 350px;
        }
    </style>

    <div class="banner mb-5">
        <div class="container-fluid img">
            <div class="container-fluid box">
                <h3>HUBUNGI KAMI</h3>
                <p>Home > <a href="contact.php" class="text-success">Contact</a></p>
            </div>
        </div>
    </div>

    <div class="container">
        <div class="row">
            <div class="col-md-8 col-sm-12 pr-4">
                <form action="" method="post">
                    <div class="form-row">
                        <div class="col-md-4 mb-3">
                            <input type="text" class="form-control" id="validationDefault01" placeholder="First name"
                                value="" required>
                        </div>
                        <div class="col-md-4 mb-3">
                            <input type="text" class="form-control" id="validationDefault01" placeholder="Last name"
                                value="" required>
                        </div>
                        <div class="col-md-4 mb-3">
                            <input type="text" class="form-control" id="validationDefault02" placeholder="E-mail"
                                value="" required>
                        </div>
                    </div>
                    <div class="form-row">
                        <div class="col">
                            <textarea class="form-control" id="validationTextarea"
                                placeholder="Required example textarea" rows="9" required></textarea>
                            <div class="invalid-feedback">
                                Please enter a message in the textarea.
                            </div>
                        </div>
                    </div>
                    <div class="form-group mt-3">
                        <input type="button" class="btn btn-success" value="Send Message" id="submit"
                            onclick="validate();" />
                    </div>
                </form>
            </div>
            <div class="col-md-4 col-sm-12  pt-5 text-left">
                <h5>Contact Info</h5>
                <p>Bila anda ada pertanyan, silahkan kirim pesan ke kami.</p>
                <i class="fa fa-tty"></i> 0823 3232 4442 <br>
                <i class="fa fa-envelope"></i> klatenkita@gmail.com <br>
                <i class="fa fa-hourglass"></i> Monday - Saturday (08.00 - 17.00) <br>
                <i class="fa fa-map-marker"></i> Jl.Suka Saya Km 23 <br>

            </div>
        </div>
    </div>
    <script>
        // Initialize and add the map
        function validate() {
            var var1 = document.getElementById("validationDefault01").value;
            var var2 = document.getElementById("validationDefault02").value;
            if (var1 == "" && var2 == "") {
                swal({
                    title: "Please fill in first !",
                    icon: "warning"
                })
                return false;
            }
            if (var1 != "" || var2 != "") {
                swal({
                    title: "Message sent successfully",
                    icon: "success"
                }).then(okay => {
                    if (okay) {
                        window.location.href = "#!/contact";
                    }
                });

            }

        }
    </script>
<?php require "footer.php"; ?>