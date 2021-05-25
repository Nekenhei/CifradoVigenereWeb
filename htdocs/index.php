<?php
require_once('Templates/template.php');
get_meta();
?>
<script src="JS/validarCampos.js"></script>
<?php
get_header();
?>
<div class="container-fluid">
	<h2>Proyecto Articulado 2017-I</h2>
	<hr>
	<div class="row">
		<center>
			<img src="IMG/logo_es.jpg" class="img-thumbnail">
		</center>
		<br>
		<br>
	</div>
	<div class="row">
		<div class="col-sm-6" id="izq">
			<h4>Vigenere App</h4>
			<p>Aplicación web diseñada y desarrollada por Bryan Esteban Giraldo Sánchez. Estudiante de la Escuela Tecnológica Instituto Técnico Central, 
				actualmente cursando VI semestre de la <i>Tecnología en desarrollo de Software.</i>
			</p>
			<p>
				La aplicación Web consta de dos apartados principales: 
				<br>
				<ul>
					<li>
						WebApp desarrollada para codificar o decodificar mensajes mediante el código de cifrado Vigenere cuyo resultado queda almacenado en una base de datos.
					</li>
					<br>
					<li>
						Sección de administración donde se puede consultar la información almacenada en la base de datos.
					</li>
				</ul>
			</p>
			<p>
				El funcionamiento de esta aplicación fue desarrollado usando la arquitectura cliente-servidor. 
			</p>
			<p>
				Esta arquitectura es pensada para que el ordenador de cliente solo se encarga de recopilar la información que es introducida en los formularios, 
				información con la cual solicita un proceso el cual es ejecutado por el servidor de almacenamiento de la aplicación. 
				De esta manera se asegura un rendimiento uniforme de la aplicación cualquiera sea el dispositivo usado. 
			</p>
		</div>
		<div class="col-sm-6" id="der">
			<p>
				Este proyecto fue diseñado para integrar las asignaturas de Programación III, Bases de Datos I y Teoría de la información. 
			</p>
			<p>
				La integración se desarrolla de las siguientes formas: 
				<br>
				<ul>
					<li>
						Programación III: Front-end de cada una de las páginas, así como el back-end necesario para la conexión vía PHP con una base de datos MySQL 
						alojada en servicio de hosting gratuito 260MB.
					</li>
					<br>
					<li>
						Bases de datos I: Querys de creación de la DB, creación de tablas, inserción de datos y consultas de múltiples tablas mediante joins. 
					</li>
					<br>
					<li>
						Teoría de la información: Bases de conocimiento para comprender el funcionamiento del cifrado Vigenere y llevarlo a un algoritmo desarrollado en PHP.
					</li>
				</ul>
			</p>
			<p>
				<center>
					<img src="IMG/cliente-servidor.png" class="img-thumbnail" width="350" height="350">
				</center>
			</p>
		</div>
	</div>
	<div class="row" id="pager">
		<ul class="pager">
			<li class="next"><a href="index2.php">Siguiente</a></li>
		</ul>
	</div>




</div>
</div>
</section>
<?php
get_footer();
?>