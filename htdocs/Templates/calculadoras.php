<!-- Calculadora Basica -->

<div id="basica">
<form name="calc">
	<div class="row">
		<div class="col-xs-6  col-md-offset-3">
		<div class="form-group">
	<div class="test1  input-group" id="formulario">
		<span class="input-group-addon">Operando 1: </span>
		<input type="Text" class="form-control" name="operando1" placeholder="Digite un numero..." size="12">
	</div>
	<div class="input-group">
		<span class="input-group-addon">Operando 2: </span>
		<input type="Text" class="form-control" name="operando2" placeholder="Digite un numero..." size="12">
	</div>
	<br>
	<div class="input-group">
		<span class="input-group-addon">Operacion:&nbsp;&nbsp;&nbsp;</span>
		<div class="btn-group btn-group-justified">
			<div class="btn-group">
				<button type="Button" class="btn btn-default" value=" + " onclick="calcula('+')">+</button>
			</div>
		<div class="btn-group">
		<button type="Button" class="btn btn-default" value=" - " onclick="calcula('-')">-</button>
	</div>
	<div class="btn-group">
		<button type="Button" class="btn btn-default" value=" X " onclick="calcula('*')">*</button>
	</div>
	<div class="btn-group">
		<button type="Button" class="btn btn-default" value=" / " onclick="calcula('/')">/</button>
	</div>
</div>
	</div>
	<br>
	<div class="input-group">
		<span class="input-group-addon">Resultado:&nbsp;&nbsp;&nbsp;</span>
		<input type="Text" class="form-control" name="resultado" placeholder="Resultado" size="12" disabled>
	</div>
</div>
</div>
</div>
</form>
</div>

<!-- Calculadora Movimiento Rectilinio Uniforme -->

<div id="mu">
<form name="calc">
	<div class="row">
		<div class="col-xs-6  col-md-offset-3">
		<div class="form-group">
	<div class="test1  input-group" id="formulario">
		<span class="input-group-addon">Tiempo (Segundos):</span>
		<input type="Text" class="form-control" name="operando1" placeholder="Digite el valor..." size="12">
	</div>
	<div class="input-group">
		<span class="input-group-addon">Velocidad (Mts/Seg):</span>
		<input type="Text" class="form-control" name="operando2" placeholder="Digite el valor..." size="12">
	</div>
	<br>
	<button type="Button" class="btn btn-default" value=" * " onclick="calcula('*')">Calcular</button>
	<br>
	<br>
	<div class="input-group">
		<span class="input-group-addon">Distancia (Metros):&nbsp;&nbsp;&nbsp;</span>
		<input type="Text" class="form-control" name="resultado" placeholder="Resultado" size="12" disabled>
	</div>
</div>
</div>
</div>
</form>
</div>

<!-- Solucion Cofactores-->

<div id="CofactorSolucion">
	<br>
	Menores:
	<table>
		<tr>
			<th>&nbsp;</th>
			<th>X</th>
			<th>Y</th>
			<th>Z</th>
		</tr>
		<tr>
			<td>1</td>
			<td><input type="Text" class="form-control" name="m1" size="1" disabled></td>
			<td><input type="Text" class="form-control" name="m2" size="1" disabled></td>
			<td><input type="Text" class="form-control" name="m3" size="1" disabled></td>
		</tr>
		<tr>
			<td>2</td>
			<td><input type="Text" class="form-control" name="m4" size="1" disabled></td>
			<td><input type="Text" class="form-control" name="m5" size="1" disabled></td>
			<td><input type="Text" class="form-control" name="m6" size="1" disabled></td>
		</tr>
		<tr>
			<td>3</td>
			<td><input type="Text" class="form-control" name="m7" size="1" disabled></td>
			<td><input type="Text" class="form-control" name="m8" size="1" disabled></td>
			<td><input type="Text" class="form-control" name="m9" size="1" disabled></td>
		</tr>
	</table>
	<br>
	Cofactores:
	<br>
	<table>
		<tr>
			<th>&nbsp;</th>
			<th>X</th>
			<th>Y</th>
			<th>Z</th>
		</tr>
		<tr>
			<td>1</td>
			<td><input type="Text" class="form-control" name="c1" size="1" disabled></td>
			<td><input type="Text" class="form-control" name="c2" size="1" disabled></td>
			<td><input type="Text" class="form-control" name="c3" size="1" disabled></td>
		</tr>
		<tr>
			<td>2</td>
			<td><input type="Text" class="form-control" name="c4" size="1" disabled></td>
			<td><input type="Text" class="form-control" name="c5" size="1" disabled></td>
			<td><input type="Text" class="form-control" name="c6" size="1" disabled></td>
		</tr>
		<tr>
			<td>3</td>
			<td><input type="Text" class="form-control" name="c7" size="1" disabled></td>
			<td><input type="Text" class="form-control" name="c8" size="1" disabled></td>
			<td><input type="Text" class="form-control" name="c9" size="1" disabled></td>
		</tr>
	</table>
	<br>
	Adjunta:
	<br>
	<table>
		<tr>
			<th>&nbsp;</th>
			<th>1</th>
			<th>2</th>
			<th>3</th>
		</tr>
		<tr>
			<td>X</td>
			<td><input type="Text" class="form-control" name="a1" size="1" disabled></td>
			<td><input type="Text" class="form-control" name="a2" size="1" disabled></td>
			<td><input type="Text" class="form-control" name="a3" size="1" disabled></td>
		</tr>
		<tr>
			<td>Y</td>
			<td><input type="Text" class="form-control" name="a4" size="1" disabled></td>
			<td><input type="Text" class="form-control" name="a5" size="1" disabled></td>
			<td><input type="Text" class="form-control" name="a6" size="1" disabled></td>
		</tr>
		<tr>
			<td>Z</td>
			<td><input type="Text" class="form-control" name="a7" size="1" disabled></td>
			<td><input type="Text" class="form-control" name="a8" size="1" disabled></td>
			<td><input type="Text" class="form-control" name="a9" size="1" disabled></td>
		</tr>
	</table>
	<br>
	Inversa:
	<br>
	<table>
		<tr>
			<th>&nbsp;</th>
			<th>X</th>
			<th>Y</th>
			<th>Z</th>
		</tr>
		<tr>
			<td>1</td>
			<td><input type="Text" class="form-control" name="i1" size="1" disabled></td>
			<td><input type="Text" class="form-control" name="i2" size="1" disabled></td>
			<td><input type="Text" class="form-control" name="i3" size="1" disabled></td>
		</tr>
		<tr>
			<td>2</td>
			<td><input type="Text" class="form-control" name="i4" size="1" disabled></td>
			<td><input type="Text" class="form-control" name="i5" size="1" disabled></td>
			<td><input type="Text" class="form-control" name="i6" size="1" disabled></td>
		</tr>
		<tr>
			<td>3</td>
			<td><input type="Text" class="form-control" name="i7" size="1" disabled></td>
			<td><input type="Text" class="form-control" name="i8" size="1" disabled></td>
			<td><input type="Text" class="form-control" name="i9" size="1" disabled></td>
		</tr>
	</table>
</div>

<!-- Solucion Determinantes-->

<div id="DeterminanteSolucion">
	solucion Determinantes
</div>