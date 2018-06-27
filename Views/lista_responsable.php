<table class="table">
  <thead>
    <tr>
      <th scope="col">Id</th>
      <th scope="col">Rut</th>
      <th scope="col">Nombre</th>
      <th scope="col">Cliente </th>

      <th>Accion</th>
     
    </tr>
  </thead>

  <tbody>
<?php
    $db = new mysqli("localhost", 'root','','novox');
   
   
    $sql=" Select responsable.id,cliente.nombre as cliente , responsable.nombre , responsable.rut
     from cliente  
     join responsable on  responsable.cliente_id = cliente.id ";
    $result= $db->query($sql);
      while($reg= mysqli_fetch_object($result)){
       
 ?>
    <tr>
      <td><?=$reg->id?></td>
      <td><?=$reg->rut?></td>
      <td><?=$reg->nombre?></td>
      <td><?=$reg->cliente?></td>
    
      <td>
        <a href="?url=responsable_editar&id=<?=$reg->id?>" class="btn btn-outline-primary btn-sm bt_editar"> Editar </a>
        <button  type="button" class="btn btn-outline-danger btn-sm bt_eliminar" client.id ="<?=$reg->id?>">Eliminar</button>
      
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
                    url: "Modelos/ResponsableModel.php?action=eliminar",
                 
                    type: "POST",
                    data: {id:id_capt},
                    success: function (data) {
                        alert(data);
                       location.reload();


                    },
                    error: function (data) {
                        alert("error");
                    }
                });
             });

</script>