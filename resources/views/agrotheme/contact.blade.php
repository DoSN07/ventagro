<!doctype html>
<!-- Website template by freewebsitetemplates.com -->
<html>
<head>
	@extends('Layouts.mainlayout')
</head>
<body>
	@section('content')
	<div id="page">

		<div id="body" class="contact">
			<div class="header">
				<div>
					<h1>Contacto</h1>
				</div>
			</div>
			<div class="body">
				<div>
					<div>
						<img src="images/check-in.png" alt="">
						<h1>Sede Central localizada en San José de Trojas Valverde Vega</h1>
						<p>Si tiene algún problema por favor contáctenos.</p>
					</div>
				</div>
			</div>
			<div class="footer">
				<div class="contact">
					<h1>Formulario</h1>
					<form action="index.html">
						<input type="text" name="Name" value="Nombre" onblur="this.value=!this.value?'Name':this.value;" onfocus="this.select()" onclick="this.value='';">
						<input type="text" name="Email" value="Correo" onblur="this.value=!this.value?'Email':this.value;" onfocus="this.select()" onclick="this.value='';">
						<input type="text" name="Subject" value="Tema" onblur="this.value=!this.value?'Subject':this.value;" onfocus="this.select()" onclick="this.value='';">
						<textarea name="meassage" cols="50" rows="7">Diganos que piensa</textarea>
						<input type="submit" value="Enviar" id="submit">
					</form>
				</div>
				<div class="section">
					<h1>Nos encataría saber de usted.</h1>
					<p>Si tiene algún problema por favor contáctenos.</p>
				</div>
			</div>
		</div>
	</div>
	@endsection
</body>
</html>
