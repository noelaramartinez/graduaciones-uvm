<html lang="{{ app()->getLocale() }}">
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
    <link href="{{ asset('css/main.css') }}" rel="stylesheet" type="text/css" />
    <link
      href="{{ asset('css/angular-material.min.css') }}"
      rel="stylesheet"
      type="text/css"
    />
    <style></style>
  </head>

  <body>

  @php
  $nombres = "";

  if (Session::has('datosReservacionUsuario')){
      $datosReservacionUsuario = Session::get('datosReservacionUsuario');

      foreach($datosReservacionUsuario as $user){
          $nombres = $user->nombres;
      }
  }
  @endphp

    @section('sidebar')
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
    </div>

    <div class="floatcontainer">
        @if($nombres!="")
          <span class="inner" style="color: lightblue;">
              <i class="fas fa-user"></i> {{$nombres}}
          </span></br>
          <a href="login" style="color: lightsalmon;"><i class="fas fa-sign-out-alt"></i> Log Out</a>
        @else
          <i class="fas fa-user"></i>
        @endif
    </div>
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

    @show

    <div class="contenedor-principal">@yield('contenido')</div>
  </body>
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

  <script src="{{ asset('js/angular/angular.min.js') }}"></script>
  <script src="{{ asset('js/angular/angular-animate.min.js') }}"></script>
  <script src="{{ asset('js/angular/angular-aria.min.js') }}"></script>
  <script src="{{ asset('js/angular/angular-messages.min.js') }}"></script>
  <script src="{{ asset('js/angular/angular-material.min.js') }}"></script>
  <script src="{{ asset('js/angular/angular-cookies.min.js') }}"></script>
  <script src="{{ asset('js/angular/angular-sanitize.min.js') }}"></script>
  <script src="{{ asset('js/ngMain.js') }}"></script>
</html>
