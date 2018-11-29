<?php

$nombres = "";
$email = "";
$alumnouvm = "s";
$nivelacad = "Licenciatura";
$movil = "";
$campus = "";
$comentarios = "";
$fechacita = "";
$index = 0;
$con = mysqli_connect("127.0.0.1", "root", "uvm", "uvm8is");
if(!$con){
    echo "no se pudo realizar la conexion con la base de datos";
}else{
    //echo "de regreso en la vista contacto";
    
    if(isset($responsedata)){

        foreach($responsedata as $data){
          switch($index){
            case 0:$nombres = $data;$index++;break;
            case 1:$email = $data;$index++;break;
            case 2:$alumnouvm = $data;$index++;break;
            case 3:$nivelacad = $data;$index++;break;
            case 4:$campus = $data;$index++;break;
            case 5:$movil = $data;$index++;break;
            case 6:$comentarios = $data;$index++;break;
            case 7:$fechacita = $data;$index++;break;
          }
        }
        $sql = "insert into contacto (nombres, email, alumno_uvm, nivel_acad, movil, campus, comentarios, fecha_cita)"
        . " values('$nombres', '$email', '$alumnouvm', '$nivelacad', '$movil', '$campus', '$comentarios', '$fechacita')";
        
        if ($con->query($sql) === TRUE) {
          
          echo "<script>alert('Se ha realizado el registro. En breve nos pondremos en contacto con usted.')</script>";
        } else {
          echo "Error: " . $sql . "<br>" . $conn->error;
        }

        $con->close();

        $nombres = "";
        $email = "";
        $alumnouvm = "s";
        $nivelacad = "Licenciatura";
        $movil = "";
        $campus = "";
        $comentarios = "";
        $fechacita = "";
        $index = 0;
    }else{
        echo "";
    }
}
?>


<html lang="es">
  <head>
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>UVM</title>

    <link
      rel="stylesheet"
      href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css"
      integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO"
      crossorigin="anonymous"
    />

    <script
    src="https://code.jquery.com/jquery-3.3.1.slim.min.js"
    integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo"
    crossorigin="anonymous"
  ></script>
  <script
    src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js"
    integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49"
    crossorigin="anonymous"
  ></script>
  <script
    src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js"
    integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy"
    crossorigin="anonymous"
  ></script>

  <script defer src="https://use.fontawesome.com/releases/v5.5.0/js/all.js" integrity="sha384-GqVMZRt5Gn7tB9D9q7ONtcp4gtHIUEW/yG7h98J7IpE3kpi+srfFyyB/04OV6pG0" crossorigin="anonymous"></script>

  <script>
  function muestradatosuvm(dato){

    var x = document.getElementById('datosuvm');
    if (dato==='s') {
        x.style.display = "block";
    } else {
        x.style.display = "none";
    }
  }
  </script>

  <style>
      html,
body {
  background-color: #fff;
  color: #111;
  font-family: "Raleway", sans-serif;
  font-weight: 100;
  height: 100vh;
  margin: 0;
}

ul li {
  list-style: none;
}

a,
a:hover {
  text-decoration: none;
  color: white;
}

nav {
  display: block;
  margin: 0;
}

nav.menu > ul > li:hover {
  cursor: pointer;
}

.seccion {
  position: relative;
}

.fondo-gris {
  background-color: #eeeeee;
}

.fondo-oscuro {
  background-color: rgba(0, 0, 0, 0.8);
}

.gris-translucido {
  background-color: rgba(0, 0, 0, 0.5);
}

.seccion-ligas {
  list-style: none;
}

.texto-blanco {
  color: whitesmoke;
}

.menu,
.menu-bar {
  margin: auto;
  text-align: left;
  color: fff;
  font-weight: bold;
  font-size: 0.8em;
  position: relative;
  background-color: rgba(0, 0, 0, 0.5);
  width: 90%;
  z-index: 1;
}

.menu ul,
.menu-bar ul {
  margin: 0;
  padding: 0;
}

.menu-bar ul li {
  list-style: none;
  display: inline-block;
}

/*
        =================================
            Menu desplegable responsivo
        =================================
        */

.navi {
  height: 48px;
  display: inline-table;
}

.navi > li {
  float: left;
  border-top: 4px solid #c00;
}

.navi > li:hover {
  background-color: rgba(0, 0, 0, 0.7);
  border-top: 4px solid rgba(0, 0, 0, 0.7);
}

.navi > li {
  padding: 16px;
}

.navi li ul {
  display: none;
}

.navi > li:hover > ul {
  display: inline-table;
  position: absolute;
  background-color: #333333;
  min-width: 200px;
  margin-left: -16px;
  padding-left: 16px;
}

.navi li ul li:hover {
  background-color: #555555;
  margin-left: -16px;
  border-left: 16px solid #555555;
}

.navi li ul li:hover > ul {
  display: inline-block;
  position: absolute;
  background-color: #333333;
  min-width: 200px;
  padding-left: 16px;
  margin-left: 16px;
}

/*
        =================================
            Fin Menu desplegable responsivo
        =================================
        */

svg:focus {
  outline: none;
}

.contenedor-principal {
  margin-top: -85px;
}

.menu-bar {
  position: absolute;
  width: 100%;
  margin-top: -400px;
}

.menu-bar ul li {
  padding: 10px;
}

#waldenImg {
  width: 100%;
}

/*
            css para carrousel
            */
.slider {
  margin: 0 auto;
  width: 100%;
  overflow: hidden;
  position: relative;
}

.slider ul {
  padding: 0;
  display: flex;
  width: 200%;
  animation: slide 9s infinite alternate;
}

.slider li {
  width: 100%;
}

.slider img {
  width: 100%;
  height: 100%;
}

@keyframes slide {
  0% {
    margin-left: 0;
  }

  33% {
    margin-left: 0%;
  }

  66% {
    margin-left: -100%;
  }

  100% {
    margin-left: -100%;
  }
}

/*fin css para carousel*/
.footer {
  background-color: #222222;
  color: white;
}

.navbar.navbar-2 .navbar-toggler-icon {
  background-image: url("https://mdbootstrap.com/img/svg/hamburger2.svg?color=fff");
}

.floatcontainer {
  float: right;
}

.floatcontainer, .inner{
  width: 150px;
}

.img-footer-sm{
  width: 100px;
}

.img-footer{
  width: 50px;
}

img {
    display: block;
    margin-left: auto;
    margin-right: auto;
    width: 20%;
}
/*=================================
                MEDIA QUERYS
===================================*/
@media (max-width: 1032px) {
  nav.oculta-md,
  nav.menu-bar,
  .oculta-md {
    display: none;
  }
}

@media (min-width: 1033px) {
  .oculta-lg {
    display: none;
  }
}

/*=================================
        FIN MEDIA QUERYS
===================================*/

  </style>

</head>

    <body>
        <div>
                <nav class="menu gris-translucido oculta-md">
                        <!-- <h1> ESTE ES EL MENU PRINCIPAL </h1> -->
                        <ul class="navi">
                          <li><a href="#">ASPIRANTES </a></li>
                          <li><a href="#">ESTUDIANTES </a></li>
                          <li><a href="#">PADRES </a></li>
                          <li><a href="#">PROFESORES </a></li>
                          <li><a href="#">ORGANIZACIONES </a></li>
                          <li><a href="#">CAMPAÑA 2018 </a></li>
                          <li>
                            <a href="#">GRADUACIÓN </a>
                            <ul>
                              <li>
                                <a href="#"> RESERVACIÓN </a>
                                <ul>
                                  <li><a href="login"> LOG IN </a></li>
                                  <li>
                                    <a href="#">ADEUDOS O PAGOS </a>
                                    <ul>
                                      <li><a href="referencia"> No. REFERENCIA </a></li>
                                      <li><a href="contacto"> CONTACTO </a></li>
                                    </ul>
                                  </li>
                                </ul>
                              </li>
                              <li><a href="mesas"> MESAS </a></li>
                            </ul>
                          </li>
                          <li><a href="inicio">INICIO </a></li>
                        </ul>
                      
                      </nav>

                      <!-- Navbar -->
    <nav class="navbar navbar-dark navbar-2 bg-danger mb-4 oculta-lg text-right">
      <!-- Navbar brand -->
      
      <!-- Collapse button -->
      <button 
        class="navbar-toggler"
        type="button"
        data-toggle="collapse"
        data-target="#navbarSupportedContent15"
        aria-controls="navbarSupportedContent15"
        aria-expanded="false"
        aria-label="Toggle navigation"
      >
        <span class="navbar-toggler-icon"></span>
        <a class="navbar-brand" href="#">UVM</a>
      </button>
      
      <!-- Collapsible content -->
      <div class="collapse navbar-collapse" id="navbarSupportedContent15">
        <!-- Links -->
        <ul class="navbar-nav mr-auto">
          <li class="nav-item">
            <a class="nav-link" href="#">ASPIRANTES </a>
          </li>
          <li class="nav-item"><a class="nav-link" href="#">ESTUDIANTES</a></li>
          <li class="nav-item"><a class="nav-link" href="#">PADRES</a></li>
          <li class="nav-item"><a class="nav-link" href="#">PROFESORES</a></li>
          <li class="nav-item"><a class="nav-link" href="#">ORGANIZACIONES</a></li>
          <li class="nav-item"><a class="nav-link" href="#">CAMPAÑA 2018</a></li>
          <li class="nav-item" data-toggle="collapse" data-target="#submenu1"><a class="nav-link" href="#">GRADUACIÓN</a></li>
          <div id="submenu1" class="collapse" style="background-color: rgb(233, 70, 70);">
            <li class="nav-item"><a class="nav-link" href="mesas">MESAS</a></li>
            <li class="nav-item" data-toggle="collapse" data-target="#submenu1_2"><a class="nav-link" href="#">RESERVACIÓN</a></li>
            <div id="submenu1_2" class="collapse" style="background-color: rgb(236, 80, 80);">
                <li class="nav-item"><a class="nav-link" href="login">LOG IN</a></li>
                <li class="nav-item" data-toggle="collapse" data-target="#submenu1_2_2"><a class="nav-link" href="#">PAGOS O ADEUDOS</a></li>
                    <div id="submenu1_2_2" class="collapse" style="background-color: rgb(239, 93, 93);">
                        <li class="nav-item"><a class="nav-link" href="referencia">No. REFERENCIA</a></li>
                        <li class="nav-item"><a class="nav-link" href="contacto">CONTACTO</a></li>
                    </div>
            </div>
          </div>

          <li class="nav-item"><a class="nav-link" href="#">SIGUIENTE MENU</a></li>
          <li class="nav-item"><a class="nav-link" href="inicio">INICIO</a></li>
        </ul>
        <!-- Links -->
      </div>
      <!-- Collapsible content -->
      <br />
      <br />
      <br />
      <br />
      <br />
      <br />
      <br />
      <br />

      <br />
      <br />
      <br />
      <br />
      
      
    </nav>
    <!-- /.Navbar -->
    
                      <div class="container">

                            <img src="{{ asset('images/uvm_logo.png') }}" alt="uvmlogo">
        
                            <form action="{{route('haciacontacto')}}" method="POST">
                                {{ csrf_field() }}
                                <div class="form-group">
                                    <label for="nombres" class="badge badge-dark">Nombre</label>
                                    <input type="text" class="form-control" id="nombres" name="nombres"
                                        placeholder="Nombre completo" required maxlength="50"/>
                                    <label for="email" class="badge badge-dark">Email address</label>
                                    <input type="email" class="form-control" id="email" name="email"
                                        placeholder="Ingrese su email" required maxlength="50"/>
                                    <label for="alumnouvm" class="badge badge-dark">Alumno UVM</label>
                                    <input type="radio" name="alumnouvm" value="si" checked onchange="muestradatosuvm('s')"/>
                                    <label for="alumnouvm">Sí</label>
                                    <input type="radio" name="alumnouvm" value="no" onchange="muestradatosuvm('n')"/>
                                    <label for="alumnouvm">No</label>
                                    <div class="row datosuvm" id="datosuvm">
                                        <div class="col-xs-12 col-sm-12 col-md-6 col-lg-6">
                                            <label for="nivel" class="badge badge-dark">Nivel Académico</label>
                                            <select class="form-control" name="nivel">
                                                <option name="LICENCIATURA">LICENCIATURA</option>
                                                <option name="POSGRADO">POSGRADO</option>
                                                <option name="MEDIO SUPERIOR">MEDIO SUPERIOR</option>
                                            </select>
                                        </div>
                                            <div class="col-xs-12 col-sm-12 col-md-6 col-lg-6">
                                                <label for="campus" class="badge badge-dark">Campus</label>
                                                <select class="form-control" name="campus">
                                                    <option name="Chapultepec">Chapultepec</option>
                                                    <option name="Coyoacan">Coyoacán</option>
                                                    <option name="Roma">Roma</option>
                                                    <option name="San Angel">San Angel</option>
                                                    <option name="San Rafael">San Rafael</option>
                                                    <option name="Santa Fe">Santa Fe</option>
                                                    <option name="Marina">Marina</option>
                                                    <option name="Tlapan">Tlapan</option>
                                                    <option name="Aguascalientes">Aguascalientes</option>
                                                    <option name="Mexicali">Mexicali</option>
                                                    <option name="Tuxtla">Tuxtla</option>
                                                    <option name="Chihuahua">Chihuahua</option>
                                                    <option name="Saltillo">Saltillo</option>
                                                    <option name="Torreon">Torreón</option>
                                                    <option name="Hispano">Hispano</option>
                                                </select>
                                            </div>
                                    </div>
                                    <div></div>
                                    <label for="telmovil" class="badge badge-dark">Teléfono Móvil</label>
                                    <input class="form-control" type="tel" name="telmovil" placeholder="máximo 10 dígitos" maxlength="10" minlength="10"required/>

                                    <label for="comentarios" class="badge badge-dark">Comentarios</label>
                                    <textarea class="form-control" name="comentarios" id="comentarios" cols="10" rows="3" placeholder="compartenos tus comentarios" maxlength="100"></textarea>

                                    <label for="comentarios" class="badge badge-info">Agenda una cita</label>
                                    <input type="date" name="fechacita" class="form-control">

                                    <br/>
                                    <br/>
                                   <input class="form-control button btn-block btn-primary" type="submit">
                                   

                                   </textarea>
                                </div>
                            </form>
                      </div>

            
                      
        </div>        
</body>
</html>