<!DOCTYPE html>
<html>

<head>
    <title>Registrarse</title>
    <link rel="stylesheet" type="text/css" href="src/css/style.css">
    <meta name="author" content="ikerblac">
    <link rel="shortcut icon" href="src/img/logo_portaventura.png" />
</head>

<body>
    <form action="src/php/login_system/signup-check.php" method="post">
        <h2>Registrarse</h2>
        <?php if (isset($_GET['error'])) { ?>
        <p class="error"><?php echo $_GET['error']; ?></p>
        <?php } ?>

        <?php if (isset($_GET['success'])) { ?>
        <p class="success"><?php echo $_GET['success']; ?></p>
        <?php } ?>


        <label>Nombre de usuario</label>
        <?php if (isset($_GET['uname'])) { ?>
        <input type="text" name="uname" placeholder="Nombre de usuario" value="<?php echo $_GET['uname']; ?>"><br>
        <?php }else{ ?>
        <input type="text" name="uname" placeholder="Nombre de usuario"><br>
        <?php }?>


        <label>Contraseña</label>
        <input type="password" name="password" placeholder="Password"><br>

        <label>Repetir contraseña</label>
        <input type="password" name="re_password" placeholder="Re_Password"><br>

        <button onclick="sendMessage()" type="submit">Registrarse</button>
        <a href="index.php" class="ca">Inicio</a>
    </form>
</body>

</html>