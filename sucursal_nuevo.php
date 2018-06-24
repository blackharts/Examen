
<h3 >Registrar Sucursal</h3>
<br>
<form id="formulario">
  <div class="form-group row">
    <label for="inputAddress" class="col-form-label col-sm-2" >Nombre</label>
    <input type="text" class="form-control col-sm-4" name="nombre">
  </div>
  <div class="form-group row">
    <label for="inputAddress" class="col-form-label col-sm-2" >Direccion</label>
    <input type="text" class="form-control col-sm-4" name="direccion">
  </div>
   <div class="form-group row">            
    <label for="inputEmail4" class="col-form-label col-sm-2">Cliente</label>
    <select  class="form-control col-sm-4" name="cliente" id="cliente_id" >
    
    </select>
  </div>

 <button type="button" class="btn btn-outline-primary offset-sm-1" id="bt_guardar" required>Guardar</button>

</form>


    <script>
        $( document ).ready(function() {
           $('#bt_guardar').on('click', function(e){
               $.ajax({
                    url: "Modelos/SucursalModel.php?action=guardar",
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
             $.ajax({
                  type: "POST",
                  url: "Views/lista_cliente.php?",
                  success: function(response)
                  {
                      $('#cliente_id').html(response);
                  }
          });

         });
    </script>
