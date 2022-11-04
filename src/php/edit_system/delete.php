<?php
	include "../db_config.php";
	
	$id=$_GET["id"];
	
	$query_delete="DELETE FROM hotels where ID_habitacio ='$id'";
	$result=mysqli_query($connection_db,$query_delete);
	
	if($result){
		header("Location: ../../../home.php?info=Soilicitad porcesada correctamente");
	    exit();
	}else{
		header("Location: ../../../home.php?info=No s'ha pogut eliminar!!");
	    exit();
	}
	
?>