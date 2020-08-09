<!doctype html>
<html lang="en">
  <head>
  	<title>Praktikum Sholat</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <link href="https://fonts.googleapis.com/css?family=Poppins:300,400,500,600,700,800,900" rel="stylesheet">

		<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
		<link rel="stylesheet" href="<?=base_url('assets/vendor/asset-praktikum/');?>css/style.css">
		<link rel="icon" href="<?=base_url('assets/img/pelajar/home/');?>pai.png">
		<!-- Speech Recognition -->

		<style>
  * {
    font-family: Verdana, Arial, sans-serif;
  }

  a:link {
    color: #000;
    text-decoration: none;
  }

  a:visited {
    color: #000;
  }

  a:hover {
    color: #33F;
  }

  .button {
    background: -webkit-linear-gradient(top, #008dfd 0, #0370ea 100%);
    border: 1px solid #076bd2;
    border-radius: 3px;
    color: #fff;
    display: none;
    font-size: 13px;
    font-weight: bold;
    line-height: 1.3;
    padding: 8px 25px;
    text-align: center;
    text-shadow: 1px 1px 1px #076bd2;
    letter-spacing: normal;
  }

  .center {
    padding: 10px;
    text-align: center;
  }

  .final {
    color: black;
    padding-right: 3px;
  }

  .interim {
    color: gray;
  }

  .info {
    font-size: 14px;
    text-align: center;
    color: #777;
    display: none;
  }

  .right {
    float: right;
  }

  .sidebyside {
    display: inline-block;
    width: 45%;
    min-height: 40px;
    text-align: left;
    vertical-align: top;
  }

  #headline {
    font-size: 40px;
    font-weight: 300;
  }

  #info {
    font-size: 20px;
    text-align: center;
    color: #777;
    visibility: hidden;
  }

  #results {
    font-size: 14px;
    font-weight: bold;
    border: 1px solid #ddd;
    padding: 15px;
    text-align: left;
    min-height: 150px;
  }

  #start_button {
    border: 0;
    background-color: transparent;
    padding: 0;
  }
</style>
		<!-- End Pose Classification -->
  </head>
  <body>

		<div class="wrapper d-flex align-items-stretch">
			<nav id="sidebar" class="order-last" class="img" style="background-image: url(<?=base_url('assets/vendor/asset-praktikum/');?>images/bg_1.jpg);">
				<div class="custom-menu">
					<button type="button" id="sidebarCollapse" class="btn btn-primary">
	        </button>
        </div>
        <div class="">
				  <h1><a href="index.html" class="logo">Praktikum<span>Sholat</span></a></h1>
				  <h1 style="font-size:20px;margin-bottom:10px;"><a  class="logo">Pilihan Praktek</a></h1>

	        <ul class="list-unstyled components mb-5">
	          <li class="active">
				  <!-- <div class="container">
					<div class="dropdown  ml-2 mt-n2">
						<button class="btn btn-light" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
							Pilih
						</button>
						<div class="dropdown-menu bg-dark" aria-labelledby="dropdownMenuButton">
							<a class="dropdown-item" href="<?=base_url('home/praktikum');?>">Action</a>
							<a class="dropdown-item" href="#">Another action</a>
							<a class="dropdown-item" href="#">Something else here</a>
						</div>
					</div>
				  </div> -->
	          </li>
	          <li>
			  	<div class="dropdown show">
				<a class=" dropdown-toggle" href="#" role="button" id="dropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
					Praktek I
				</a>

				<div class="dropdown-menu bg-dark" aria-labelledby="dropdownMenuLink">
					<a class="dropdown-item" href="#">Action</a>
					<a class="dropdown-item" href="#">Another action</a>
					<a class="dropdown-item" href="#">Something else here</a>
				</div>
				</div>
	          </li>
	          <li>
			  	<div class="dropdown show">
				<a class=" dropdown-toggle" href="#" role="button" id="dropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
					Praktek 2
				</a>

				<div class="dropdown-menu bg-dark" aria-labelledby="dropdownMenuLink">
					<a class="dropdown-item" href="#">Action</a>
					<a class="dropdown-item" href="#">Another action</a>
					<a class="dropdown-item" href="#">Something else here</a>
				</div>
				</div>
	          </li>
	          <li>
			  	<div class="dropdown show">
				<a class=" dropdown-toggle" href="#" role="button" id="dropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
					Praktek 3
				</a>

				<div class="dropdown-menu bg-dark" aria-labelledby="dropdownMenuLink">
					<a class="dropdown-item" href="#">Action</a>
					<a class="dropdown-item" href="#">Another action</a>
					<a class="dropdown-item" href="#">Something else here</a>
				</div>
				</div>
	          </li>
	          <li>
              <a href="#"><span class="fa fa-paper-plane mr-3"></span> Contacts</a>
	          </li>
	        </ul>

	        <div class="mb-5 px-4">
			<a href="" class="btn btn-outline-danger">Kembali</a>
			</div>

	        <div class="footer px-4">
	        	<p>Praktikum PAI</p>
	        </div>

	      </div>

    	</nav>

        <!-- Page Content  -->
      <div id="content" class="p-4 p-md-5 pt-5">
        <img class="img-fluid" alt="Responsive image" src="<?=base_url('assets/img/pelajar/praktikum/sholat/');?>sholat.jpg" alt="" class="rounded">

		<!-- Pose Classification -->
		<div class="container">

		 <div class="embed-responsive embed-responsive-16by9">
			<iframe class="embed-responsive-item" src="<?=base_url('home/pose');?>" allowfullscreen></iframe>
		</div>

		</div>
	  </div>
		</div>

    <script src="<?=base_url('assets/vendor/asset-praktikum/');?>js/jquery.min.js"></script>
    <script src="<?=base_url('assets/vendor/asset-praktikum/');?>js/popper.js"></script>
    <script src="<?=base_url('assets/vendor/asset-praktikum/');?>js/bootstrap.min.js"></script>
    <script src="<?=base_url('assets/vendor/asset-praktikum/');?>js/main.js"></script>

<!-- Speech Recognition -->



  </body>
</html>