<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- SEO Meta Tags -->
    <meta name="description" content="Tivo is a HTML landing page template built with Bootstrap to help you crate engaging presentations for SaaS apps and convert visitors into users.">
    <meta name="author" content="Inovatik">

    <!-- OG Meta Tags to improve the way the post looks when you share the page on LinkedIn, Facebook, Google+ -->
	<meta property="og:site_name" content="" /> <!-- website name -->
	<meta property="og:site" content="" /> <!-- website link -->
	<meta property="og:title" content=""/> <!-- title shown in the actual shared post -->
	<meta property="og:description" content="" /> <!-- description shown in the actual shared post -->
	<meta property="og:image" content="" /> <!-- image link, make sure it's jpg -->
	<meta property="og:url" content="" /> <!-- where do you want your post to link to -->
	<meta property="og:type" content="article" />

    <!-- Website Title -->
    <title>PAI - Praktikum Agama Islam</title>

    <!-- Styles -->
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:400,400i,700&display=swap&subset=latin-ext" rel="stylesheet">
    <link href="<?=base_url('assets/vendor/asset-landing/');?>css/bootstrap.css" rel="stylesheet">
    <link href="<?=base_url('assets/vendor/asset-landing/');?>css/fontawesome-all.css" rel="stylesheet">
    <link href="<?=base_url('assets/vendor/asset-landing/');?>css/swiper.css" rel="stylesheet">
	<link href="<?=base_url('assets/vendor/asset-landing/');?>css/magnific-popup.css" rel="stylesheet">
	<link href="<?=base_url('assets/vendor/asset-landing/');?>css/styles.css" rel="stylesheet">

    <!-- Custom Style -->
    <style>
    body{
        background-color:#D4DFE6;
    }
        a{
            text-decoration:none;
        }
    .navbar-custom{
    background-color: #FFFFF3;
    }
    .absen-yaumiyah{
        min-height:400px;
        background-color:#D4DFE6;
    }
    @media screen and (min-width: 992px) {
        .navbar-custom{
    height:50px;
    }
    .background-header{
        height:150px;
    }

    .yaumiyah{
        float:right;
        height:300px;width:500px;
    }
}
    .navbar-custom .navbar-toggler {
	color: #000;
    }

    .header {
        margin-top:50px;
        background-image: url('<?=base_url('assets/img/pelajar/home/');?>1.png');
        background-size: cover;
    }
    .btn-outline-sm:hover {
	color: #E71D36;
    }
    .navbar-custom .nav-item .btn-outline-sm {
	border: 0.125rem solid #E71D36;
	color: #E71D36;
    }
    .navbar-custom .nav-item .btn-outline-sm:hover {
    background-color: #E71D36;
    color:#FFFFF3;
    }


    .list-nav{
        color:#30A9DE;
    }
    .navbar-custom.top-nav-collapse {
		background-color: #fff;
    }

    .praktikum{
        min-height:425px;
        background-color:#D4DFE6;
    }

    .hr{
        border:0;
        height:4px;
        background-image: linear-gradient(to right, rgba(0,0,0,0),rgba(0,0,0,0.75), rgba(0,0,0,0));
    }
    </style>

	<!-- Favicon  -->
    <link rel="icon" href="<?=base_url('assets/img/pelajar/home/');?>pai.png">
</head>
<body data-spy="scroll" data-target=".fixed-top">

    <!-- Preloader -->
	<div class="spinner-wrapper">
        <div class="spinner">
            <div class="bounce1"></div>
            <div class="bounce2"></div>
            <div class="bounce3"></div>
        </div>
    </div>
    <!-- end of preloader -->


    <!-- Navigation -->
    <nav class="navbar navbar-expand-lg navbar-light navbar-custom fixed-top">
        <div class="container">

            <!-- Text Logo - Use this if you don't have a graphic logo -->
            <!-- <a class="navbar-brand logo-text page-scroll" href="index.html">Tivo</a> -->

            <!-- Image Logo -->
            <a class="navbar-brand logo-image" href="<?=base_url('home');?>"><img src="<?=base_url('assets/img/pelajar/home/');?>logo.png" alt="alternative"></a>

            <!-- Mobile Menu Toggle Button -->
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarsExampleDefault" aria-controls="navbarsExampleDefault" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-awesome fas fa-bars"></span>
                <span class="navbar-toggler-awesome fas fa-times"></span>
            </button>
            <!-- end of mobile menu toggle button -->

            <div class="collapse navbar-collapse" id="navbarsExampleDefault">
                <ul class="navbar-nav mr-auto">
                    <li class="nav-item">
                        <a class="nav-link page-scroll" href="<?=base_url('home/amalan');?>"><span class="list-nav">Absensi</span> </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link page-scroll" href="<?=base_url('home');?>"><span class="list-nav">Materi</span> </a>
                    </li>

                    <li class="nav-item">
                        <a class="nav-link page-scroll" href="<?=base_url('home');?>"><span class="list-nav">Praktikum</span> </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link page-scroll" href="<?=base_url('home/evaluasi');?>"><span class="list-nav">Evaluasi</span></a>
                    </li>
                </ul>
                <span class="nav-item">
                    <a class="btn-outline-sm " href="<?=base_url('auth/logout');?>">Keluar</a>
                </span>
            </div>
        </div> <!-- end of container -->
    </nav> <!-- end of navbar -->
    <!-- end of navigation -->
