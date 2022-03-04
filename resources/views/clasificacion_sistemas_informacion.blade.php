
<!DOCTYPE html>
<html class="no-js"> 
	<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title>CLASIFICACION POR ARQUITECTURA</title>
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta name="description" content="Free HTML5 Template by FREEHTML5.CO" />
	<meta name="keywords" content="free html5, free template, free bootstrap, html5, css3, mobile first, responsive" />
	<meta name="author" content="FREEHTML5.CO" />
	<link rel="shortcut icon" href="favicon.ico">
	<link href='http://fonts.googleapis.com/css?family=Playfair+Display:400,700,400italic|Roboto:400,300,700' rel='stylesheet' type='text/css'>
	<link rel="stylesheet" href="css/animate.css">
	<link rel="stylesheet" href="css/icomoon.css">
	<link rel="stylesheet" href="css/bootstrap.css">

	<link rel="stylesheet" href="css/style.css">
	</head>
	<body>
	<div id="fh5co-offcanvas">
		<a href="#" class="fh5co-close-offcanvas js-fh5co-close-offcanvas"><span><i class="icon-cross3"></i> <span>Close</span></span></a>
		<div class="fh5co-bio">
		</div>
			<div class="fh5co-box">
				<h3 class="heading">Search</h3>
				<form action="#">
					<div class="form-group">
						<input type="text" class="form-control" placeholder="Type a keyword">
					</div>
				</form>
			</div>
		</div>
	</div>
	<header id="fh5co-header">
		<div class="container-fluid">

			<div class="row">
				<div class="col-lg-12 col-md-12 text-center">
					<h1 id="fh5co-logo"><a href="{{route('index')}}">CLASIFICACION DE SISTEMAS DE INFORMACION POR ARQUITECTURA</a></h1>
				</div>
			</div>
		</div>
	</header>
	<a href="{{route('index')}}"><span><i class="icon-chevron-left"></i> ANTERIOR</span></a>
	<!-- END #fh5co-header -->
	<div class="container-fluid">
		<div class="row fh5co-post-entry single-entry">
			<article class="col-lg-8 col-lg-offset-2 col-md-8 col-md-offset-2 col-sm-8 col-sm-offset-2 col-xs-12 col-xs-offset-0">
				<figure class="animate-box">
					<img src="images/clasificacion_arquitectura.jpg" width="3000" height="4000" class="img-responsive">
				

					<div class="row">
						<div class="col-md-12 animate-box">
							<h2>CLASIFICACION SEGUN TIPO DE ARQUITECTURA</h2>
							<p>Los sistemas de dos niveles: archivo — servidor.<br> Las funciones de servidor en este caso se limitan habitualmente por el almacenamiento de datos (es posible también el almacenamiento de archivos ejecutados), y el procesamiento de datos tiene lugar solamente de parte de cliente. El número de clientes está limitado a causa de imposibilidad de acceso simultáneo para grabar un archivo. Las fallas principales de tal sistema son: la ausencia de integridad garantizada de la base de datos, el bajo nivel de protección, la baja productividad del sistema.</p>
						    <p>Los sistemas de dos niveles: cliente — servidor<br> Donde todos los cálculos se realizan en el servidor con los medios del Sistema de Gestión de Bases de Datos bajo la protección del sistema operativo del servidor. Las fallas principales de tal tipo son la velocidad insuficiente de funcionamiento y la incapacidad de realizar los algoritmos complejos de cálculo. Aquí también es necesario señalar númerosas decisiones donde el sistema en la realidad funciona como archivo — servidor a pesar de uso de los medios instrumentales cliente — servidor con todas las consecuencias negativas derivadas. Tal decisión se crea por lo habitual a causa de dificultad de realizar los algoritmos complejos de cálculo con los medios del Sistema de Gestión de Bases de Datos de servidor y de transferir los cálculos al puesto de trabajo del cliente.</p>
                            <p>Los sistemas de muchos niveles: <br> Donde las funciones de procesamiento de datos son pasados a uno o varios servidores especiales, lo que permite dividir las funciones de almacenamiento, de procesamiento y de presentación de datos para el uso más efectivo. En dicha etapa las realizaciones de tal clase son más convenientes para la realización de funcionalidad requerida.</p>
							<img src="images/clasificacion_aquitectura1.jpg" width="3000" height="4000" class="img-responsive">
						</div>
					</div>
				
			</article>
			
		</div>
	</div>
	<!-- jQuery -->
	<script src="js/jquery.min.js"></script>
	<!-- jQuery Easing -->
	<script src="js/jquery.easing.1.3.js"></script>
	<!-- Bootstrap -->
	<script src="js/bootstrap.min.js"></script>
	<!-- Waypoints -->
	<script src="js/jquery.waypoints.min.js"></script>
	<!-- Main JS -->
	<script src="js/main.js"></script>

	</body>
</html>

