<?php
require_once('Templates/template.php');
get_meta();
?>
<script src="JS/validarCampos.js"></script>
<?php
get_header();
?>
<div class="container-fluid">
  <h2>Cifrado Vigenere</h2>
  <hr>
  <p>Llene por favor los siguientes campos para codificar o decodificar un mensaje con clave mediante el Cifrado de Vigenere</p>
  <form action="calcula.php" method="POST" onsubmit="return valida(this)">
    <div class="row">
      <div class="col-sm-3" id="izq"></div>
      <div class="col-sm-6" id="centro"> 

        <div class="form-group">
          <label for="usr">Nombre:</label>
          <input type="text" class="form-control" name="name" id="name">
        </div>
        <div class="form-group">
          <label for="pwd">Correo:</label>
          <input type="text" class="form-control" name="email" id="email">
        </div>

      </div>
      <div class="col-sm-3" id="der"></div>
    </div>
    <div class="row">
      <div class="col-sm-1" id="izq"></div>
      <div class="col-sm-10" id="centro"> 
        <div class="form-group">
          <label for="comment">Texto:</label>
          <textarea class="form-control" rows="5" id="box" name="code"></textarea>
        </div> 
      </div>
      <div class="col-sm-1" id="der"></div>
    </div>
    <div class="row">
      <div class="col-sm-3" id="izq"></div>
      <div class="col-sm-6" id="centro"> 

        <div class="form-group">
          <label for="usr">Clave:</label>
          <input type="text" class="form-control" name="pswd" id="pass"/>
            </div>
        <input type="submit" name="encrypt" class="btn btn-default" value="Codificar" onclick=""/>
        <input type="submit" name="decrypt" class="btn btn-default" value="Decodificar" onclick=""/>
        <button type="button" class="btn btn-default" onclick="limpiar()">Limpiar</button>
      </div>
      <div class="col-sm-3" id="der"></div>
    </div>
  </form>
</div>


</div>
</section>
<?php
get_footer();
?>
