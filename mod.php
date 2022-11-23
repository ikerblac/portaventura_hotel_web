<?php 
session_start();
include "src/php/db_config.php";

if (isset($_SESSION['id']) && isset($_SESSION['user_name'])) {

 ?>
<!DOCTYPE html>
<html lang="es">

<head>
    <title>Modificar</title>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" />
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>
    <link rel="stylesheet" type="text/css" href="src/css/home.css" />
    <meta name="author" content="ikerblac">
    <link rel="shortcut icon" href="src/img/lsc_logo.webp" />
    <link rel="stylesheet" href="//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">
    <script src="//ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <?php 

    $id=$_GET["id"]

    $query_info_hotel="SELECT * FROM hotels ";
    $result_info_hotel=mysqli_query($connection_db,$query_info_hotel);
    $row_info_hotel = mysqli_fetch_array($result_info_hotel);
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
        <img src="src/img/lsc_logo.webp" width="15%" />
        <h3>
            Modificando el registro de la habitacion: ,
            
        </h3>

    </div>
    <form method="get" action="src/php/tunning_system/calc-tuning.php">
        <div class="container mt-5">
            <div class="row">

                <div class="col-sm-12">
                    <form>
                        <div class="mb-3">
                            <label for="client" class="form-label">Nom del client:</label>
                            <input type="email" class="form-control" id="examplssssseInputEmail1"
                                aria-describedby="emailHelp">
                        </div>
                        <div class="mb-3">
                            <label for="fecha_inicio" class="form-label">Fecha inicio</label>
                            <input type="date" class="form-control" id="fecha_inicio">
                        </div>
                        <div class="mb-3">
                            <label for="fecha_final" class="form-label">Fecha final</label>
                            <input type="date" class="form-control" id="fecha_final">
                        </div>
                        <button type="submit" class="btn btn-primary">Submit</button>
                    </form>
                </div>
            </div>
    </form>
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