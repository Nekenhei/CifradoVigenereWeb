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
		<div class="col-sm-6" id="izq">
			<h4>Base de datos</h4>
			<p>
				Para el almacenamiento de cada una de las codificaciones y decodificaciones 
				(las cuales llamaremos “transacciones” se usa el siguiente sistema físico de la base de datos:
			</p>
			<p>
				<center>
					<img src="IMG/fisico.JPG" class="img-thumbnail">
				</center>
			</p>	
		</div>

		<div class="col-sm-6" id="der">
			<p>
				Con sus respectivas relaciones lógicas: 
			</p>
			<p>
				<center>
					<img src="IMG/logico.JPG" class="img-thumbnail">
				</center>
			</p>	
		</div>
	</div>
	<div class="row" id="pager">

		<ul class="pager">
			<li class="previous"><a href="index2.php">Anterior</a></li>
		</ul>
	</div>

</div>
</div>
</section>
<?php
get_footer();
?>