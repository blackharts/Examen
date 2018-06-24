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
		echo $sql=" INSERT INTO `responsable` (nombre,rut,cliente_id) VALUES ( '$nombre','$rut','$cliente_id');";
		$db->query($sql);
	}


}

?>