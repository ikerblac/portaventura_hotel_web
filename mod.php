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
    <link rel="shortcut icon" href="src/img/lsc_logo.webp" />
    <link rel="stylesheet" href="//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">
    <script src="//ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <?php 

    $id=$_GET["ID_habitacio"]

    if(isset($_GET['enviar'])){
        //creem les variables per guardar-ho amb les seguents dades escrites
        $nom=trim($_GET['nom_client']);
        $dataentrada=trim($_GET['data_entrada']);
        $datasortida= trim($_GET['data_sortida']);
        //consulta que actualitza la base de dades
        $actualitzar = "UPDATE hotels SET nom_client='$nom' , data_entrada='$dataentrada', data_sortida='$datasortida' WHERE ID_habitacio = '$id'";
        //s'executa la consulta 
        $resultat2 = mysqli_query($conn,$actualitzar);
        //control d'errors 
        if($resultat2){
            echo "<br>S'ha actualitzat correctament<br>";
        }else {
            echo "<br>Hi ha hagut algún problema tarnaho a provar<br>";
        }
    }else{
        echo "<br>Escriu les dades que vols cambiar <br>";
    }
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
        <img src="src/img/lsc_logo.webp" width="25%" />
        <h3>
            Modificando el registro de la habitacion: ,
            <?php echo $row_info_hotel['ID_habitacio']; ?>
        </h3>

    </div>
    <form method="get" action="src/php/tunning_system/calc-tuning.php">
        <div class="container mt-5">
            <div class="row">

                <div class="col-sm-12">
                    <form>
                        <?php 
		                    //es realitza la consulta anterior i la desem a una variable resultat
		                    $resultat = mysqli_query($conn,$sql);
                            //la recorrem amb un while
		                    while($filas=mysqli_fetch_assoc($resultat)){?>
                            <!--Taula on es mostra les dades al exceptuar de l'id i permetem cambiar les dades excepte del id per poder modificar-ho-->
                            <h1>!Modificar!</h1>
                            <!--al tindre el id i pasarlo mostrem les dades per el mateix propi ID i permetem cambiar-ho -->
                            <input type="hidden" name="id" value="<?php echo $filas["ID_habitacio"];?>"><br>
                            <label> Nom : </label><br>
                            <input type="string" name="nom_client" value="<?php echo $filas["nom_client"];?>"><br>
                            <label> Data entrada : </label><br>
                            <input type="date" name="data_entrada" value="<?php echo $filas["data_entrada"];?>"><br>
                            <label> data sortida : </label><br>
                            <input type="date" name="data_sortida" value="<?php echo $filas["data_sortida"];?>"><br>
                        <?php }?>

                        <!--boto per enviar les dades al altre fitxer-->
                        <input type="submit" name="enviar" value="enviar">
                        <br>

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