
<!DOCTYPE html>
 <html class="no-js"> 
	<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title>PROTOCOLOS DE COMUNICACION EN RED</title>
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta name="description" content="Free HTML5 Template by FREEHTML5.CO" />
	<meta name="keywords" content="free html5, free template, free bootstrap, html5, css3, mobile first, responsive" />
	<meta name="author" content="FREEHTML5.CO" />
	<link rel="shortcut icon" href="favicon.ico">
	<!-- Google Fonts -->
	<link href='http://fonts.googleapis.com/css?family=Playfair+Display:400,700,400italic|Roboto:400,300,700' rel='stylesheet' type='text/css'>
	<!-- Animate -->
	<link rel="stylesheet" href="css/animate.css">
	<!-- Icomoon -->
	<link rel="stylesheet" href="css/icomoon.css">
	<!-- Bootstrap  -->
	<link rel="stylesheet" href="css/bootstrap.css">

	<link rel="stylesheet" href="css/style.css">


	<!-- Modernizr JS -->
	<script src="js/modernizr-2.6.2.min.js"></script>
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
	<!-- END #fh5co-offcanvas -->
	<header id="fh5co-header">
		<div class="container-fluid">
			<div class="row">
				<div class="col-lg-12 col-md-12 text-center">
					<h1 id="fh5co-logo"><a href="{{route('index')}}">PROTOCOLOS DE COMUNICACION EN RED</a></h1>
				</div>
			</div>
		</div>
	</header>
	<a href="{{route('index')}}" class="fh5co-post-prev"><span><i class="icon-chevron-left"></i> ANTERIOR</span></a>
	<!-- END #fh5co-header -->
	<div class="container-fluid">
		<div class="row fh5co-post-entry single-entry">
			<article class="col-lg-8 col-lg-offset-2 col-md-8 col-md-offset-2 col-sm-8 col-sm-offset-2 col-xs-12 col-xs-offset-0">
				<h2 class="fh5co-article-title animate-box"><a href="single.html">¡Qué son y cuáles son?</a></h2>
					<div class="row rp-b">
						<div class="col-lg-6 col-md-12 animate-box">
							<figure>
								<img src="images/niveles_red.png" alt="Free HTML5 Bootstrap Template by FREEHTML5.co" class="img-responsive">
							</figure>
						</div>
						<div class="col-lg-6 col-md-12 cp-l animate-box">
							<p>La arquitectura TCP/IP está compuesta por una serie de capas o niveles en los que se encuentran los protocolos que implementan las funciones necesarias para la comunicación entre dos dispositivos en red. Esta arquitectura es independiente del modelo teórico OSI, aunque tiene muchas similitudes (ambos modelo se basan en capas o niveles). Se puede afirmar que el modelo OSI es el empleado en el estudio de las redes de datos mientras que el modelo o arquitectura TCP/IP es un modelo real empleado es las redes actuales.<br>En la siguiente figura se aprecian los niveles o capas de los modelos OSI y TCP/IP</p>
						</div>
					</div>
					<div >
							<p>Protocolo IP<br>
								El protocolo IP y sus protocolos de enrutamiento asociados son posiblemente la parte más significativa del conjunto TCP/IP. El protocolo IP se encarga de:<br>
								Direcciones IP: Las convenciones de direcciones IP forman parte del protocolo IP. Se corresponde con la identificación de equipos en la red. Las direcciones IP cambian en función de la red en la que está presente el dispositivo. Las direcciones IP identifican equipos en la conexión extremo a extremo. Actualmente se emplean direcciones de versión 4 (32 bits) y versión 6 (128 bits).<br>
								Encaminamiento: El protocolo IP determina la ruta que debe utilizar un paquete, basándose en la dirección IP del destinatario.<br>
								Formato de paquetes: el protocolo IP agrupa paquetes en unidades conocidas como datagramas. Los datagramas viajaran entre el origen y destino IP dentro de las tramas de datos.<br>
								Fragmentación: Si un paquete es demasiado grande para su transmisión a través del medio de red, el protocolo IP del sistema de envío divide el paquete en fragmentos de menor tamaño. Cuando los fragmentos llegan al receptor, el protocolo IP del sistema receptor reconstruye los fragmentos y crea el paquete original.</p><br>		
					</div>
					<div class="row">
						<div class="col-md-12 animate-box">
							<h2>FProtocolo TCP</h2>
							<p>TCP permite a las aplicaciones comunicarse entre sí como si estuvieran conectadas físicamente. TCP envía los datos en un formato que se transmite carácter por carácter, en lugar de transmitirse por paquetes discretos. Esta transmisión consiste en establecer una conexión y un control de la llegada de los datos. Cuando todo ha sido enviado exitosamente se procede al cierre de la conexión. El protocolo de transporte denomina a su estructura de datos como segmento.</p>
						</div>
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

