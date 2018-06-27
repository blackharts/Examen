<?php
/**
 * 
 */
class Cliente 
{	
	private $id;
	private $rut;
	private $nombre;
	private $razon_social;
	private $direccion;
	private $fono;
	private $fax;
	private $giro;
	private $limite_credito;
	private $habilitado_venta;
	private $ciudad;

	
	public function __construct($id,$rut,$nombre,$razon_social,$direccion,$fono,$fax,$giro,$limite_credito,$habilitado_venta,$ciudad)
	{
		# code..
		$this->id= $id;
		$this->rut= $rut;
		$this->nombre= $nombre;
		$this->razon_social= $razon_social;
		$this->direccion= $direccion;
		$this->fono= $fono;
		$this->fax= $fax;
		$this->giro= $giro;
		$this->limite_credito= $limite_credito;
		$this->habilitado_venta= $habilitado_venta;
		$this->ciudad= $ciudad;
	}

	public function guardar(){
		$db= new mysqli("localhost",'root','','novox');
		$rut=$this->rut;
		$nombre=$this->nombre;
		$razon_social=$this->razon_social;
		$direccion=$this->direccion;
		$fono=$this->fono;
		$fax=$this->fax;
		$giro=$this->giro;
		$limite_credito=$this->limite_credito;
		$ciudad=$this->ciudad;
		$habilitado_venta=$this->habilitado_venta;
		$sql=" INSERT INTO `cliente` (nombre,rut,razon_social,direccion,fono,fax,giro,limite_credito,ciudad_id,habilitado_venta) VALUES ( '$nombre','$rut','$razon_social','$direccion','$fono','$fax','$giro','$limite_credito','$ciudad' ,'$habilitado_venta');";
		$db->query($sql);
		echo "Se Han Guardado los Datos";
	}

	

}

?>