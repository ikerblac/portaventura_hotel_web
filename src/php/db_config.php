<?php

$sname= "10.10.10.2";
$unmae= "web_usr";
$password = "Iker2003.";

$db_name = "portaventura_db";

$connection_db = mysqli_connect($sname, $unmae, $password, $db_name);

if (!$connection_db) {
	echo "Connection failed!";
}