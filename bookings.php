<?php 
session_start();
include "src/php/db_config.php";

if (isset($_SESSION['id']) && isset($_SESSION['user_name'])) {

 ?>
<!DOCTYPE html>
<html lang="es">

<head>
    <title>Bookings</title>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" />
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>
    <link rel="stylesheet" type="text/css" href="src/css/home.css" />
    <meta name="author" content="ikerblac">
    <link rel="shortcut icon" href="src/img/logo_portaventura.png" />
    <?php 
        $query_info_hotel="SELECT * FROM bookings";
        $result_info_cliente=mysqli_query($connection_db,$query_info_hotel);
    ?>
</head>

<body>
    <nav class="navbar navbar-expand-sm navbar-dark bg-dark">
        <div class="container-fluid">
            <a class="navbar-brand" href="home.php">Inicio</a>
            <a class="navbar-brand" href="rooms.php">Habitaciones</a>
            <a class="navbar-brand" href="bookings.php">Reservas</a>
            <a class="navbar-brand" href="clients.php">Clientes</a>
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
        <img src="src/img/logo_portaventura.png" width="15%" />
        <br>
        <h3>
            Clientes
        </h3>
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
			<th scope="col">Numero reserva
                            <th scope="col">Id de cliente</th>
                            <th scope="col">Id del hotel</th>
                            <th scope="col">Id Habitacio</th>
                            <th scope="col">Data</th>
                            <th scope="col">Data fi</th>
                            <th scope="col">Pensio</th>
                            <th scope="col">Preu total</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php 

		     
		      while($row_info_cliente=mysqli_fetch_array($result_info_cliente)){
		      ?>
                        <tr>
                            <td><?php echo $row_info_cliente['id'] ?></td>
                            <td><?php echo $row_info_cliente['clientId'] ?></td>
                            <td><?php echo $row_info_cliente['hotelId'] ?></td>
                            <td><?php echo $row_info_cliente['roomId'] ?></td>
			    <td><?php echo $row_info_cliente['entryDate'] ?></td>
                            <td><?php echo $row_info_cliente['departureDate'] ?></td>
                            <td><?php echo $row_info_cliente['pension'] ?></td>
                            <td><?php echo $row_info_cliente['totalPrice'] ?></td>
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