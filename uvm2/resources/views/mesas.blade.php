@extends('index')

@section('title', 'UVM')

@section('sidebar')
@parent
@endsection

@section('contenido')

<br />
<br />
<br />
<br />
<br />

@php
$cantidadMesasFila=8;
$cantidadSillas = 12;
$filas = 3;
$idMesa= 0;
$cxMesa = 0;
$cyMesa = 0;
$vectorNormal = 62.5;
$radioMesa = 40;
$radioSilla = 10;

$colorMesa = "#222";
$colorSilla = "#111";
$colorNumAsiento = "#A5CDF3";
$colorMesa = "#848484";
$colorSilla = "#848484";
$idLugar = 0;
$arrReservacion = [];
$rIdM = "";
$rIdS = "";
$status = 0;
$sillaEncontrada = false;
$nombres = "";
$paterno = "";
$asientosDisponibles = 0;
$idReservacionUsuario = 0;
$idReserv = -1;


if(isset($datosReservacionUsuario))
    foreach($datosReservacionUsuario as $user){
        $nombres = $user->nombres;
        $paterno = $user->paterno;
        $asientosDisponibles = $user->cantidad_asientos;
        $idReservacionUsuario = $user->id_reservacion;
        $status = $user->status;
    }

if (Session::has('datosReservacionUsuario')){
    $datosReservacionUsuario = Session::get('datosReservacionUsuario');

    foreach($datosReservacionUsuario as $user){
        $nombres = $user->nombres;
        $paterno = $user->paterno;
        $asientosDisponibles = $user->cantidad_asientos;
        $idReservacionUsuario = $user->id_reservacion;
        $status = $user->status;
    }
}
    


//primer fila cambia solo cx
//segunda fila en adelante aumenta cy y se mantiene toda la fila y cambia cx
//posicion de pista, escenario y entrada/salida no cambia
//la mesa mide 100px de diametro las sillas 15px entre la mesa y las sillas 5 px y entre sillas de diferente mesa 5px
//primer mesa en cx=100 cy=100, 2° cx = 250, 3° cx=400
//posicion de silla: posicion vector centro mesa -vector silla (por componente(x, y))

//reservaciones: [{"id":3,"id_mesa":5,"id_silla":2,"id_reservacion":3,"created_at":null,
//"updated_at":null,"id_alumno":3,"fecha_reservacion":"2018-10-16 00:00:00",
//"fecha_limite":"2018-11-30 00:00:00","fecha_evento":"2018-12-07 00:00:00",
//"monto_total":7600,"adeudo":0,"precio_unitario":760,"status":1,"cantidad_asientos":10},

//INSERT INTO `asiento` (`id`, `id_mesa`, `id_silla`, `id_reservacion`, `created_at`, `updated_at`) 
//VALUES (NULL, '11','6', '1', NULL, NULL), (NULL, '11', '7', '1', NULL, NULL);

//datosReservacionUsuario: [{"id":1,"nombres":"Noe Carlos","paterno":"Lara","materno":"Martinez","pass":"123456","no_cuenta":"010033825","e_mail":"noelaramartinez@gmail.com","tel_movil":"5512462219","tel_fijo":"5512462219","status":0,"created_at":null,"updated_at":null,"id_alumno":1,"fecha_reservacion":"2018-09-09 00:00:00","fecha_limite":"2018-11-30 00:00:00","fecha_evento":"2018-12-07 00:00:00","monto_total":3040,"adeudo":340,"precio_unitario":760,"cantidad_asientos":4,"id_reservacion":1}]

@endphp


<script type="text/javascript">
    function validarMesa(event, j) {
        alert("se valida la mesa: " + event + "   j" + j);
    }
</script>

<style>
    circle:focus {
            outline: none;
        }
</style>

<body class="text-center" ng-app="App" ng-controller="MesasSillasController as con1">

    <button type="button" class="btn btn-info btn-block" ng-click="registrarReservMS()">Reservar</button>

    <br>
    <br>

    <h1>{{$nombres}} {{$paterno}}</h1>

    <input ng-hide="hiddendiv" value="{{$nombres}}" id="nombres" name="nombres" />
    <input ng-hide="hiddendiv" value="{{$status}}" id="status" name="status" />
    <input ng-hide="hiddendiv" value="{{$idReservacionUsuario}}" id="idReservacionUsuario" name="idReservacionUsuario" />

    <div item-width="1500" class="text-center" style="margin: auto;">
        <svg height="680" width="1240">


            @for ($i = 0; $i < $filas; $i++) @for ($j=0; $j < $cantidadMesasFila; $j++) @if($i<2) @if($j < 3 || $j> 4)
                <circle cx="{{100 + $j * 150}}" cy="{{100 + $i * 150}}" r="{{$radioMesa}}" stroke="" stroke-width=""
                    fill="{{$colorMesa}}" />
                <text x="{{100 - 10 + $j * 150}}" y="{{100 + 6 + $i * 150}}" fill="white">M{{$idMesa + 1}}</text>

                {{!!$cxMesa = 100 + $j * 150; $cyMesa = 100 + $i * 150;!!}}
                @for ($k = 0; $k < $cantidadSillas; $k++) 
                    {{$colorSilla="#848484"}} 
                    @foreach($reservaciones as $reservacion) 
                        {{$idReserv=-1}}
                        {{!!
                            $rIdM = $reservacion->id_mesa;
                            $rIdS=$reservacion->id_silla;
                            $status=$reservacion->status;
                            $idReserv=$reservacion->id_reservacion;
                        !!}}
                        @if($rIdM==$idMesa && $rIdS==$k && !$sillaEncontrada) 
                        @if($idReserv==$idReservacionUsuario &&
                            $asientosDisponibles>0)
                            {{$asientosDisponibles-=1}}
                        @endif
                        {{$sillaEncontrada = true}}
                        @if($status==1)
                            {{$colorSilla="#BEF781"}}
                        @else
                            {{$colorSilla="#A9D0F5"}}
                        @endif
                        @endif

                        @if($sillaEncontrada)
                            break;
                        @endif
                    @endforeach

                    <circle ng-click="agregarMesaSilla($event, '{{$k}}', '{{$idMesa}}','{{$sillaEncontrada}}')" 
                        cx="{{$cxMesa-($vectorNormal*cos(deg2rad(30*$k)))}}"
                        cy="{{$cyMesa-($vectorNormal*sin(deg2rad(30*$k)))}}" 
                        r="{{$radioSilla}}" stroke="" stroke-width="0"
                        fill="{{$colorSilla}}" id="{{$idLugar}}" ng-init="idReservacionUsuario='<?php echo $idReservacionUsuario ?>'" />

                    <text font-size="12" stroke="{{$colorNumAsiento}}" stroke-width="1" x="{{$cxMesa-5-(($vectorNormal-16)*cos(deg2rad(30*$k)))}}"
                        y="{{$cyMesa+6-(($vectorNormal-16)*sin(deg2rad(30*$k)))}}" fill="{{$colorNumAsiento}}">{{$k+1}}</text>
                    {{!! $idLugar++; !!}}
                    {{$sillaEncontrada = false}}
                    @endfor

                    {{!! $idMesa++; !!}}
                    @endif
                    @else
                    <circle cx="{{100 + $j * 150}}" cy="{{100 + $i * 150}}" r="{{$radioMesa}}" stroke="gray"
                        stroke-width="0" fill="{{$colorMesa}}" />
                    <text x="{{100 - 10 + $j * 150}}" y="{{100 + 6 + $i * 150}}" fill="white">M{{$idMesa + 1}}</text>

                    {{!!$cxMesa = 100 + $j * 150; $cyMesa = 100 + $i * 150;!!}}
                    @for ($k = 0; $k< $cantidadSillas; $k++) 
                        {{$colorSilla="#848484"}} 
                        @foreach($reservaciones as $reservacion)
                        {{!!$rIdM = $reservacion->id_mesa;$rIdS=$reservacion->id_silla;$status=$reservacion->status;!!}}
                        @if($rIdM==$idMesa && $rIdS==$k && !$sillaEncontrada) {{$sillaEncontrada = true}} 
                        @if($status==1)
                            {{$colorSilla="#BEF781"}} 
                        @else {{$colorSilla="#A9D0F5"}} @endif @endif @if($sillaEncontrada)
                        break; @endif @endforeach <circle ng-click="agregarMesaSilla($event, '{{$k}}', '{{$idMesa}}','{{$sillaEncontrada}}')"
                        cx="{{$cxMesa-($vectorNormal*cos(deg2rad(30*$k)))}}" cy="{{$cyMesa-($vectorNormal*sin(deg2rad(30*$k)))}}"
                        r="{{$radioSilla}}" stroke="" stroke-width="0" fill="{{$colorSilla}}" id="{{$idLugar}}" />
                    <text font-size="12" stroke="{{$colorNumAsiento}}" stroke-width="1" x="{{$cxMesa-5-(($vectorNormal-16)*cos(deg2rad(30*$k)))}}"
                        y="{{$cyMesa+6-(($vectorNormal-16)*sin(deg2rad(30*$k)))}}" fill="{{$colorNumAsiento}}">{{$k+1}}</text>
                    {{!! $idLugar++; !!}}
                    {{$sillaEncontrada = false}}
                    @endfor

                    {{!! $idMesa++; !!}}
                    @endif
                    @endfor
                    @endfor

                    <rect x="480" y="50" width="290" height="250" style="fill:#848484;" />
                    <text font-size="24" x="590" y="150" fill="white">PISTA</text>
        </svg>

        <input ng-hide="hiddendiv" value="{{$asientosDisponibles}}" id="asientosDisponibles" name="asientosDisponibles" />
    </div>

    <!-- Plantilla para impresion -->
    <!--     <div class="container" id="hiden-div" ng-hide="hidePallet">

			<table border="1" id="hiden-table">
				<thead>
					<tr>
						<th>FolioTrasp</th>
						<th>Artículo</th>
						<th>Desc.</th>
						<th>Bod.</th>
						<th>orderNum.</th>
						<th>Ordenada</th>
						<th>Escaneada</th>
					</tr>
				</thead>
				<tbody>
					<tr ng-repeat="obj in liArticulos">
						<td>{{obj.folio}}</td>
						<td>{{obj.itemNum}}</td>
						<td>{{obj.desc_2}}</td>
						<td>{{obj.whseCode}}</td>
						<td>{{obj.qtyOrdered}}</td>
						<td>{{obj.escaneadas}}</td>
					</tr>
				</tbody>
			</table>
		</div> -->



</body>


@endsection