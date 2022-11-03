<!DOCTYPE html>
<html>

<head>
    <title>Iniciar sesion</title>
    <link rel="stylesheet" type="text/css" href="src/css/style.css">
    <meta name="author" content="ikerblac">
    <link rel="shortcut icon" href="src/img/logo_portaventura.png" />
    <script src="src/js/intent-login.js"></script>

</head>

<body>
    <form action="src/php/login_system/login.php" method="post">
        <h2>Iniciar sesion</h2>
        <img src="src/img/logo_portaventura.png" width="50%" />
        <?php if (isset($_GET['error'])) { ?>
        <p class="error"><?php echo $_GET['error']; ?></p>
        <?php } ?>
        <label>Nombre de usuario</label>
        <input type="text" name="uname" placeholder="Nombre de usuario"><br>

        <label>Contraseña</label>
        <input type="password" name="password" placeholder="Contraseña"><br>

        <button onclick="sendMessage()" type="submit">Inicar sesion</button>
        <!-- <a href="signup.php" class="ca">Create an account</a>-->
    </form>
</body>

</html>