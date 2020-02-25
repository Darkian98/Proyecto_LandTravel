<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>¿Olvidastes tu contraseña?</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="../css/estilos3.css">
    <link rel="icon" type="image/png" href="../img/favicon.ico" />
    <link href="https://fonts.googleapis.com/css?family=Courgette&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:200,200i,300,300i,400,400i,600,600i,700,700i,900,900i" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Merriweather:300,300i,400,400i,700,700i,900,900i" rel="stylesheet">
    <link href="vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
    <script src="../js/jquery-3.4.1.min.js"></script>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <style>
    body{
        background-image: url('../img/bgp1.jpg');
        background-repeat: no-repeat;
        background-attachment: fixed;
        background-size: cover;
    }
        
    </style>
</head>
<body>
 
<div style="padding:0;margin: 0;">
        <img id="icono" src="img/Airport_48px.png" >
        <span onclick="document.location.href = 'index.php'" id="name-logo">Land Travel</span>
</div>
<div class="container">
<div class="row">
        <div class="col-12" style="align-content: left;">
<!--Primer Cuadro---------------------------------------------------------------------------------------------------------------------------------->
                <section id ="div-login">
                        <h1>¿Olvidastes tu Contraseña?</h1>
                        <p style="font-size: 18px;">Se le enviará un mensaje a su correo electrónico con el código a ingresar</p s>
                        <form>
                            <div class="row">
                                <div class="col-12">
                                        <input id="recuperar-correo" type="text" placeholder="Dirección de Correo"><br>
                                </div>
                            </div>
                            <button id="button-1" type="button">Enviar Correo</button>
                        </form>
                    </section> 
<!--Segundo Cuadro---------------------------------------------------------------------------------------------------------------------------------->
                    <section id ="div-recuperar">
                        <h1>Recuperación de Contraseña</h1>
                        <p style="font-size: 18px;">Escriba el código que se le generó en el correo electrónico.</p s>
                        <form>
                            <div class="row">
                                <div class="col-12">
                                        <input id="recuperar-codigo" style="background-color: white;" type="text" placeholder="A1B2C3D4"><br>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-6">
                                        <button id="button-escribir" type="button">Volver a Escribir Correo</button>
                                </div>
                                <div class="col-6">
                                        <button id="button-codigo" type="button">Enviar Código</button>
                                </div>
                            </div>
                          
                        </form>
                    </section> 
<!--Tercer Cuadro---------------------------------------------------------------------------------------------------------------------------------->
                        <section id ="div-contrasenia">
                            <h1>Recuperación de Contraseña</h1>
                              <p style="font-size: 18px;">Escriba la contraseña nueva.</p s>
                             <form>
                                <div class="row">
                                        <div class="col-12">
                                                 <input id="recuperar-contraseña" style="background-color: white;" type="text" placeholder="Contraseña"><br>
                                         </div>
                                  </div>
                                  <div class="row">
                                        <div class="col-12">
                                                 <input id="confimar-contrasenia" style="background-color: white;" type="text" placeholder="Confirmar Contraseña"><br>
                                         </div>
                                  </div>
                     <div class="row">
                              <div class="col-12">
                        <button id="button-confirmacion" type="button">Cambiar Contraseña</button>
                </div>
            </div>
          
        </form>
    </section> 
    <!--Cuarto Cuadro---------------------------------------------------------------------------------------------------------------------------------->
    <section id ="div-correcto">
        <h1>Recuperación de Contraseña</h1>
          <p style="font-size: 20px;">Cambio hecho satisfactoriamente!.</p s>
         <form>
 <div class="row">
          <div class="col-12">
    <button onclick="document.location.href = 'login.html'" id="button-confirmacion" type="button">Iniciar Sesión</button>
</div>
</div>

</form>
</section> 
<!---------------------------------------------------------------------------------------------------------------------------------------------------->
        </div>
        <div class="col-6"> 
        </div>
      </div>
    </div>
    <script language="javascript">
    
            </script>
</body>
<script src="../js/controlador-recuperar.js"></script>
<script src="../vendor/jquery/jquery.min.js"></script>
<script src="../vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
<script>
</script>
</html>

<!--  