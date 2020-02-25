<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Eliminar</title>
    <link rel="icon" type="image/png" href="../img/favicon.ico" />
    <link rel="stylesheet" href="../css/bootstrap.min.css">
    <link rel="stylesheet" href="../css/Eliminar.css">

    <script src="../js/jquery-3.4.1.min.js"></script>
  <script src="../js/bootstrap.min.js"></script>
   
</head>

<style type="text/css">
    ul,
    ol {
      list-style: none;

    }
  </style>
</head>

<header>
<nav class="navbar fixed-top navegacion">
      <ul class="nav">
        <li class="nav-item"><a href="#">Administracion</a></li>

        <li><a href="#">Guia De Turismo</a></li>

        <li> <a href="#">Destinos</a></li>
        <li> <a href="#">Atencion Al Cliente</a></li>
        <li class="nav-item naveup"> <a href="#">Tours</a>
          <ul class="nave">
            <li><a href="creacion-tours.php">Agregar</a></li>
            <li><a href="modificar.php">Modificar</a></li>
            <li><a href="eliminar.php">Eliminar</a></li>
          </ul>
        </li>
      </ul>
    </nav>
    <a href="tours.php"><img style="width:40px; position: absolute;top:80px;left:30px;cursor:pointer;" src="../img/flecha_izquierda1.png" alt=""></a>
    <div id="imagenFondo" >
        <img style="width:100%; height:63px;border:solid;
border-width: 2px;border-color:black; opacity:0.7; border-left-style:none;border-right-style:none;" src="../img/header3.jpg" alt="">
    </div>
</header>

<body id="body">




    <h3 id="pt">Paquetes Turisticos</h3>
    <table class="table table-striped  table-hover tablemodificar">
        <thead>
          <tr class="active">
            <th scope="col">Tipo</th>
            <th scope="col">Nombre</th>
            <th scope="col">Fecha Inicio</th>
            <th scope="col">Duracion</th>
            <th scope="col">Accion</th>
          </tr>
        </thead>
        <tbody>
          <tr class="success">
            <th scope="row">1</th>
            <td>pareja</td>
            <td>Destino Historico</td>
            <td>2/10/2020</td>
            <td>4 dias y 3 noches</td>
            <td><button style=";width: 100%;background-color: red !important;" type="button" class="btn btn-success">Eliminar</button>
            </td>
          </tr>
          <tr>
            <th scope="row">2</th>
            <td>Individual</td>
            <td>Eco-paseo</td>
            <td>2/10/2020</td>
            <td>3 dias y 2 noches</td>
            <td><button style=";width: 100%;background-color: red !important;" type="button" class="btn btn-success">Eliminar</button>
            </td>
          </tr>
          <tr>
            <th scope="row">3</th>
            <td>Familiar</td>
            <td>Eco-paseo</td>
            <td>3/10/2020</td>
            <td>2 dias y 1 noches</td>
            <td><button style=";width: 100%;background-color: red !important;" type="button" class="btn btn-success">Eliminar </button>
            </td>
          </tr>
        </tbody>
      </table><br>

     
<footer>
<div class="MD">
    <div class="contenedor container">
      <div class="row row1">
        <div class="col col-lg-6">
          <h6>
              <span style="margin-top: -10px;" id="name-logo">Land Travel</span>
            
          </h6>
        </div>
        <div class="col col-lg-6">
          <H6>
            CONTACTOS
           
          </H6>
        </div>
      </div>
      <div class="row ">
        <div class="col col-lg-4 col-md-6 col-sm-12">
          <img style="height: 140px;margin-left: 58px;" src="../img/logo.png" alt="">      </div>
        <div class="col col-lg-4 col-md-6 col-sm-12"><H6>
          <h6>UNAH</h6>
          <h6>Direccion</h6>
            <h6>Telefono</h6>
          
        </H3></div>
        <div class="col col-lg-4 col-md-6 col-sm-12">
          <h6>
            CONTACTOS
          </h6>
        </div>
      </div>
      <div class="row derechos row2">
        <div class="col  col-lg-12">
          <h6 style="margin-top:-30px">@Todos los derechos reservados</h6>
        </div>
      </div>
    </div>
  </div>
  </footer> 





</html>
<script src="../js/tours.js"></script>
    </body>