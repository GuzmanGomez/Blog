
<!DOCTYPE html>
<html class="no-js">
	<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title>ARQUITECTURA CLIENTE-SERVIDOR</title>
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta name="description" content="Free HTML5 Template by FREEHTML5.CO" />
	<meta name="keywords" content="free html5, free template, free bootstrap, html5, css3, mobile first, responsive" />
	<meta name="author" content="FREEHTML5.CO" />>
	<link rel="shortcut icon" href="favicon.ico">
	<link href='http://fonts.googleapis.com/css?family=Playfair+Display:400,700,400italic|Roboto:400,300,700' rel='stylesheet' type='text/css'>
	<!-- Animate -->
	<link rel="stylesheet" href="css/animate.css">
	<link rel="stylesheet" href="css/icomoon.css">
	<link rel="stylesheet" href="css/bootstrap.css">

	<link rel="stylesheet" href="css/style.css">
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
	<header id="fh5co-header">
		
		<div class="container-fluid">

			<div class="row">
				<div class="col-lg-12 col-md-12 text-center">
					<h1 id="fh5co-logo"> <a href="{{route('index')}}">SISTEMAS CON AQUITECTURA CLIENTE SERVIDOR</a></h1>
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
					<img src="images/s_cliente_servidor.png" alt="Image" class="img-responsive">
				</figure>
				<h2 class="fh5co-article-title animate-box"><a href="single.html">¿QUE ES?</a></h2>
				
				<div class="col-lg-12 col-lg-offset-0 col-md-12 col-md-offset-0 col-sm-12 col-sm-offset-0 col-xs-12 col-xs-offset-0 text-left content-article">
					<div class="row">
						<div class="col-lg-8 cp-r animate-box">
							<p><b>En la arquitectura cliente/servidor:</b><br>Los clientes (o programas que representan entidades que necesitan servicios) y los servidores (o programas que proporcionan servicios) son objetos separados desde un punto de vista lógico y que se comunican a través de una red de comunicaciones para realizar una o varias tareas de forma conjunta<br><br><b>Un cliente</b> hace una petición de un servicio y recibe la respuesta a dicha petición; un servidor recibe y procesa la petición, y devuelve la respuesta solicitada</p>
							<p>Características de la arquitectura cliente/servidor </p>
							<p>Protocolos asimétricos: hay una relación muchos a uno entre los clientes y unservidor. Los Clientes siempre inician un diálogo mediante la solicitud de un servicio. Los Servidores esperan pasivamente por las solicitudes de los clientes.</p>	
							<p>Encapsulación de servicios: El servidor es un especialista, cuando se le entrega un mensaje solicitando un servicio, él determina cómo conseguir hacer el trabajo. Los servidores se pueden actualizar sin afectar a los clientes en tanto que la interfaz pública de mensajes que se utilice por ambos lados, permanezca sin cambiar </p>
							<p>Integridad: el código y los datos de un servidor se mantienen centralizados, lo que origina que el mantenimiento sea más barato y la protección de la integridad de datos compartidos. Al mismo tiempo, los clientes mantienen su independencia y “personalidad”</p>
							</div>
						<div class="col-lg-4 animate-box">
							<div class="fh5co-highlight right">
								<p>• En una aplicación cliente/servidor tolerante a fallos, uno o más servidores pueden fallar sin parar el sistema total mientras que los servicios proporcionados por los servidores caídos estén disponibles en otros servidores activos</p>
							</div>
						</div>
					</div>
					<div class="row rp-b">
						<div class="col-md-12 animate-box">
							<blockquote>
								<p>&ldquo;El término Cliente/Servidor se ha asociado tradicionalmente con un PC deescritorio conectado a través de una red a algún tipo de servidor de basede datos<br> De hecho, el término Cliente/Servidor se refiere formalmente a un modelo lógico que proporciona una división de tareas dentro de las capas (o niveles) “cliente” y “servidor” &rdquo; <cite>&mdash;</cite></p>
							</blockquote>
						</div>
					</div>
				</div>
			</article>
		</div>
	</div>
	<script src="js/jquery.min.js"></script>
	<script src="js/jquery.easing.1.3.js"></script>
	<script src="js/bootstrap.min.js"></script>
	<script src="js/jquery.waypoints.min.js"></script>
	<script src="js/main.js"></script>

	</body>
</html>

