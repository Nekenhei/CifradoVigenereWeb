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
			<h4>Cifrado Vigenere</h4>
			<p>
				El cifrado Vigenere es un criptosistema simétrico, es decir, utiliza la misma clave para cifrar y descifrar.
				<br> 
				Esta clave es de longitud variable. El cifrado Vigenere entra también en la categoría de cifrado polialfabetico, 
				lo que significa que utiliza el mismo diccionario para cifrar y de sustitución.
			</p>
			<p>
				El diccionario usado por este método es el siguiente:
				<br>
				<span class="bg-info">A B C D E F G H I J K L M N O P Q R S T U V W X Y Z</span> 
			</p>
			<p>
				Teniendo en cuenta el diccionario que usa este tipo de cifrado se puede inferir que no es posible cifrar textos que contenga caracteres especiales o números,
				está limitado únicamente a texto plano compuesto por ese mismo alfabeto.
			</p>
			<p>
				A groso modo el cifrado consiste en reemplazar cada letra del mensaje por una letra equivalente, 
				dicha letra es dada por cruzar la letra del mensaje con la subyaciente letra de la clave. Estos cruces son dados a partir de la tabla de Vigenere.
			</p>
			<p>
				<center>
					<img src="IMG/ejemplo.png" class="img-thumbnail">
				</center>
			</p>
		</div>

		<div class="col-sm-6" id="der">
			<center>
				<img src="IMG/table.png" class="img-thumbnail">
			</center>
		</div>
	</div>
	<div class="row" id="pager">

		<ul class="pager">
			<li class="previous"><a href="index.php">Anterior</a></li>
			<li class="next"><a href="index3.php">Siguiente</a></li>
		</ul>
	</div>

</div>
</div>
</section>
<?php
get_footer();
?>