<?php
	include ('connexioBD.php');
	//revem el id per el formulari anterior per get
	$id=$_GET["id"];
	echo $id;
	
	//consulta per eliminar
	$delete="DELETE FROM hotels where ID_habitacio ='$id'";
	//eliminem la taula en questio per el id 
	$resultatdelete = mysqli_query($connection_db,$delete);
	//control per saber si s'ha eliminat i mostrem un enllaç per tornar al fitxer anterior
	if($resultatdelete){
		echo "Listo";
	}else{
		echo "No s'ha pogut eliminar!!";
	}
	
?>