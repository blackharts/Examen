<?php
	if ($_POST)
		include('../Data/Responsable.php');
		$action = $_GET['action'];
		if ($action == 'guardar' ) {
			$rut = $_POST['rut'];
			$nombre = $_POST['nombre'];
			$cliente_id = $_POST['cliente'];
			$responsable = new Responsable("0",$cliente_id,$nombre,$rut);
			$responsable->guardar();
			
		}elseif ($action == 'editar') {
			$id = $_POST['id'];
			$nombre = $_POST['nombre'];
			$rut = $_POST['rut'];
			$cliente_id = $_POST['cliente'];
			$responsable = new Responsable( $id,$cliente_id,$nombre,$rut);
			$responsable->editar();
		}elseif ($action == 'eliminar') {
			$id = $_POST['id'];
			$responsable = new Responsable($id,'','','');
			$responsable->eliminar();
		}


?>