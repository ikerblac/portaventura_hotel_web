<?php
	include "../db_config.php";
	
	$id=$_GET["id"];
	
	$query_delete="DELETE FROM hotels where ID_habitacio ='$id'";
	$result=mysqli_query($connection_db,$query_delete);
	
	if($result){
		echo "Listo";
	}else{
		echo "No s'ha pogut eliminar!!";
	}
	
?>