
<!DOCTYPE html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7"> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8"> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9"> <![endif]-->
<!--[if gt IE 8]><!--> <html class="no-js"> <!--<![endif]-->
	<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title>DIAGRAMACION-ARQUITECTURA</title>
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta name="description" content="Free HTML5 Template by FREEHTML5.CO" />
	<meta name="keywords" content="free html5, free template, free bootstrap, html5, css3, mobile first, responsive" />
	<meta name="author" content="FREEHTML5.CO" />
  	<!-- Facebook and Twitter integration -->
	<meta property="og:title" content=""/>
	<meta property="og:image" content=""/>
	<meta property="og:url" content=""/>
	<meta property="og:site_name" content=""/>
	<meta property="og:description" content=""/>
	<meta name="twitter:title" content="" />
	<meta name="twitter:image" content="" />
	<meta name="twitter:url" content="" />
	<meta name="twitter:card" content="" />

	<!-- Place favicon.ico and apple-touch-icon.png in the root directory -->
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
	<!-- FOR IE9 below -->
	<!--[if lt IE 9]>
	<script src="js/respond.min.js"></script>
	<![endif]-->

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
					<h1 id="fh5co-logo"><a href="{{route('index')}}">vDIAGRAMACION DE COMPONENTES DE ARQUITECTURA CLIENTE SERVIDOR</a></h1>
				</div>

			</div>
		
		</div>

	</header>
	<a href="{{route('index')}}" class="fh5co-post-prev"><span><i class="icon-chevron-left"></i> ANTERIOR</span></a>
	<!-- END #fh5co-header -->
	<div class="container-fluid">
		<div class="row fh5co-post-entry single-entry">
			<article class="col-lg-8 col-lg-offset-2 col-md-8 col-md-offset-2 col-sm-8 col-sm-offset-2 col-xs-12 col-xs-offset-0">
				<figure class="animate-box">
					<img src="images/diagrama-cliente-servidor.webp" alt="Image" class="img-responsive">
				</figure>
				<h2 class="fh5co-article-title animate-box"><a href="single.html">CLIENTE-SERVIDOR</a></h2>
				
				<div class="col-lg-12 col-lg-offset-0 col-md-12 col-md-offset-0 col-sm-12 col-sm-offset-0 col-xs-12 col-xs-offset-0 text-left content-article">
					<div class="row">
						<div class="col-lg-8 cp-r animate-box">
							<p><b>La aplicación cliente/servidor está dividido en dos capas.</b></p>
							<p>Vista de procesos: El cliente realiza una petición conocida como request para que consuma un servicio o un recurso, y el servidor devuelve una respuesta (response) en donde provee dicho servicio o recurso. En la vista de procesos, un usuario para acceder a la biblioteca debe utilizar su usuario y contraseña, en caso de no tenerlas, debe registrarse. Una vez que haya ingresado podrá reproducir la música, subir canciones o actualizar su lista con la de la biblioteca pública</p>
							<p>Vista de despliegue: Para establecer una comunicación entre cliente/servidor, se utiliza Socket de las librerías de java (canal de comunicación) para que exista una conexión y un flujo de información, que se encuentra en las librerías de los lenguajes de programación y mediante los protocolos de red, se programa las aplicaciones (cliente, servidor).</p>
                            <p>Las limitaciones que presenta esta arquitectura es la congestión del tráfico de datos debido a que cuando acceden varios clientes, realizan varias peticiones simultáneas, lo cual conlleva hacer caer al servidor y por ende a no dar respuesta a las peticiones. Los clientes dependen de un servidor que se encuentra en un solo equipo, si este deja de funcionar todos los usuarios se ven afectado.</p>
							</div>
						<div class="col-lg-4 animate-box">
							<div class="fh5co-highlight right">
								<h4>Highlight</h4>
								<p>El estilo arquitectónico de cliente/servidor describe los sistemas que comprenden a un cliente independiente y a un sistema de servidor, que se comunica mediante una red de conexión distribuida. Uno o varios clientes acceden a un servidor, el cual contiene gran parte de la lógica de negocio, que a su vez este accede a la base de datos para consultar y devolver información.</p>
							</div>
						</div>
					</div>
					<div class="row rp-b">
						<div class="col-md-12 animate-box">
							<blockquote>
								<p>&ldquo;Al momento de que varios clientes realizan peticiones simultáneas, el servidor responde a dichas peticiones de forma paralela. Como la aplicación tiene un solo servidor, los procesos se intercalan para que se ejecuten simultáneamente. &rdquo; <cite>&mdash;</cite></p>
							</blockquote>
						</div>
					</div>
					<div class="row rp-b">
						<div class="col-lg-6 col-md-12 animate-box">
							<figure>
								<img src="images/C_s.gif"  class="img-responsive">
								<p>Si se tiene varias peticiones de recursos, y se desea intercambiar información, esto implica el intercambio de datos por medio de un canal de comunicación y se consigue de que la ejecución de un proceso influya en la ejecución de otro.</p>
							</figure>
						
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

