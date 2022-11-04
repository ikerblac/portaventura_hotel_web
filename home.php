<?php 
session_start();
include "src/php/db_config.php";

if (isset($_SESSION['id']) && isset($_SESSION['user_name'])) {

 ?>
 
<!DOCTYPE html>
<html lang="es">

<head>
    <title>Coches</title>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" />
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>
    <link rel="stylesheet" type="text/css" href="src/css/home.css" />
    <meta name="author" content="ikerblac">
    <link rel="shortcut icon" href="src/img/logo_portaventura.png" />
    <?php 
        $query_info_hotel="SELECT * FROM hotels ";
        $result_info_hotel=mysqli_query($connection_db,$query_info_hotel);
    ?>
</head>

<body>
    <nav class="navbar navbar-expand-sm navbar-dark bg-dark">
        <div class="container-fluid">
            <a class="navbar-brand" href="/home.php">Inicio</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#mynavbar">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="mynavbar">
                <ul class="navbar-nav me-auto">

                </ul>
                <ul class="navbar-nav ml-auto">
                    <li class="nav-item">
                        <a class="nav-link" href="src/php/login_system/logout.php">Cerrar sesion</a>
                    </li>

            </div>
        </div>
    </nav>

    <div class="container-fluid p-5 bg-default text-white text-center ">
        <img src="src/img/logo_portaventura.png" width="25%" />
        <br>
        <h3>
            Hola,
            <?php echo $_SESSION['user_name']; ?>
        </h3>
        <?php if (isset($_GET['info'])) { ?>
        <p class="info"><?php echo $_GET['info']; ?></p>
        <?php } ?>
        <?php if (isset($_GET['error'])) { ?>
        <p class="error"><?php echo $_GET['error']; ?></p>
        <?php } ?>
    </div>

    <div class="container mt-5">
        <!-- <a href="add_form.php" class="btn btn-primary">Crear nou curs</a> -->
    </div>
    <div class="container mt-5">
        <div class="row">
            <div class="col-sm-12">
                <table class="table table-striped">
                    <thead>
                        <tr>
                            <th scope="col">Habitacion</th>
                            <th scope="col">Nombre del cliente</th>
                            <th scope="col">Fecha de entrada</th>
                            <th scope="col">Fecha de salida</th>
                            <th>Disponibilitat</th>
						    <th>Tipos</th>
						    <th>Quantitat de persones</th>
                            <!-- <th scope="col">Imagen</th> -->
                        </tr>
                    </thead>
                    <tbody>
                        <?php 

		     
		      while($row_info_hotel=mysqli_fetch_array($result_info_hotel)){
		      ?>
                        <tr>
                            <td><?php echo $row_info_hotel['ID_habitacio'] ?></td>
                            <td><?php echo $row_info_hotel['nom_client'] ?></td>
                            <td><?php echo $row_info_hotel['data_entrada'] ?></td>
                            <td><?php echo $row_info_hotel['data_sortida'] ?></td>
                            <td><?php echo $row_info_hotel['habitacio_ocupada']?></td>
							<td><?php echo $row_info_hotel['tipus_habitacio'];?></td>
							<td><?php echo $row_info_hotel['qtat_persones'];?></td>
                            <td>
                                <a href="mod.php?ID_habitacio=<?php echo $id['ID_habitacio'] ?>"
                                    class="btn btn-success">Modificar</a>
                                <a href="src/php/edit_system/delete.php?id=<?php echo $row_info_hotel['ID_habitacio'] ?>" class="btn btn-info">Eliminar</a>
                            </td>
                        </tr>
                        <?php 
	      }
	      ?>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</body>

</html>

<?php 
}else{
     header("Location: index.php");
     exit();
}
 ?>