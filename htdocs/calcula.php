<?php
require_once('Templates/template.php');
get_meta();
?>
<?php
get_header();
?>
<?php
// initialize variables
$pswd = "";
$code = "";
$error = "";
$valid = true;
// if form was submit
if ($_SERVER['REQUEST_METHOD'] == "POST")
{
    // declare encrypt and decrypt funtions
	require_once('proceso.php');

    // set the variables
	$pswd = $_POST['pswd'];
	$code = $_POST['code'];

    // check if password is provided
	if (empty($_POST['pswd']))
	{
		$error = "Por favor ingrese una clave";
		$valid = false;
	}

    // check if text is provided
	else if (empty($_POST['code']))
	{
		$error = "Por favor ingrese algún texto para decodificar o codificar";
		$valid = false;
	}

    // check if password is alphanumeric
	else if (isset($_POST['pswd']))
	{
		if (!ctype_alpha($_POST['pswd']))
		{
			$error = "La clave solo puede contener letras del abecedario";
			$valid = false;
		}
	}

    // inputs valid
	if ($valid)
	{
        // if encrypt button was clicked
		if (isset($_POST['encrypt']))
		{
			$code = encrypt($pswd, $code);
			$error = "Texto encriptado correctamente";
			$fechaActual = date("Y") . "-" . date("m") . "-" . date("d");
			//BASE DE DATOS

			//insertar usuario
			$conexion=mysqli_connect("sql109.260mb.net","n260m_19614271","2014akt*","n260m_19614271_vigenere") or
			die("Problemas con la conexión");
			mysqli_query($conexion,"INSERT INTO usuarios(`usu_name`, `usu_mail`) VALUES('$_REQUEST[name]','$_REQUEST[email]'); ")
			or die("Problemas en el registro del usuario".mysqli_error($conexion));

			//saco codigo ultimo usuario
			$sqlCodigoUsuario = "SELECT `usu_cod` FROM `usuarios` order by `usu_cod` desc";
			$resultUsuCod = mysqli_query($conexion, $sqlCodigoUsuario) or die ("Problemas en la consulta del codigo del usuario".mysqli_error($conexion));

			$ArrayUsucod = mysqli_fetch_array($resultUsuCod);
			$CodigoUsuario = $ArrayUsucod[0];

			//insertar proceso
			
			mysqli_query($conexion,"INSERT INTO procesos(`proc_entrada`, `proc_clave`, `proc_salida`, `proc_tipo_cod`) 
				VALUES('$_REQUEST[code]','$_REQUEST[pswd]','$code','1'); ")
			or die("Problemas en el registro del proceso".mysqli_error($conexion));

			//extraer codigo proceso
			$sqlCodigoProceso = "SELECT `proc_cod` FROM `procesos` order by `proc_cod` desc";
			$resultProCod = mysqli_query($conexion, $sqlCodigoProceso) or die ("Problemas en la consulta del codigo del proceso".mysqli_error($conexion));

			$ArrayProcod = mysqli_fetch_array($resultProCod);
			$CodigoProceso = $ArrayProcod[0];

			//insertar transaccion
			mysqli_query($conexion,"INSERT INTO transacciones(`tran_proc_cod`, `tran_usu_cod`, `tran_fecha`) 
				VALUES('$CodigoProceso','$CodigoUsuario','$fechaActual'); ")
			or die("Problemas en el registro de la transaccion".mysqli_error($conexion));


			mysqli_close($conexion);
		}

        // if decrypt button was clicked
		if (isset($_POST['decrypt']))
		{
			$code = decrypt($pswd, $code);
			$error = "Texto desencriptado correctamente";

			$fechaActual = date("Y") . "-" . date("m") . "-" . date("d");
			//BASE DE DATOS

			//insertar usuario
			$conexion=mysqli_connect("sql109.260mb.net","n260m_19614271","2014akt*","n260m_19614271_vigenere") or
			die("Problemas con la conexión");
			mysqli_query($conexion,"INSERT INTO usuarios(`usu_name`, `usu_mail`) VALUES('$_REQUEST[name]','$_REQUEST[email]'); ")
			or die("Problemas en el registro del usuario".mysqli_error($conexion));

			//saco codigo ultimo usuario
			$sqlCodigoUsuario = "SELECT `usu_cod` FROM `usuarios` order by `usu_cod` desc";
			$resultUsuCod = mysqli_query($conexion, $sqlCodigoUsuario) or die ("Problemas en la consulta del codigo del usuario".mysqli_error($conexion));

			$ArrayUsucod = mysqli_fetch_array($resultUsuCod);
			$CodigoUsuario = $ArrayUsucod[0];

			//insertar proceso
			
			mysqli_query($conexion,"INSERT INTO procesos(`proc_entrada`, `proc_clave`, `proc_salida`, `proc_tipo_cod`) 
				VALUES('$_REQUEST[code]','$_REQUEST[pswd]','$code','2'); ")
			or die("Problemas en el registro del proceso".mysqli_error($conexion));

			//extraer codigo proceso
			$sqlCodigoProceso = "SELECT `proc_cod` FROM `procesos` order by `proc_cod` desc";
			$resultProCod = mysqli_query($conexion, $sqlCodigoProceso) or die ("Problemas en la consulta del codigo del proceso".mysqli_error($conexion));

			$ArrayProcod = mysqli_fetch_array($resultProCod);
			$CodigoProceso = $ArrayProcod[0];

			//insertar transaccion
			mysqli_query($conexion,"INSERT INTO transacciones(`tran_proc_cod`, `tran_usu_cod`, `tran_fecha`) 
				VALUES('$CodigoProceso','$CodigoUsuario','$fechaActual'); ")
			or die("Problemas en el registro de la transaccion".mysqli_error($conexion));


			mysqli_close($conexion);
		}
	}
}
?>
<div class="container-fluid">
	<h2>Cifrado Vigenere</h2>
	<hr>
	<form>
		<div class="form-group">
			<div class="row">
				<div class="col-sm-3" id="izq"></div>
				<div class="col-sm-6" id="centro"> 
					<label for="usr">Clave:</label>
					<input type="text" class="form-control" name="pswd" id="pass" value="<?php echo htmlspecialchars($pswd); ?>" disabled/>
				</div>
				<div class="col-sm-3" id="der"></div>
			</div>
			<div class="row">
				<div class="col-sm-1" id="izq"></div>
				<div class="col-sm-10" id="centro"> 
					<div class="form-group">
						<label for="comment">Texto:</label>
						<textarea class="form-control" rows="5" id="box" name="code" disabled ><?php echo htmlspecialchars($code); ?></textarea>
					</div> 
					<label>Fecha actual: </label><span><?php echo $fechaActual; ?></span>
				</div>
				<div class="col-sm-1" id="der"></div>
			</div>

		</form>
	</div>
</section>
<?php
get_footer();
?>


