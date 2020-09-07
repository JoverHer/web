<!DOCTYPE html>
<html>
<head>
	<title> @yield('titulo') </title>
</head>
<body>

	<nav>
		<ul>
			<li> <a href="/">Inicio</li>
			<li> <a href="/productos">Productos</li>
			<li> <a href="/servicios">Servicios</li>
			<li> <a href="/contacto">Contacto</li>	
		</ul>
		
	</nav>

	@yield('contenido')

</body>
</html>