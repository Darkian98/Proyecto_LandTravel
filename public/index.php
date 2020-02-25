<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Login</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="../vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
    <link rel="stylesheet" href="../css/estilos.css">
    <link rel="icon" type="image/png" href="../img/favicon.ico" />
    <link href="https://fonts.googleapis.com/css?family=Courgette&display=swap" rel="stylesheet">

    <!-- include the style -->
<link rel="stylesheet" href="../css/alertify.min.css" />
<!-- include a theme -->
<link rel="stylesheet" href="../css/themes/default.min.css" />
    <script src="../js/jquery-3.4.1.min.js"></script>
</head>
<body>
 
<div style="padding:0;margin: 0;">
        <img id="icono" src="img/Airport_48px.png" >
        <span onclick="document.location.href = 'index.php'" id="name-logo">Land Travel</span>
</div>
   
   
    <section id ="div-login">
        <h1>Iniciar Sesiòn</h1>
        <form>
            <label>Email</label><br>
            <input id="login-usuario" type="text" placeholder="Ejemplo: juan">
            <br>
            <label>Password</label><br>
            <input id="login-contraseña" type="password" placeholder="********">
            <br>
            <a href="Olvidar-Contrasenia.php">¿Olvidastes tu contraseña?</a>
            <br>
            <button id="iniciar-sesion"  type="button">Login</button>
            <br>
            <br>
            <img src="img/User_48.png" height="15" width="15">
            <span style="font-size: 15px;">¿Nuevo en Land Travel?</span> <a href="Registrar.php">Registrate.</a>
        </form>
    </section>
<script src="../js/controlador.js"></script>
<!-- include the script -->
<script src="../js/alertify.min.js"></script>

<script src="../vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

</body>
</html>