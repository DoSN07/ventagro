<html>
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>VentAgro</title>
	<link rel="stylesheet" href="theme-css/style.css" type="text/css">
	<link rel="stylesheet" type="text/css" href="theme-css/mobile.css">
	<script src="theme-js/mobile.js" type="text/javascript"></script>
</head>
<body>
	<div id="page">
		<div id="header">
			<div>
			    <!--<img src="theme-images/mango.jpg" alt="">-->
				<a href="index.php" class="logo"><h1 style="color:green;">VentAgro</h1></a>
				<ul id="navigation">
					<li class="selected">
						<a href="index.php">Inicio</a>
					</li>
					<li class="menu">
						<a href="productos">Productos</a>
					</li>

					<li>
						<a href="contacto">Contacto</a>
					</li>
				</ul>
			</div>
		</div>
		<div id="main">
            <div id="content">
                @yield('content')
            </div>
        </div><!-- #main -->
		<div id="footer">
			<div>
				<div class="connect">
					<a href="http://freewebsitetemplates.com/go/facebook/" class="facebook">facebook</a>
					<a href="http://freewebsitetemplates.com/go/twitter/" class="twitter">twitter</a>
					<a href="http://freewebsitetemplates.com/go/googleplus/" class="googleplus">googleplus</a>
					<a href="http://pinterest.com/fwtemplates/" class="pinterest">pinterest</a>
				</div>
				<p>&copy; 2018 VentaAgro. Todos los derechos reservados.</p>
			</div>
		</div>
	</div>
	</html>