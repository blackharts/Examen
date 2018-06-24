<?php
	if ($_POST)
		include('../Data/Sucursal.php');
		$action = $_GET['action'];
		if ($action == 'guardar' ) {
			$nombre = $_POST['nombre'];
			$direccion = $_POST['direccion'];
			$cliente = $_POST['cliente'];
			$sucursal = new Sucursal("0",$nombre,$direccion,$cliente);
			$sucursal->guardar();
			echo 'pase por aqui';
		}elseif ($action == 'editar') {
			$id = $_POST['id'];
			$nombre = $_POST['nombre'];
			$sucursal = new Sucursal($id,$nombre,$direccion,$cliente);
			$sucursal->editar();
		}elseif ($action == 'eliminar') {
			$id = $_POST['id'];
			$sucursal = new Sucursal($id,'');
			$sucursal->eliminar();
		}


?>