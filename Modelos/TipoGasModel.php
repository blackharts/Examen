<?php
	if ($_POST)
		include('../Data/TipoGas.php');
		$action = $_GET['action'];
		if ($action == 'guardar' ) {
			$nombre = $_POST['tipogas'];
			$tipogas = new TipoGas("0",$nombre);
			$tipogas->guardar();
			
		}elseif ($action == 'editar') {
			$id = $_POST['id'];
			$nombre = $_POST['tipogas'];
			$tipogas = new TipoGas($id,$nombre);
			$tipogas->editar();
		}elseif ($action == 'eliminar') {
			$id = $_POST['id'];
			$tipogas = new TipoGas($id,'');
			$tipogas->eliminar();
		}


?>