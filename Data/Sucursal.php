<?php
/**
 * Clase Sucursal
 */
class Sucursal 
{
	 public $id;
   	 public $nombre;
   	 public $direccion;
   	 public $cliente_id;

   	  public function __construct($id,$nombre,$direccion,$cliente_id)
    {
        $this->id=$id;
        $this->nombre=$nombre;
        $this->cliente_id=$cliente_id;
        $this->direccion=$direccion;
       

    }

    public function guardar()
    {
        $db = new mysqli("localhost", 'root','','novox');
           
        $nombre = $this->nombre;
        $direccion = $this->direccion;
        $cliente_id = $this->cliente_id;
        echo $sql="INSERT INTO sucursal (nombre, direccion,cliente_id) VALUES ( '$nombre','$direccion' ,'$cliente_id');";
        $db->query($sql);		 
    }
    public function eliminar()
    {
        $db = new mysqli("localhost", 'root','','novox');
        $id =$this->id;
       	$sql = "DELETE  from sucursal where id =$id";
        $db->query($sql);  
    }

    }

?>