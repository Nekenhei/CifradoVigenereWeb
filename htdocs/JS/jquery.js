//carga de documentos en div
$(document).ready(function() {
	$("#basica").click(function(event) {
		$("#capa").load('Templates/calculadoras.php #basica');
	});
	$("#mu").click(function(event) {
		$("#capa").load('Templates/calculadoras.php #mu');
	});
		$("#cofactor3").click(function(event) {
		$("#capa").load('Templates/calculadoras.php #cofactor3');
	});
	$("#determinantes").click(function(event) {
		$("#capa").load('Templates/calculadoras.php #determinantes');
	});
	$("#CofactorSo").click(function(event) {
		$("#resultado").load('Templates/calculadoras.php #CofactorSolucion');
	});
	$("#DeterminanteSo").click(function(event) {
		$("#resultado").load('Templates/calculadoras.php #DeterminanteSolucion');
	});		

});