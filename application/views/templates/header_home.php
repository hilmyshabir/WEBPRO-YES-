<!DOCTYPE html>
<html>

<head>
	<meta charset="UTF-8">
	<title><?= $judul; ?></title>

	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">

	<link href='https://fonts.googleapis.com/css?family=Poppins' rel='stylesheet'>
	<link rel="stylesheet" type="text/css" href="assets/css/style.css">
</head>

<body>

	<!-------------------------navbar-------------------->
	<section id="nav-bar">

		<nav class="navbar navbar-expand-lg navbar-dark">
			<a class="navbar-brand" href="#" style="color: #CAC8DC;"><img id="logo" src="assets/img/home/logo.jpg"></a>
			<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
				<span class="navbar-toggler-icon"></span>
			</button>
			<div class="collapse navbar-collapse" id="navbarNav">
				<ul class="navbar-nav ml-auto">
					<li class="nav-item active">
						<a class="nav-link" href="#" style="color: #fafafa;">Home </a>
					</li>
					<li><a class="nav-link nav-link" href="<?= base_url(); ?>auth/index" style="color: #FFFFFF;">Login</a></li>
				</ul>
			</div>
		</nav>
	</section>

	<!-------------------------banner--------------------->

	<section id="banner">
		<div class="container">
			<div class="row">
				<div class="col-md-6">
					<h3><b>WELCOME</b></h3>
					<p id="welcome">Selamat datang di Website Posyandu Tulip 20</p>
				</div>
				<div class="col-md-6 text-center">
					<img src="assets/img/home/picture.png" class="img-fluid" style="transform: scaleX(-1); width: 60%; height: 97%">
				</div>
			</div>
		</div>

	</section>