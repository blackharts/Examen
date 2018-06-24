<table class="table">
  <thead>
    <tr>
      
      <th scope="col">Rut</th>
      <th scope="col">Nombre</th>
      <th scope="col">Razon Social</th>
      <th scope="col">Dirección</th> 
      <th scope="col">Fono</th>
      <th scope="col">Fax</th> 
      <th scope="col">Sucursal</th>
      <th scope="col">Giro</th> 
      <th scope="col">Credito Máx</th>
       <th scope="col">Habilitado en Venta</th>
      <th>Accion</th>
     
    </tr>
  </thead>

  <tbody>
<?php
    $db = new mysqli("localhost", 'root','','novox');
   
   
    $sql=" Select cliente.id, cliente.rut,cliente.nombre,cliente.razon_social,cliente.direccion,cliente.fono,cliente.fax,
    cliente.giro,cliente.limite_credito as credito,cliente.habilitado_venta as venta, ciudad.nombre as ciudad
     from cliente  
     join ciudad on cliente.ciudad_id = ciudad.id";
    $result= $db->query($sql);
      while($reg= mysqli_fetch_object($result)){
       
 ?>
    <tr>
    
      <td><?=$reg->rut?></td>
      <td><?=$reg->nombre?></td>
      <td><?=$reg->razon_social?></td>
      <td><?=$reg->direccion?></td>
      <td><?=$reg->fono?></td>
      <td><?=$reg->fax?></td> 
      <td><?=$reg->ciudad?></td>
      <td><?=$reg->giro?></td> 
      <td><?=$reg->credito?></td>
      <td><?=$reg->venta?></td> 
      <td>
        <a href= "?url=persona_editar&id=<?=$reg->id?>" class="btn btn-outline-primary bt_editar"> Editar </a>
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
                    url: "Modelos/ClienteModel.php?action=eliminar",
                 
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