<?php 
session_start();
include "src/php/db_config.php";

if (isset($_SESSION['id']) && isset($_SESSION['user_name'])) {

 ?>
 
<!DOCTYPE html>
<html lang="es">
</html>

<?php 
}else{
     header("Location: index.php");
     exit();
}
 ?>