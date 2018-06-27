<table class="table">
  <thead>
    <tr>
      
      <th scope="col">Id</th>
      <th scope="col">Nombre</th>

      <th>Accion</th>
     
    </tr>
  </thead>

  <tbody>
<?php
    $db = new mysqli("localhost", 'root','','novox');
   
   
    $sql=" Select nombre, id
     from tipo_gas  ";
    $result= $db->query($sql);
      while($reg= mysqli_fetch_object($result)){
       
 ?>
    <tr>
    
      <td><?=$reg->id?></td>
      <td><?=$reg->nombre?></td>
    
      <td>
        <a href= "?url= xxxc&id=<?=$reg->id?>" class="btn btn-outline-primary bt_editar"> Editar </a>
        <button  type="button" class="btn btn-outline-danger bt_eliminar" client.id ="<?=$reg->id?>">Eliminar</button>
      
      </td>
    </tr>
    <?php

       }
    

  ?>
  </tbody>
</table>
<script >
      $('.bt_eliminar').on('click', function(e){
             var id_capt = $(this).attr("client.id");
               $.ajax({
                    url: "Modelos/TipoGasModel.php?action=eliminar",
                 
                    type: "POST",
                    data: {id:id_capt},
                    success: function (data) {
                        alert(data);
                       // location.reload();


                    },
                    error: function (data) {
                        alert("error");
                    }
                });
             });

</script>