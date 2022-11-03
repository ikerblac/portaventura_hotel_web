<?php 
session_start(); 
include "../db_config.php";

if (isset($_POST['uname']) && isset($_POST['password'])
    && isset($_POST['discord_tag']) && isset($_POST['re_password'])) {

	function validate($data){
       $data = trim($data);
	   $data = stripslashes($data);
	   $data = htmlspecialchars($data);
	   return $data;
	}

	$uname = validate($_POST['uname']);
	$pass = validate($_POST['password']);

	$re_pass = validate($_POST['re_password']);
	$discord_tag = validate($_POST['discord_tag']);
	$discord_id = validate($_POST['discord_id']);

	$user_data = 'uname='. $uname. '&discord_tag='. $discord_tag;


	if (empty($uname)) {
		header("Location: ../../../signup.php?error=Neccesita ingresar un nombre de usuario&$user_data");
	    exit();
	}else if(empty($pass)){
        header("Location: ../../../signup.php?error=Neccesitas ingresar una contraseña&$user_data");
	    exit();
	}
	else if(empty($re_pass)){
        header("Location: ../../../signup.php?error=Re Neccesitas ingresar una contraseña&$user_data");
	    exit();
	}

	else if($pass !== $re_pass){
        header("Location: ../../../signup.php?error=Las contraseñas no coinciden&$user_data");
	    exit();
	}

	else{

		// hashing the password
        $pass = md5($pass);

	    $sql = "SELECT * FROM users WHERE user_name='$uname' ";
		$result = mysqli_query($connection_db, $sql);

		if (mysqli_num_rows($result) > 0) {
			header("Location: ../../../signup.php?error=Este nombre de usuario no es valido. Intentalo con otro&$user_data");
	        exit();
		}else {
           $sql2 = "INSERT INTO users(user_name, password, discord_tag, discord_id) VALUES('$uname', '$pass', '$discord_tag' , '$discord_id')";
           $result2 = mysqli_query($connection_db, $sql2);
           if ($result2) {
           	 header("Location: ../../../signup.php?success=Tu cuenta ha sido creada satisfactoriamente&$user_data");
	         exit();
           }else {
	           	header("Location: ../../../signup.php?error=Error desconocido&$user_data");
		        exit();
           }
		}
	}
	
}else{
	header("Location: ../../../signup.php");
	exit();
}