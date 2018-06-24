<table class="table">
  <thead>
    <tr>
      <th scope="col">Id</th>
      <th scope="col">Sucursal</th>
      <th scope="col">Responsable</th>
      <th scope="col">Cliente </th>
      <th scope="col">Gas</th>
      <th scope="col">Tipo</th>
      <th scope="col">Cilindro </th>
      <th scope="col">Camion</th>
      <th scope="col">Carro</th>
      <th scope="col">Factura </th>
      <th scope="col">Observacion </th>


      <th>Accion</th>
     
    </tr>
  </thead>

  <tbody>
<?php
    $db = new mysqli("localhost", 'root','','novox');
   
   
   $sql=" Select salida.id,sucursal.nombre as suc , responsable.nombre as respons , tipo_gas.nombre as gas,salida_tipo.nombre as tipo,
    sucursal.cliente_id as client, salida.total_cilindros as cilindro, salida.patente_camion as camion, salida.patente_carro as carro,
    salida.observacion as obs, salida.is_facturado as factura,salida.id
     from salida  
     join responsable on  salida.responsable_id = responsable.id 
     join sucursal on sucursal.id = salida.sucursal_id
     join salida_tipo on salida_tipo.id = salida.salida_tipo_id
     join tipo_gas on tipo_gas.id = salida.tipo_gas_id
       ";
      $result= $db->query($sql);
      while($reg= mysqli_fetch_object($result)){
       
 ?>
    <tr>
      <td><?=$reg->id?></td>
      <td><?=$reg->suc?></td>
      <td><?=$reg->respons?></td>
     <td><?=$reg->client?></td>
      <td><?=$reg->gas?></td>
      <td><?=$reg->tipo?></td>
      <td><?=$reg->cilindro?></td>
      <td><?=$reg->camion?></td>
      <td><?=$reg->carro?></td>
      <td><?=$reg->factura?></td>
      <td><?=$reg->obs?></td>
      <td>
        <a href= "?url=salida_editar&id=<?=$reg->id?>" class="btn btn-outline-primary btn-sm bt_editar"> Editar </a>
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
                    url: "Modelos/SalidaModel.php?action=eliminar",
                 
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