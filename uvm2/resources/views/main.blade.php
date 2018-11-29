@extends('index')

@section('title', 'UVM')

@section('sidebar')
@parent
@endsection

@section('contenido')
<section id="portfolio" name="portfolio">

	<div>
		<div class="slider">
			<ul>
				<li>
					<img src="{{ asset('images/BannerHome-Consejo.jpg') }}" alt="BannerHome-Consejo" class="img-portfolio">
				</li>
				<li>
					<img src="{{ asset('images/BannerHome_Compartamos-1170X620.jpg') }}" alt="BannerHome_Compartamos" class="img-portfolio">
				</li>
			</ul>
		</div>
	</div>

	<nav class="menu-bar">
		<ul>
			<li>ACERCA DE UVM</li>
			<li>PROGRAMAS ACADEMICOS</li>
			<li>FINANCIAMIENTO Y BECAS</li>
			<li>ADMISIONES</li>
			<li>ÁREA ACADÉMICA</li>
			<li>EXPERIENCIA ESTUDIANTIL</li>
			<li>CAMPUS</li>
			<li>SERVICIOS ESCOLARES</li>
		</ul>
	</nav>
</section>

<div class="seccion">

	<br />
	<br />

	<div class="row text-center">
		<div class="col-xs-12 col-sm-12 col-md-4 col-lg-4 text-center">
			<img src="{{ asset('images/solicita-info.png') }}" alt="solicita-info" width="70%" />
		</div>
		<div class="col-xs-12 col-sm-12 col-md-4 col-lg-4 text-center">
			<img src="{{ asset('images/botones_01800.png') }}" alt="botones_01800" width="70%" />
		</div>
		<div class="col-xs-12 col-sm-12 col-md-4 col-lg-4 text-center">
			<img src="{{ asset('images/boton_chat.jpg') }}" alt="boton_chat" width="70%" />
		</div>
	</div>

	<br />
	<br />

	<div class="row">
		<div class="col-md-4 text-center">
			<div class="panel">
				<img src="{{ asset('images/LinkHome-Fimpes.png') }}" alt="LinkHome-Fimpes" />
			</div>
		</div>
		<div class="col-md-4 text-center">
			<div class="panel">
				<img src="{{ asset('images/LinkHome-UVMRadio.jpg') }}" alt="LinkHome-UVMRadio" />
			</div>
		</div>
		<div class="col-md-4 text-center">
			<div class="panel">
				<img src="{{ asset('images/LinkHome-Calculadora.jpg') }}" alt="LinkHome-Calculadora" />
			</div>
		</div>
	</div>

	<br />

	<div class="row">
		<div class="col-md-4 text-center">
			<div class="panel">
				<img src="{{ asset('images/LinkHome-Conocemas.jpg') }}" alt="LinkHome-Fimpes" />
			</div>
		</div>
		<div class="col-md-4 text-center">
			<div class="panel">
				<img src="{{ asset('images/LinkHome-HospitalVeterinario.jpg') }}" alt="HospitalVeterinario" />
			</div>
		</div>
		<div class="col-md-4 text-center">
			<div class="panel">
				<img src="{{ asset('images/LinkHome-Investigacion.jpg') }}" alt="Investigacion" />
			</div>
		</div>
	</div>

</div>
<br />
<br />
<div class="seccion">
	<img id="waldenImg" src="{{ asset('images/CompB_WALDEN_nov18_1.jpg') }}" alt="walden" />
</div>
<br />
<br />
<div class="seccion text-center fondo-gris">
	<h2>Así vivimos en UVM</h2>
	<div class="row">
		<div class="col-md-4 text-center">
			<div class="panel">
				<img src="{{ asset('images/nota-medicina-20180911.jpg') }}" alt="nota-medicina-20180911" />
			</div>
			<h4>Ver Noticia</h4>
		</div>
		<div class="col-md-4 text-center">
			<div class="panel">
				<img src="{{ asset('images/blog_masters_201800824.jpg') }}" alt="blog_masters_201800824" />
			</div>
			<h4>Ver Más</h4>
		</div>
		<div class="col-md-4 text-center">
			<div class="panel">
				<img src="{{ asset('images/Blog-CNIAgosto18_1-min.jpg') }}" alt="Blog-CNIAgosto18_1-min" />
			</div>
			<h4>Ir al Blog</h4>
		</div>
	</div>

</div>
<br />
<br />

<div class="seccion fondo-oscuro texto-blanco seccion-ligas">
	<br />
	<br />
	<div class="row">
		<div class="col-md-3 col-sm-3">
			<img src="{{ asset('images/white-uvm.png') }}" alt="BannerHome_Compartamos" />
		</div>
		<div class="col-md-3 col-sm-3">
			<h4>Contáctanos</h4>
			<ul>
				<li><i class="fas fa-phone"></i> 01 800 0000 886</li>
				<li><i class="fas fa-comments"></i> Chats</li>
				<li><i class="fas fa-envelope"></i> Buzón del rector</li>
				<li><i class="fas fa-newspaper"></i> Prensa UVM</li>
				<li><i class="fas fa-address-card"></i> Contáctanos</li>
			</ul>
		</div>
		<div class="col-md-3 col-sm-3">
			<h4>Contáctanos</h4>
			<ul>
				<li>Admisiones</li>
				<li>Ventanilla de Servicio</li>
				<li>Bolsa de Trabajo Estudiantes</li>
				<li>Centros de Información UVM</li>
				<li>Trabaja con Nosotros</li>
				<li>Caja y Facturación</li>
				<li>Mapa de Sitio</li>
				<li>Atención UVM</li>
				<li>Comunidad UVM</li>
			</ul>
		</div>
		<div class="col-md-3 col-sm-3">
			<h4>Contáctanos</h4>
			<ul>
				<li><i class="fab fa-facebook-square"></i> FaceBook</li>
				<li><i class="fab fa-twitter-square"></i> Tweeter</li>
				<li><i class="fab fa-linkedin"></i> Linked In</li>
				<li><i class="fab fa-youtube"></i> Youtube</li>
				<li><i class="fab fa-blogger-b"></i> Blog</li>
				<li><i class="fab fa-instagram"></i> Instagram</li>
			</ul>
		</div>
	</div>

	<img class="img-footer-sm" src="{{ asset('images/ESR-footer.png') }}" alt="ESR-footer">
	<img class="img-footer" src="{{ asset('images/QSStar-footer.png') }}" alt="QSStar-footer">
	<img class="img-footer" src="{{ asset('images/fimpes-footer.png') }}" alt="fimpes-footer">
	<img class="img-footer" src="{{ asset('images/ceneval-footer.png') }}" alt="ceneval-footer">
	<img class="img-footer-sm" src="{{ asset('images/IFC-footer.png') }}" alt="IFC-footer">
	<img class="img-footer-sm" src="{{ asset('images/RD-footer.png') }}" alt="RD-footer">

</div>

<div class="footer">
	<div class="row">
		<div class="col-md-12">
			<i class="far fa-copyright"></i> Esta página hace referencia al contenido oficial de la UVM. Realizada con fines educativos.<i class="far fa-copyright"></i>
		</div>
	</div>
</div>

@endsection