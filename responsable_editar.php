<h3>Editar Responsable</h3>
<br>
<?php
  $id = $_GET['id'];
    $db = new mysqli("localhost", 'root','','novox');
    $sql="SELECT * FROM responsable where id = $id";
    $result = $db->query($sql);
    $reg = mysqli_fetch_object($result);
?>


<form id="formulario">
  <div class="form-group row">
     <input type="hidden" name="id" value="<?=$reg->id?>">
    <label for="inputAddress" class="col-form-label col-sm-2" >Rut</label>
    <input type="text" class="form-control col-sm-4" name="rut" value="<?=$reg->rut?>">
  </div>
  <div class="form-group row">
    <label for="inputAddress" class="col-form-label col-sm-2" >Nombre</label>
    <input type="text" class="form-control col-sm-4" name="nombre" value="<?=$reg->nombre?>">
  </div>
   <div class="form-group row">            
    <label for="inputEmail4" class="col-form-label col-sm-2">Cliente</label>
    <select  class="form-control col-sm-4" name="cliente" id="cliente_id" value="<?=$reg->cliente_id?>">
      
    </select>
  </div>
  <input type="hidden" name="id" value="<?=$reg->id?>">
 <button type="button" class="btn btn-outline-primary offset-sm-1" id="bt_guardar" required>Guardar</button>

</form>


    <script>
        $( document ).ready(function() {

           $.ajax({
                  type: "POST",
                  url: "Views/cmb_cliente.php?",
                  success: function(response)
                  {
                      $('#cliente_id').html(response);
                  }
          });

           $('#bt_guardar').on('click', function(e){
               $.ajax({
                    url: "Modelos/ResponsableModel.php?action=editar",
                    type: "POST",
                    data: $("#formulario").serialize(),
                    success: function (data) {
                        alert("Agregado correctamente!");
                        $('input').val("");
                        $('select').val("");
                        location.replace("?url=Views/responsable_listado");
                    },
                    error: function (data) {
                        alert("Ha ocurrido un error!");
                    }
                });

           });
         });
    </script>