<?php
function get_meta(){
	?>
	<!DOCTYPE html>
	<html class="no-js" lang="">
	<head>
		<meta charset="utf-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
		<title>.:Proyecto Articulado:.</title>
		<meta name="description" content="Proyecto Articulado de Tercer Semestre">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/font-awesome/4.2.0/css/font-awesome.min.css">
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css">
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap-theme.min.css">
		<link rel="stylesheet" href="CSS/style.css">
		<script src="//code.jquery.com/jquery-1.11.3.min.js"></script>
		<script src="//code.jquery.com/jquery-migrate-1.2.1.min.js"></script>
		<script src="JS/jquery.js"></script>
		<script src="JS/bootstrap.js"></script>
		<?php
	}
	function get_header(){
		?>
	</head>
	<body style="padding-top: 60px;">
		<nav class="navbar navbar-inverse navbar-fixed-top" role="navigation">
			<div class="container-fluid">
				<div class="navbar-header">
					<button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
						<span class="icon-bar"></span>
						<span class="icon-bar"></span>
						<span class="icon-bar"></span>                        
					</button>
					<a class="navbar-brand" href="index.php">Proyecto Articulado 2017-I</a>
				</div>
				<div class="collapse navbar-collapse" id="myNavbar">
					<ul class="nav navbar-nav">
						<li class="active"><a href="vigenere.php">Vigenere App</a></li>
					</ul>
					<ul class="nav navbar-nav navbar-right">
						<li><a href="admin.php"><span class="glyphicon glyphicon-log-in"></span> Admin</a></li>
					</ul>
				</div>
			</div>
		</nav>
		<section id="main-content">
			<div class="content">
				<?php
			}

			function get_footer(){
				?>
			</div>
			<footer class="footer-distributed">
				<div class="footer-left">
					<p class="footer-links">
						<a href="index.php"><i class="fa fa-home"></i></a>
						<!--<a href="/Semestre2"><i class="fa fa-home"></i></a>-->
					</p>
					<p class="footer-company-name">Escuela Tecnologica Instituto Tecnico Central &copy; 2015</p>
				</div>
				<div class="footer-center">
					<div>
						<i class="fa fa-code"></i>
						<p><span>Developed By:</span><b>Esteban Giraldo</b></p>
					</div>
					<div>
						<i class="fa fa-envelope"></i>
						<p><a href="mailto:begiraldos@itc.edu.co">begiraldos@itc.edu.co</a></p>
					</div>
				</div>
				<div class="footer-right">
					<p class="footer-company-about">
						<span>Redes ETITC</span>
						Sigue al ETITC en sus diferentes redes sociales.
					</p>
					<div class="footer-icons">
						<a href="https://www.facebook.com/etitc" target="_blank"><i class="fa fa-facebook"></i></a>
						<a href="https://twitter.com/etitc" target="_blank"><i class="fa fa-twitter"></i></a>
						<a href="https://instagram.com/etitc/" target="_blank"><i class="fa fa-instagram"></i></a>
						<a href="http://www.itc.edu.co/es" target="_blank"><i class="fa fa-graduation-cap"></i></a>
					</div>
				</div>
			</footer>
		</body>
		</html>
		<?php
	}

	?>
