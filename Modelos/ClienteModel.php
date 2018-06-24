<?php
	if ($_POST)
		include('../Data/Cliente.php');
		$action = $_GET['action'];
		if ($action == 'guardar' ) {
			$nombre = $_POST['nombre'];
			$rut = $_POST['rut'];
			$direccion = $_POST['direccion'];
			$razon_social = $_POST['razon_social'];
			$fono = $_POST['fono'];
			$fax = $_POST['fax'];
			$giro = $_POST['giro'];
			$limite_credito =  $_POST['limite_credito'];
			$ciudad =  $_POST['ciudad'];
			$habilitado_venta =  $_POST['habilitado_venta'];
			$cliente = new Cliente("0",$rut,$nombre,$razon_social,$direccion,$fono,$fax,$giro,$limite_credito,$habilitado_venta,$ciudad);
			$cliente->guardar();
			
		}elseif ($action == 'editar') {
			$id = $_POST['id'];
			$nombre = $_POST['nombre'];
			$direccion = $_POST['direccion'];
			$razon_social = $_POST['razon_social'];
			$fono = $_POST['fono'];
			$fax = $_POST['fax'];
			$giro = $_POST['giro'];
			$limite_credito =  $_POST['limite_credito'];
			$ciudad =  $_POST['ciudad'];
			$cliente = new Cliente($id,$nombre,$direccion,$razon_social,$fono,$fax,$giro,$limite_credito,$ciudad);
			$cliente->editar();
		}elseif ($action == 'eliminar') {
			$id = $_POST['id'];
			$cliente = new Cliente($id,'');
			$cliente->eliminar();
		}


?>