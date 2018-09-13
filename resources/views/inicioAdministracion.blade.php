<!DOCTYPE html>
<html>
<head>
	<title>Administraci&oacute;n</title>

	<script type="text/javascript">
		
		function clicPantallaProductos(){

			document.getElementById('pantallaProductos').style.display = 'block';
			document.getElementById('pantallaHospedajes').style.display = 'none';
			document.getElementById('pantallaTiquetes').style.display = 'none';
			document.getElementById('pantallaReportes').style.display = 'none';

		}

		function clicPantallaHospedajes(){

			document.getElementById('pantallaProductos').style.display = 'none';
			document.getElementById('pantallaHospedajes').style.display = 'block';
			document.getElementById('pantallaTiquetes').style.display = 'none';
			document.getElementById('pantallaReportes').style.display = 'none';

		}

		function clicPantallaTiquetes(){

			document.getElementById('pantallaProductos').style.display = 'none';
			document.getElementById('pantallaHospedajes').style.display = 'none';
			document.getElementById('pantallaTiquetes').style.display = 'block';
			document.getElementById('pantallaReportes').style.display = 'none';
		}

		function clicPantallaReportes(){

			document.getElementById('pantallaProductos').style.display = 'none';
			document.getElementById('pantallaHospedajes').style.display = 'none';
			document.getElementById('pantallaTiquetes').style.display = 'none';
			document.getElementById('pantallaReportes').style.display = 'block';

		}

	</script>

</head>
<body>
	<h1>M&oacute;dulo de administraci&oacute;n</h1>
	<header>
		<div class="contenedor">
			<!--Menú de opciones disponibles para el administrador-->
			<nav class="menu">
				<a href="#pantallaProductos" onclick="clicPantallaProductos()">Productos</a>
				<a href="#pantallaHospedajes" onclick="clicPantallaHospedajes()">Hospedajes</a>
				<a href="#pantallaTiquetes" onclick="clicPantallaTiquetes()">Tiquetes</a>
				<a href="#pantallaReportes" onclick="clicPantallaReportes()">Reportes</a>
				<a href="/" onclick="clicSalir()">Salir</a>
			</nav>
		</div>
	</header>
	<main>
		<section id="pantallaProducto", class="pantallaProductos">

			{!!Form::open(['route'=>'inicioSesion.store', 'method'=>'POST'])!!}

				<h2>Registro de productos</h2>

				<label>Seleccione el tipo de producto:</label>
				<div class="form-group">
					{!!Form::select('Tipo de producto', ['1' => 'Café', '2' => 'Bebidas', '3' => 'Embotellados', '4' => 'Tortas'])!!}
				</div>

				<label>Ingrese el nombre:</label>
				<div class="form-group">
					{!!Form::text('nombre',null,['class'=>'form-control', 'placeholder'=>'nombre'])!!}
				</div>
			
				<label>Ingrese el precio:</label>
				<div class="form-group">
					{!!Form::text('precio',null,['class'=>'form-control', 'placeholder'=>'precio'])!!}
				</div>

				{!!Form::submit('Registrar producto',['class'=>'btn btn-primary'])!!}

			{!!Form::close()!!}

			<table class="tablaProductos">
					<thead>
						<th>Tipo de producto</th>
						<th>Producto</th>
						<th>Precio</th>
						<th>Cantidad</th>
						<th>Opciones</th>
					</thead>

					<tbody>
						
							<tr>
								<td>Café</td>
								<td>Café molido de 250 g</td>
								<td>$10.000</td>
								<td>30</td>
								<td>
									<a href="#" class="btn btn-warning">Editar</a>
									<a href="#" class="btn btn-warning">Eliminar</a>
								</td>
							</tr>						
						
					</tbody>
						
				</table>

		</section>
		<section id="pantallaHospedaje", class="pantallaHospedajes">
			<h1>Registro y gestión de hospedajes</h1>
			<h1></h1>
		</section>
		<section id="pantallaTiquete", class="pantallaTiquetes">
			<h1>Registro y gestión de tiquetes</h1>
		</section>
		<section id="pantallaReporte", class="pantallaReportes">
			<h1>Reportes</h1>
		</section>
	</main>
</body>
</html>