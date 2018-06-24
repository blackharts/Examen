<?php
/**
 * 
 */
class TipoGas 
{	public $id;
	public $nombre;
	
	public function __construct($id,$nombre)
	{
		# code...
		$this->id= $id;
		$this->nombre= $nombre;
	}

	public function guardar(){
		$db= new mysqli("localhost",'root','','novox');
		$nombre=$this->nombre;
	
		$sql="INSERT INTO tipo_gas (  nombre ) VALUES
		( '$nombre' );";
		$db->query($sql);
		echo "Se ha registrado la informacion";

	}
	public function editar(){
		$db= new mysqli("localhost",'root','','novox');
		$id=$this->id;
		$nombre=$this->nombre;
		$sql=" UPDATE `tipo_gas` set nombre = '$nombre' where id = '$id'";
		$db->query($sql);
		echo "Se Han editado los Datos";

	}

	public function eliminar(){
			$db = new mysqli("localhost", 'root','','novox');
			$id = $this->id;
			$sql=" DELETE FROM `tipo_gas` where id = $id";
			$db->query($sql);
			echo "Se Han eliminado los Datos";
		}
}

?>