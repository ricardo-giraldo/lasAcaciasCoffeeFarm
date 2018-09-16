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

			<form class="form-group" method="POST" action="/productos/registrar">
				@csrf
				<h2>Registro de productos</h2>

				<label>Seleccione el tipo de producto:</label>
				<div class="form-group">
					<select class="form-group" name="tipo_producto">
						<option value="1">Café</option>
						<option value="2">Bebidas</option>
						<option value="3">Embotellados</option>
						<option value="4">Tortas</option>
					</select>
				</div>
				

				<label>Ingrese el nombre:</label>
				<div class="form-group">
					<input type="text" name="nombre" class="form-group">
				</div>
			
				<label>Ingrese el precio:</label>
				<div class="form-group">
					<input type="text" name="precio" class="form-group">
				</div>
				<button type="submit" class="btn btn-primary">Registrar producto</button>
				

			</form>

			<table class="tablaProductos">
					<thead>
						<th>Tipo de producto</th>
						<th>Producto</th>
						<th>Precio</th>
						<th>Cantidad</th>
						<th>Opciones</th>
					</thead>

					<tbody>
							@foreach($listadoProductos as $producto)
							<tr>
								<td>{{$producto->id_tipo_producto}}</td>
								<td>{{$producto->nombre}}</td>
								<td>{{$producto->precio}}</td>
								<td>{{$producto->cantidad}}</td>
								<td>
									<a href="/productos/editar/{{$producto->id}}" class="btn btn-warning">Editar</a>
									<a href="/productos/eliminar/{{$producto->id}}" class="btn btn-warning">Eliminar</a>
								</td>
							</tr>						
						@endforeach				
						
					</tbody>
						
				</table>

		</section>
		<section id="pantallaHospedaje", class="pantallaHospedajes">
			<form class="form-group" method="POST" action="/hospedajes/registrar">
			     @csrf
				<h1>Registro y gestión de hospedajes</h1>
				<label>Ingrese el nombre:</label>
					<div class="form-group">
						<input type="text" name="nombre" class="form-group">
					</div>
					<button type="submit" class="btn btn-primary">Registrar hospedaje</button>
     		</form>

				<table class="tablaProductos">
					<thead>
						<th>Nombre</th>
						<th>Opciones</th>
					</thead>

						<tbody>
														
							@foreach($listadoHospedajes as $hospedaje)
								<tr>
									<td>{{$hospedaje->nombre}}</td>
										<td>							
											<a href="/hospedajes/editar/{{$hospedaje->id}}" class="btn btn-warning">Editar</a>
											<a href="/hospedajes/eliminar/{{$hospedaje->id}}" class="btn btn-warning">Eliminar</a>
										</td>
								</tr>							
							@endforeach				
							
						</tbody>
							
				</table>

		</section>
		



		<section id="pantallaTiquete", class="pantallaTiquetes">
			
			<form class="form-group" method="POST" action="/tiquetes/registrar">
				@csrf
				<h1>Registro y gestión de tiquetes</h1>

				<label>Ingrese el número:</label>
				<div class="form-group">
					<input type="text" name="numero" class="form-group">
				</div>

				<label>Ingrese el precio:</label>
				<div class="form-group">
					<input type="text" name="precio" class="form-group">
				</div>

				<label>Seleccione hospedaje:</label>
				<select class="form-group" name="hospedaje">

					@foreach ($listadoHospedajes as $hospedaje)
						<option value="{{ $hospedaje['id'] }}">{{ $hospedaje['nombre'] }}</option>
					@endforeach	
				</select>
				<button type="submit" class="btn btn-primary">Registrar tiquete</button>
			</form>	
			<table class="tablaProductos">
					<thead>
						<th>Número</th>
						<th>Precio</th>
						<th>Hospedaje</th>
						
					</thead>

					<tbody>
							@foreach($listadoTiquetes as $tiquete)
							<tr>
								<td>{{$tiquete->numero}}</td>
								<td>{{$tiquete->precio}}</td>
								<td>{{$tiquete->id_hospedaje}}</td>
								<td>
									<a href="/tiquetes/editar/{{$tiquete->id}}" class="btn btn-warning">Editar</a>
									<a href="/tiquetes/eliminar/{{$tiquete->id}}" class="btn btn-warning">Eliminar</a>
								</td>
							</tr>						
						@endforeach				
						
					</tbody>
						
				</table>


		</section>	
			<section id="pantallaReporte", class="pantallaReportes">
			<h1>Reportes</h1>
		</section>
	</main>
</body>
</html>