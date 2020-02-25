<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Creacion Tours</title>
    <link rel="icon" type="image/png" href="../img/favicon.ico" />
    <link rel="stylesheet" href="../css/bootstrap.min.css">
    <link rel="stylesheet" href="../css/Creacion-Tours.css">
    <link rel="icon" type="image/png" href="../img/favicon.ico" />
</head>

<body>
   <nav class="navbar fixed-top navegacion">
      <ul class="nav">
        <li class="nav-item"><a href="#">Administracion</a></li>

        <li><a href="#">Guia De Turismo</a></li>

        <li> <img style="width:180px;margin-top:-8px" src="../img/aaa.png" alt=""></li>
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
    <div class="container">
        <div class="row">
            <div class="col-4">
            <div class="box-create">
                <h2>Duracion del Paquete Turistico</h2>
                <div id="linea"></div>
                <p><label>Dias</label><br>        
                   <input class="form-control" type="text" placeholder="Cantidad De dias">
                </p>
                <p>
                     <label>Noches</label><br>
                     <input class="form-control" type="text" placeholder="Cantidad De noches">
                     <div class="formfecha">
                </p>
                <p><select class="form-control">
                    <label>Idioma</label><br>
                        <option>Español </option>
                        <option>English</option>
                    </select>
                  </p>
                </div>
             </div>
         
         </div>
         <div class="col-4 ">
                   <div class="box-create">
                   <h2>Informaciòn de Ruta</h2>
                <div id="linea"></div>
                <p>
            <label>Pais</label><br>
            <select class="form-control">
                <option>New York </option>
                <option>Bucarest</option>
                <option>Madrid</option>
            </select>
        </p>
        <p>
            <label>Ciudad</label><br>
            <select class="form-control">
                <option>Paris </option>
                <option>colombia</option>
                <option>Venenzuela</option><br>
            </select>
        </p>
        <p>
            <label>Lugares Turísticos</label><br>
            <select class="form-control">
                <option> Torre Eiffel</option>
                <option>El Arco de Triunfo</option>
                <option>El Louvre</option>

            </select>
        </p>
            
                  </div>
             </div>
             <div class="col-4">
                    <div class="box-create">
                    <h2>Informaciòn de Ruta</h2>
                <div id="linea"></div>
                <p>
            <label>Guia De Turismo</label><br>
            <select class="form-control" >
                <option> jose Rodriguez</option>
                <option>Alejandra portillo</option>
                
            </select>
        </p>
        <p>
                <label>Tipo Tour</label><br>
                <select class="form-control">
                    <label>Tipo Tour</label><br>
                        <option>Tour 1 </option>
                        <option>Tour 2</option>
                    </select>
                  </p>
       
    
                    </div>  
             </div> 
      </div>    

    

    <div class="container formulario-footer">
        <div class="row">
            <div class="col col-lg-4">
                <p>
                    <label>Transporte</label><br>
                    <select class="form-control">
                        <option>Transporte Congolon </option>
                        <option>Transporte Costeños</option>
                        <option>Transporte Aurora</option>

                    </select>
                </p>
            </div>
            <div class="col col-lg-4">
            <p>
                    <label>Hoteles</label><br>
                    <select class="form-control">
                        <option>Hotel Marriot</option>
                        <option>Hotel Clarion</option>
                        <option>Hotel Honduras Maya</option>

                    </select>
                </p>
            </div>
            <div class="col col-lg-4">
            <button style="margin-top: 32px;margin-left: 32px;width: 80%;background-color: green !important;" type="button" class="btn btn-success">Crear</button>
            </div>

        </div>
    </div>
    <h3>Rutas De Tours Creadas</h3>
    <table style="background-color:white; border-radius:10px;" class="table table-borderless">
        <thead>
          <tr>
            <th scope="col">Pais</th>
            <th scope="col">Ciudad</th>
            <th scope="col">Hotel</th>
            <th scope="col">Guia De Turismo</th>
            <th scope="col">Dias</th>

            <th scope="col">Noches</th>      
          </tr>
        </thead>
        <tbody>
          <tr>
            <th scope="row">1</th>
            <td>Mark</td>
            <td>Otto</td>
            <td>@mdo</td>
            <td>1</td>
            <td>2</td>
          </tr>
          <tr>
            <th scope="row">2</th>
            <td>Jacob</td>
            <td>Thornton</td>
            <td>@fat</td>
            <td>1</td>
            <td>2</td>
          </tr>
          <tr>
            <th scope="row">3</th>
            <td colspan="2">Larry the Bird</td>
            <td>@twitter</td>
            <td>1</td>
            <td>2</td>
          </tr>
        </tbody>
      </table>
     
</p>
</div>
    <script src="../js/jquery-3.4.1.min.js"></script>
    <script src="../js/bootstrap.min.js"></script>

</body>

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