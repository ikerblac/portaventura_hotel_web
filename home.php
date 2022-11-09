<?php 
session_start();
include "src/php/db_config.php";

if (isset($_SESSION['id']) && isset($_SESSION['user_name'])) {

 ?>
 
<!DOCTYPE html>
<html lang="es">

<head>
    <title>Home</title>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" />
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>
    <link rel="stylesheet" type="text/css" href="src/css/home.css" />
    <meta name="author" content="ikerblac">
    <link rel="shortcut icon" href="src/img/logo_portaventura.png" />
</head>

<body>
    <nav class="navbar navbar-expand-sm navbar-dark bg-dark">
        <div class="container-fluid">
            <a class="navbar-brand" href="home.php">Inicio</a>
            <a class="navbar-brand" href="rooms.php">Habitaciones</a>
            <a class="navbar-brand" href="bookings.php">Reservas</a>
            <a class="navbar-brand" href="bookings.php">Clientes</a>
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
    </div>

    <div class="container mt-5">
        <!-- <a href="add_form.php" class="btn btn-primary">Crear nou curs</a> -->
    </div>
    <div class="container mt-5">
        <div class="row">
            <div class="col-sm-12">
                
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