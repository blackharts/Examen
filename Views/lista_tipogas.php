<?php
$db = new mysqli("localhost", 'root','','novox');

		$sql="Select * from tipo_gas";
		$result= $db->query($sql);
		while($reg= mysqli_fetch_object($result)){
			echo '<option value="'.$reg->id.'">'.$reg->nombre.'</option>';
		}
?>
