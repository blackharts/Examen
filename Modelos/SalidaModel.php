<?php
	if ($_POST)
		include('../Data/Salida.php');
		$action = $_GET['action'];
		if ($action == 'guardar' ) {
			$sucursal_id = $_POST['sucursal'];
			$responsable_id = $_POST['responsable'];
			$tipogas = $_POST['tipogas'];
			$salida_tipo = $_POST['salida_tipo'];
			$cliente = $_POST['cliente'];
			$cilindros = $_POST['cilindros'];
			$patente_camion = $_POST['patente_camion'];
			$patente_carro = $_POST['patente_carro'];
			$is_factura = $_POST['is_factura'];
			$observacion = $_POST['obs'];
			$salida = new Salida("0",$sucursal_id,$responsable_id,$tipogas,$salida_tipo,$cliente,$cilindros,$patente_camion
			,$patente_carro,$is_factura,$observacion);
			
			$salida->guardar();
			echo 'pase por aqui';
		}elseif ($action == 'editar') {
			$id = $_POST['id'];
			$sucursal_id = $_POST['sucursal'];
			$responsable_id = $_POST['responsable'];
			$tipogas = $_POST['tipogas'];
			$salida_tipo = $_POST['salida_tipo'];
			$cliente = $_POST['cliente'];
			$cilindros = $_POST['cilindros'];
			$patente_camion = $_POST['patente_camion'];
			$patente_carro = $_POST['patente_carro'];
			$is_factura = $_POST['is_factura'];
			$observacion = $_POST['obs'];
			$salida = new Salida($id,$sucursal_id,$responsable_id,$tipogas,$salida_tipo,$cliente,$cilindros,$patente_camion
			,$patente_carro,$is_factura,$observacion);
			
			$salida->editar();
		}elseif ($action == 'eliminar') {
			$id = $_POST['id'];
			$salida = new Salida($id,'');
			$salida->eliminar();
		}


?>