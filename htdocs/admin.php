<?php
require_once('Templates/template.php');
get_meta();
?>
<script src="JS/validarCampos.js"></script>
<?php
get_header();
?>
<div class="container-fluid">
	<h2>Administración del sitio</h2>
	<hr>
	<div class="row">
		<div class="col-sm-3" id="izq"></div>
		<div class="col-sm-6" id="centro">
			<div>

				<h3>Consultas:</h3>
				<ul class="list-group">
					<li class="list-group-item"><a href="AllTra.php">Todas las transacciones</a></li>
					<li class="list-group-item"><a href="AllProc.php">Todos los procesos</li>
					<li class="list-group-item"><a href="AllUsu.php">Todos los usuarios</li>
					<li class="list-group-item"><a href="id.php">Busqueda por id de transacción</li>
					<li class="list-group-item"><a href="pass.php">Busqueda por clave</li>
					<li class="list-group-item"><a href="correo.php">Busqueda por correo</li>
				</ul>

			</div>
			
		</div>
		<div class="col-sm-3" id="der"></div>



	</div>




</div>
</div>
</section>
<?php
get_footer();
?>