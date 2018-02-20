<!doctype html>
<!-- Website template by freewebsitetemplates.com -->
<html>
<head>
     @extends('Layouts.mainlayout')
</head>
<body>
	@section('content')
		<div id="body" class="home">
			<div class="header" style="background-color:white;">
				<img src="theme-images/vegetables.jpg" alt="" >
				<div>
					
				</div>
			</div>
			<div class="body">
				<div>
					<div>
						<h1>¡Visitenos!</h1>
						<h2>Contamos con gran variedad de productos</h2>
						<p>VentaAgro pretende causar en sus clientes un sentimiento de satisfacción al poder comprar y también vender sus productos.</p>
					</div>
					<img src="theme-images/yogurt.jpg" alt="">
				</div>
			</div>
			<div class="footer">
				<div>
					<ul>
						<li>
							<a href="productos" class="product"></a>
							<h1>PRODUCTOS</h1>
						</li>
						<li>
							<a href="about.html" class="about"></a>
							<h1>Historia</h1>
						</li>
						<li>
							<a href="product.html" class="flavor"></a>
							<h1>Acerca</h1>
						</li>
						<li>
							<a href="contacto" class="contact"></a>
							<h1>Contacto</h1>
						</li>
					</ul>
				</div>
			</div>
		</div>
		@endsection
</body>
</html>
