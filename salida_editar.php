<h3 >Editar Salidas</h3>
<br>
<?php
//Formulario...
?>
<?php
  $id = $_GET['id'];
    $db = new mysqli("localhost", 'root','','novox');
    $sql="SELECT * FROM salida where id = $id";
    $result = $db->query($sql);
    $reg = mysqli_fetch_object($result);
?>

<form id="formulario">
  <div class="form-group row">
     <input type="hidden" name="id" value="<?=$reg->id?>">
    <label for="inputAddress" class="col-form-label col-sm-2" >Sucursal</label>
    <select  class="form-control col-sm-4" name="sucursal" id="sucursal_id" value="<?=$reg->sucursal_id?>">
      
    </select>
    <label for="inputAddress" class="col-form-label col-sm-2" >Responsable</label>
     <select  class="form-control col-sm-4" name="responsable" id="responsable_id" value="<?=$reg->responsable_id?>" >
      
    </select>
  </div>
  <div class="form-group row">
    <label for="inputAddress" class="col-form-label col-sm-2" >Tipo de Gas</label>
      <select  class="form-control col-sm-4" name="tipogas" id="tipogas_id" value="<?=$reg->tipo_gas_id?>" >
      
    </select>
     <label for="inputAddress" class="col-form-label col-sm-2" >Tipo de Salida</label>
      <select  class="form-control col-sm-4" name="salida_tipo" id="tiposalida_id" value="<?=$reg->salida_tipo_id?>" >
      
    </select>
    
  </div>
  <div class="form-group row">
     <label for="inputAddress" class="col-form-label col-sm-2" >Cliente</label>
      <select  class="form-control col-sm-4" name="cliente" id="cliente_id" value="<?=$reg->cliente_id?>" >
      
    </select>
     <label for="inputAddress" class="col-form-label col-sm-2" >Total de Cilindro</label>
    <input type="text" class="form-control col-sm-4" name="cilindros" value="<?=$reg->total_cilindros?>">
  </div>
   <div class="form-group row">
     <label for="inputAddress" class="col-form-label col-sm-2"  >Patente de Camión</label>
    <input type="text" maxlength="6" class="form-control col-sm-4" name="patente_camion" value="<?=$reg->patente_camion?>">
     <label for="inputAddress" class="col-form-label col-sm-2" >Patente de Carro</label>
    <input type="text" maxlength="6" class="form-control col-sm-4" name="patente_carro" value="<?=$reg->patente_carro?>">
  </div>
   <div class="form-group row"> 
      <label for="inputAddress" class="col-form-label col-sm-2"  >Factura</label>
      <input type="number" class="form-control col-sm-4" name="is_factura" value="<?=$reg->is_factura?>">    
      <label for="inputAddress" class="col-form-label col-sm-2"  >Usuario</label>
      <select  class="form-control col-sm-4" name="usuario" id="user_id" value="<?=$reg->user_id?>">
      
    </select>  
    </div>
 <div class="form-group row">
    <label for="inputEmail4" class="col-form-label col-sm-2" >Observación</label>
    <textarea type="textarea" name="obs" rows="3" class="form-control" maxlength="100"  value="<?=$reg->observacion?>"></textarea>

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
                  url: "Views/cmb_user.php?",
                  success: function(response)
                  {
                      $('#user_id').html(response);
                  }
          });

           $.ajax({
                  type: "POST",
                  url: "Views/cmb_sucursal.php?",
                  success: function(response)
                  {
                      $('#sucursal_id').html(response);
                  }
          });
            $.ajax({
                  type: "POST",
                  url: "Views/cmb_cliente.php?",
                  success: function(response)
                  {
                      $('#cliente_id').html(response);
                  }
          });
             $.ajax({
                  type: "POST",
                  url: "Views/cmb_tipogas.php?",
                  success: function(response)
                  {
                      $('#tipogas_id').html(response);
                  }
          });
              $.ajax({
                  type: "POST",
                  url: "Views/cmb_tiposalida.php?",
                  success: function(response)
                  {
                      $('#tiposalida_id').html(response);
                  }
          });
               $.ajax({
                  type: "POST",
                  url: "Views/cmb_responsable.php?",
                  success: function(response)
                  {
                      $('#responsable_id').html(response);
                  }
          });



           $('#bt_guardar').on('click', function(e){
             
               $.ajax({
                    url: "Modelos/SalidaModel.php?action=editar",
                    type: "POST",
                    data: $("#formulario").serialize(),
                    success: function (data) {
                        alert(data);
                         location.replace("?url=Views/vista_salidas");

                    },
                    error: function (data) {
                        alert("error");
                    }
                });

           });
         });
    </script>
 