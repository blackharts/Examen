<?php

/**
 * 
 */
class Responsable 
{
	public $id;
	public $cliente_id;
	public $nombre;
	public $rut;

	public function __construct( $id,$cliente_id,$nombre,$rut)
	{
		# code...
		$this->id= $id;
		$this->rut= $rut;
		$this->nombre= $nombre;
		$this->cliente_id= $cliente_id;
	}

	public function guardar(){
		$db= new mysqli("localhost",'root','','novox');
		$rut=$this->rut;
		$nombre=$this->nombre;
		$cliente_id=$this->cliente_id;
		$sql=" INSERT INTO `responsable` (nombre,rut,cliente_id) VALUES ( '$nombre','$rut','$cliente_id');";
		$db->query($sql);
		echo "Se Han Guardado los Datos";
	}

		public function editar(){
		$db= new mysqli("localhost",'root','','novox');
		$id=$this->id;
		$rut=$this->rut;
		$nombre=$this->nombre;
		$cliente_id=$this->cliente_id;
		$sql=" UPDATE `responsable` set nombre = '$nombre' ,rut = '$rut', cliente_id='$cliente_id' where id = '$id'";
		$db->query($sql);
		echo "Se Han editado los Datos";

	}

	public function eliminar(){
			$db = new mysqli("localhost", 'root','','novox');
			$id = $this->id;
			$sql=" DELETE FROM responsable where id = $id";
			$db->query($sql);
			echo "Se Han eliminado los Datos";
		}


}

?>