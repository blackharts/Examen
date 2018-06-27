<h3 >Registrar Cliente</h3>
<br>
<?php
//Formulario...
?>
<form id="formulario">
  <div class="form-group row">
    <label for="inputAddress" class="col-form-label col-sm-2" >Rut</label>
    <input type="text" class="form-control col-sm-4" name="rut">
    <label for="inputAddress" class="col-form-label col-sm-2" >Nombre</label>
    <input type="text" class="form-control col-sm-4" name="nombre">
  </div>
  <div class="form-group row">
    <label for="inputAddress" class="col-form-label col-sm-2" >Direccion</label>
    <input type="text" class="form-control col-sm-4" name="direccion">
     <label for="inputAddress" class="col-form-label col-sm-2" >Razon Social</label>
    <input type="text" class="form-control col-sm-4" name="razon_social">
    
  </div>
  <div class="form-group row">
     <label for="inputAddress" class="col-form-label col-sm-2" >Telefono</label>
    <input type="text" class="form-control col-sm-4" name="fono">
     <label for="inputAddress" class="col-form-label col-sm-2" >Fax</label>
    <input type="text" class="form-control col-sm-4" name="fax">
  </div>
   <div class="form-group row">
     <label for="inputAddress" class="col-form-label col-sm-2"  >Giro</label>
    <input type="text" maxlength="100" class="form-control col-sm-4" name="giro">
     <label for="inputAddress" class="col-form-label col-sm-2" >Credito Max..</label>
    <input type="number" maxlength="11" class="form-control col-sm-4" name="limite_credito">
  </div>
   <div class="form-group row">            
    <label for="inputEmail4" class="col-form-label col-sm-2" >Ciudad</label>
    <select  class="form-control col-sm-4" name="ciudad" id="ciudad_id" >
      
    </select>
    <div>
    <div class="col-sm-4">
      <div class="form-check">
        <input class="form-check-input" type="radio" name="habilitado_venta"  value="1" >Venta Habilitada
      </div>
    </div>
</div>
</div>
 <button type="button" class="btn btn-outline-primary " id="bt_guardar" required>Guardar</button>
 </form>
<?php

//Script------
?>
<script>
        $( document ).ready(function() {

    

           $.ajax({
                  type: "POST",
                  url: "Views/cmb_ciudad.php?",
                  success: function(response)
                  {
                      $('#ciudad_id').html(response);
                  }
          });
    $('#bt_guardar').on('click', function(e){
      $.ajax({
        url: "Modelos/ClienteModel.php?action=guardar",
        type: "POST",
        data: $("#formulario").serialize(),
        success: function (data) {
          alert("Agregado correctamente!");
          $('input').val("");
          $('select').val("");
        },
        error: function (data) {
          alert("Ha ocurrido un error!");
        }
      });
    });
  });
    </script>
 