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
			<h3>Busqueda de Transacciones</h3>
			
			<p>Ingrese el ID de la transacción a buscar.</p>
			<form action="idResultado.php" method="POST">
				<div class="form-group">
					<label>ID de la transacción: </label>
					<input type="text" id="idTran" name="idTran" class="form-control">
				</div>
				<input type="submit" class="btn btn-default" value="Buscar">
			</form>

		</div>
		<div class="col-sm-3" id="der"></div>



	</div>




</div>
</div>
</section>
<?php
get_footer();
?>