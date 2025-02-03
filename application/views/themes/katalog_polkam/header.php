<?php
defined('BASEPATH') or exit('No direct script access allowed');
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <title><?php echo $title; ?> | <?php echo get_store_name(); ?></title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <link href="https://fonts.googleapis.com/css?family=Poppins:200,300,400,500,600,700,800&display=swap"
        rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Lora:400,400i,700,700i&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Amatic+SC:400,700&display=swap" rel="stylesheet">

    <!-- Logo sites -->
    <link rel="icon" href="<?php echo base_url('assets/uploads/sites/Logo.png'); ?>">

    <link rel="stylesheet" href="<?php echo get_theme_uri('css/open-iconic-bootstrap.min.css'); ?>">
    <link rel="stylesheet" href="<?php echo get_theme_uri('css/animate.css'); ?>">

    <link rel="stylesheet" href="<?php echo get_theme_uri('css/owl.carousel.min.css'); ?>">
    <link rel="stylesheet" href="<?php echo get_theme_uri('css/owl.theme.default.min.css'); ?>">
    <link rel="stylesheet" href="<?php echo get_theme_uri('css/magnific-popup.css'); ?>">
    <!-- bottstrap icon -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.2/font/bootstrap-icons.css">
    <!-- aos animation -->
    <link rel="stylesheet" href="<?php echo get_theme_uri('css/aos.css'); ?>">
    <!-- ionicons -->
    <link rel="stylesheet" href="<?php echo get_theme_uri('css/ionicons.min.css'); ?>">
    <link rel="stylesheet"
        href="<?php echo get_theme_uri('js/plugins/@fortawesome/fontawesome-free/css/all.min.css', 'argon'); ?>">

    <link rel="stylesheet" href="<?php echo get_theme_uri('css/bootstrap-datepicker.css'); ?>">
    <link rel="stylesheet" href="<?php echo get_theme_uri('css/jquery.timepicker.css'); ?>">

    <link rel="stylesheet" href="<?php echo get_theme_uri('css/flaticon.css'); ?>">
    <link rel="stylesheet" href="<?php echo get_theme_uri('css/icomoon.css'); ?>">
    <link rel="stylesheet" href="<?php echo get_theme_uri('css/style.css'); ?>">
    <!-- toastr notification -->
    <link rel="stylesheet" href="<?php echo base_url('assets/plugins/toastr/toastr.min.css'); ?>">
    <!-- jquery -->
    <script src="<?php echo get_theme_uri('js/jquery.min.js'); ?>"></script>
    <script src="<?php echo get_theme_uri('js/jquery-migrate-3.0.1.min.js'); ?>"></script>
    <style>
        .owl-carousel.home-slider .slider-item {
            background-size: cover;
            background-repeat: no-repeat;
            background-position: center center;
            position: relative;
            height: 39dvw;
            z-index: 0;
        }

        #slider-homes {
            /* bottom: -51px; */
            position: fixed;
            top: 75%;
            bottom: 100px;
        }
        #products {
                margin-top: 30px;
            }
        @media (max-width: 991px) {
            .owl-carousel.home-slider .slider-item {
                background-size: fill;
                background-repeat: no-repeat;
                background-position: center center;
                position: relative;
                z-index: 0;
            }

            .owl-carousel.home-slider {
                position: relative;
                height: 27vh;
                z-index: 0;
            }

            #slider-homes {
                /* bottom: -51px; */
                position: fixed;
                top: 50%;
                bottom: 100px;
            }

            #products {
                margin-top: 0px;
            }

            #home-section {
                height: auto;
            }
        }

        .whatsapp-button {
            position: fixed;
            bottom: 20px;
            right: 20px;
            z-index: 1000;
            background-color: #25d366;
            color: white;
            border-radius: 50%;
            width: 60px;
            height: 60px;
            display: flex;
            align-items: center;
            justify-content: center;
            box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
        }

        .whatsapp-button:hover {
            background-color: #20b954;
            text-decoration: none;
        }
    </style>
</head>

<body class="goto-here">
    <div class="py-1 d-none d-lg-block" style="background-color: #ff7f00; color: white;">
        <div class="container">
            <div class="row no-gutters d-flex align-items-start align-items-center px-md-0">
                <div class="col-lg-12 d-block">
                    <div class="row d-flex">
                        <div class="col-md pr-4 d-flex topper align-items-center">
                            <div class="icon mr-2 d-flex justify-content-center align-items-center"><span
                                    class="icon-phone2"></span></div>
                            <span class="text"><?php echo get_settings('store_phone_number'); ?></span>
                        </div>
                        <div class="col-md pr-4 d-flex topper align-items-center">
                            <div class="icon mr-2 d-flex justify-content-center align-items-center"><span
                                    class="icon-paper-plane"></span></div>
                            <span class="text"><?php echo get_settings('store_email'); ?></span>
                        </div>
                        <div class="col-md-5 pr-4 d-flex topper align-items-center text-lg-right">
                            <span class="text"><?php echo get_settings('store_tagline'); ?></span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <nav class="navbar navbar-expand-lg navbar-dark ftco_navbar bg-dark ftco-navbar-light" id="ftco-navbar">
        <div class="container">
            <h4 style="color: #ff7f00; text-align: left;"><strong>E-KATALOG PRODUK & JASA <br>POLITEKNIK KAMPAR</strong></h4>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#ftco-nav"
                aria-controls="ftco-nav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="oi oi-menu"></span>
            </button>

            <div class="collapse navbar-collapse" id="ftco-nav">
                <ul class="navbar-nav ml-auto">
                    <li class="nav-item active"><a href="<?php echo base_url(); ?>" class="nav-link">Beranda</a></li>
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="" id="dropdown04" data-toggle="dropdown"
                            aria-haspopup="true" aria-expanded="false">Katalog</a>
                        <div class="dropdown-menu" aria-labelledby="dropdown04">
                            <a class="dropdown-item" href="<?php echo site_url('pages/produk'); ?>">Produk</a>

                            <a class="dropdown-item"
                                href="<?php echo site_url('pages/jasa'); ?>">Jasa</a>
                        </div>
                    </li>  
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="" id="dropdown05" data-toggle="dropdown"
                            aria-haspopup="true" aria-expanded="false">Info Kontak</a>
                        <div class="dropdown-menu" aria-labelledby="dropdown05">
                            <a class="dropdown-item" href="https://wa.me/<?php echo get_settings('store_phone_number'); ?>?text=Saya%20tertarik%20dengan%20produk%20dan%20jasa%20Politeknik%20Kampar">Chat Admin</a>

                            <a class="dropdown-item"
                                href="https://wa.me/<?php echo get_settings('store_phone_number'); ?>?text=Saya%20ingin%20meminta%20surat%20penawaran%20dari%20Politeknik%20Kampar%20dengan%20detail%20sebagai%20berikut%3A%0A1.%20Nama%20Perusahaan%2FInstansi%2FNama%20Perorangan%20%3A%20%02A.%20Produk%20yang%20Diinginkan%20%3A%20Harga%20%3A%20%02%0A4.%20Estimasi%20Pengerjaan%20%3A%20%05A.%20Informasi%20Lainnya%20%3A%20
                                ">Surat Penawaran</a>
                        </div>
                    </li>
                    <li class="nav-item"><a href="<?php echo site_url('auth/login'); ?>" class="nav-link">Login</a></li>
                </ul>
            </div>
        </div>
    </nav>
    <!-- END nav -->