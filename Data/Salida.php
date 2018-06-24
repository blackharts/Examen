<?php
/**
 * 
 */
class Salida
{
	private 	$id;
	private		$sucursal_id ;
	private		$responsable_id;
	private		$tipogas;
	private		$salida_tipo ;
	private		$cliente;
	private		$cilindros;
	private		$patente_camion;
	private		$patente_carro ;
	private		$is_factura ;
	private		$observacion;
	private 	$user;
	function __construct($id,$sucursal_id,$responsable_id,$tipogas,$salida_tipo,$cliente,$cilindros,$patente_camion
	,$patente_carro,$is_factura,$observacion,$user)
	{
		# code...
		$this->id=$id;
		$this->sucursal_id=$sucursal_id;
		$this->responsable_id=$responsable_id;
		$this->tipogas=$tipogas;
		$this->salida_tipo=$salida_tipo;
		$this->cliente=$cliente;
		$this->cilindros=$cilindros;
		$this->patente_camion=$patente_camion;
		$this->patente_carro=$patente_carro;
		$this->is_factura=$is_factura;
		$this->observacion=$observacion;
		$this->user=$user;
	}


	public function guardar(){
		$db= new mysqli("localhost",'root','','novox');
		$sucursal_id=$this->sucursal_id;
		$responsable_id=$this->responsable_id;
		$tipogas=$this->tipogas;
		$salida_tipo=$this->salida_tipo;
		$cliente=$this->cliente;
		$cilindros=$this->cilindros;
		$patente_camion=$this->patente_camion;
		$patente_carro=$this->patente_carro;
		$is_factura=$this->is_factura;
		$observacion=$this->observacion;
		$user=$this->user;
		
		echo $sql=" INSERT INTO salida (sucursal_id, responsable_id, tipo_gas_id, salida_tipo_id, cliente_id, total_cilindros, patente_camion
		, patente_carro, is_facturado, observacion, user_id) VALUES ('$sucursal_id','$responsable_id','$tipogas','$salida_tipo','$cliente',
		'$cilindros',
		'$patente_camion','$patente_carro','$is_factura','$observacion','$user');";
		$db->query($sql);
	}
	public function editar(){
		$db= new mysqli("localhost",'root','','novox');
		$id=$this->id;
		$sucursal_id=$this->sucursal_id;
		$responsable_id=$this->responsable_id;
		$tipogas=$this->tipogas;
		$salida_tipo=$this->salida_tipo;
		$cliente=$this->cliente;
		$cilindros=$this->cilindros;
		$patente_camion=$this->patente_camion;
		$patente_carro=$this->patente_carro;
		$is_factura=$this->is_factura;
		$observacion=$this->observacion;
		$user=$this->user;
		$sql=" UPDATE `salida` set sucursal_id = '$sucursal_id' ,responsable_id = '$responsable_id', cliente_id='$cliente', tipo_gas_id = '$tipogas' ,salida_tipo_id = '$salida_tipo', total_cilindros='$cilindros',patente_carro = '$patente_carro' ,patente_camion = '$patente_camion', is_facturado='$is_factura',observacion = '$observacion' ,user_id = '$user' where id = '$id'";
			echo $db->query($sql);

	}

	public function eliminar(){
			$db = new mysqli("localhost", 'root','','novox');
			$id = $this->id;
			echo $sql=" DELETE FROM salida where id = $id";
			$db->query($sql);
		}
}

?>