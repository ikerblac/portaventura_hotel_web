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
                <form>
                    <div class="form-group">
                        <label for="exampleInputEmail1">Nombre:</label>
                        <input type="text" class="form-control" id="name" aria-describedby="name"
                            placeholder="name" >
                    </div>
                    <div class="form-group">
                        <label for="exampleInputPassword1">Password</label>
                        <input type="date" class="form-control" id="exampleInputPassword1" placeholder="Password">
                    </div>
                    <div class="form-check">
                        <input type="checkbox" class="form-check-input" id="exampleCheck1">
                        <label class="form-check-label" for="exampleCheck1">Check me out</label>
                    </div>
                    <button type="submit" class="btn btn-primary">Submit</button>
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