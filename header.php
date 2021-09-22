<?php 
    session_start();
    require "koneksi.php";
 ?>
<!DOCTYPE html>
<html lang="en" ng-app="myApp">

<head>
    <!-- Required meta tags -->
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <meta name="dicoding:email" content="arifnurochman6@gmail.com">
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="assets/css/bootstrap.min.css">
    <!-- Font -->
    <link rel="stylesheet" href="assets/css/font-awesome-4.7.0/css/font-awesome.min.css">
    <!-- Owl carausel -->
    <link rel="stylesheet" href="assets/js/owl/owl.carousel.css">
    <link rel="stylesheet" href="assets/js/owl/owl.theme.css">
    <!-- Favicon -->
    <link rel="shortcut icon" href="assets/img/icon/favicon.jpg">
    <link href="assets/css/material-design/css/materialdesignicons.css" rel="stylesheet" type="text/css">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/sweetalert/2.1.2/sweetalert.min.js"></script>
    <style>
        body {
            background-color: rgb(246, 245, 245);
        }

        .navbar {
            padding: 0px;
            margin: 0px;
            box-shadow: 0px 2px 5px grey;
        }

        .navbar-nav li {
            z-index: 1;
        }

        .navbar-nav li a {
            font-size: 17px;
            padding: 15px 30px !important;
        }

        .navbar-nav li a:hover {
            border-bottom: 3.5px solid rgb(38, 161, 85);
            transition: 0.5s all;
            font-size: 15px;
            padding: 14px 32.5px !important;
        }

        .navbar-light .navbar-nav .nav-item .nav-link {
            color: black;
        }

        @media(max-width:1200px) {
            .navbar-nav li {
                font-size: 15px;
            }
        }

        @media(max-width:992px) {
            .navbar-toggler {
                margin: 10px 0px 10px 30px;
                border-color: #ff4f81;
            }

            .navbar-toggler:hover,
            .navbar-toggler:focus {
                background-color: white;
                border-color: #ff4f81;
            }

            .navbar-light {
                background-color: white;
            }

            .navbar-nav li a {
                text-align: center;
                background-color: white;
            }

            .navbar-nav li a:hover {
                background-color: rgb(38, 161, 85);
            }

        }
    </style>

    <title>Klaten Kita</title>
</head>

<body>
    <header>
        <nav class="navbar fixed-top navbar-expand-lg navbar-light bg-white m-0 p-0">
            <div class="container pl-3 pr-3">
                <a class=" navbar-brand" href="#">
                    <img src="assets/img/icon/LOGO.png" width="100" alt="">
                </a>
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavDropdown"
                    aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse  justify-content-center" id="navbarNavDropdown">
                    <ul class="navbar-nav">
                        <li class="nav-item">
                            <a class="nav-link" href="index.php">Home</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="wisata.php">Wisata</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="kuliner.php">Kuliner</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="postingan.php">Postingan</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="gallery.php">Gallery</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="about.php">About</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="contact.php">Contact</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="posting.php">Posting</a>
                        </li>
                    </ul>
                </div>
                <?php if (isset($_SESSION["member"])) : ?>
                <button class="btn btn-success navbar-btn m-2"
                    onclick="window.location.href='logout.php'">Logout</button>
                <?php else: ?>
                <button class="btn btn-success navbar-btn m-2" onclick="window.location.href='login.php'">Login</button>
                <?php endif ?>

            </div>
        </nav>
    </header>