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
			<h3>Todas las transacciones</h3>
			
			<div id="consulta">
						<?php
						$conexion=mysqli_connect("sql109.260mb.net","n260m_19614271","2014akt*","n260m_19614271_vigenere") or
						die("Problemas con la conexión");

						$sql = "SELECT tran_cod, usu_name, usu_mail, tran_fecha, proc_entrada, proc_clave, proc_salida, proceso from transacciones as t inner join 
						procesos as p on t.tran_proc_cod = p.proc_cod inner join usuarios as u on t.tran_usu_cod = u.usu_cod inner join tipo_proceso as tp 
						on p.proc_tipo_cod = tp.tipo_cod ORDER BY tran_cod;";

						$result = mysqli_query($conexion, $sql) or die ("Problemas en la consulta".mysqli_error($conexion));
						echo "<center><table class='table table-bordered table-striped table-condensed'>";
						echo "<thead><tr><th>Codigo</th><th>Usuario</th><th>Correo</th><th>Fecha</th>
						<th>Entrada</th><th>Clave</th><th>Salida</th><th>Proceso</th></thead><tbody>";

						while($fila = mysqli_fetch_array($result))
						{
							echo "<tr>";
							echo "<td>" . $fila['tran_cod'] . "</td>";
							echo "<td>" . $fila['usu_name'] . "</td>";
							echo "<td>" . $fila['usu_mail'] . "</td>";
							echo "<td>" . $fila['tran_fecha'] . "</td>";
							echo "<td>" . $fila['proc_entrada'] . "</td>";
							echo "<td>" . $fila['proc_clave'] . "</td>";
							echo "<td>" . $fila['proc_salida'] . "</td>";
							echo "<td>" . $fila['proceso'] . "</td>";
							echo "</tr>";
						} 
						echo "</tbody></table></center>";
						mysqli_close($conexion);

						?>
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