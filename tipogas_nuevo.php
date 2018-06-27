<h3>Registrar Tipo de Gas</h3>
<br>

<form id="formulario">
  <div class="form-group row">
    <label for="inputAddress" class="col-form-label col-sm-2" >Nombre</label>
    <input type="text" class="form-control col-sm-4" name="tipogas">
  </div>
  

 <button type="button" class="btn btn-outline-primary offset-sm-1" id="bt_guardar" required>Guardar</button>

</form>


    <script>
         $( document ).ready(function() {

           $('#bt_guardar').on('click', function(e){
             
               $.ajax({
                    url: "Modelos/TipoGasModel.php?action=guardar",
                    type: "POST",
                    data: $("#formulario").serialize(),
                    success: function (data) {
                        alert(data);
                         location.reload();

                    },
                    error: function (data) {
                        alert("error");
                    }
                });

           });
         });
    </script>