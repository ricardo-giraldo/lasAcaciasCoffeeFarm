<!DOCTYPE html>
<html>
<head>
	<title>Administraci&oacute;n</title>
	<link href="{{ asset('css/inicioAdministracion.css') }}" rel="stylesheet">
	<link href="{{ asset('css/app.css') }}" rel="stylesheet">
	<script src="{{ asset('js/app.js') }}"></script>
	<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.3.1/css/all.css" integrity="sha384-mzrmE5qonljUremFsqc01SB46JvROS7bZs3IO2EmfFsd15uHvIt+Y8vEf7N7fWAU" crossorigin="anonymous">
</head>
<body>
	<header style="border-bottom: 1px #343a40 solid;">
		<nav class="navbar fixed-top bg-dark">
			<h1 class="navbar-brand mr-1" style="color: white; font-size: 25px; margin: 0;"><i class="fa fa-user"></i> M&oacute;dulo de administraci&oacute;n</h1>
			<a href="/" onclick="clicSalir()" class="float-right mt-1" style="font-size: 25px"><span class="fa fa-power-off"></span></a>	
		</nav>
	</header>

	<div class="row pt-5 mt-3">
		<div class="col-md-2 bg-dark" style="min-height: 35rem !important;">
			<ul class="nav navbar flex-column mt-3 text-center">
				<li class="nav-item">
					<a id="1" class="nav-link" href="#pantallaProductos" style="font-size: 18px;">	
						<p><i class="fa fa-clipboard-list"></i> Productos</p>
					</a>
				</li>
				<li class="nav-item">
					<a id="2" class="nav-link" href="#pantallaHospedajes" style="font-size: 18px;">
						<p><i class="fa fa-hotel"></i> Hospedajes</p>
					</a>
				</li>
				<li class="nav-item">
					
					<a id="3" class="nav-link" href="#pantallaTiquetes" style="font-size: 18px;">
						<p><i class="fa fa-ticket-alt"></i> Tiquetes</p>
					</a>
				</li>
				<li class="nav-item">
					<a id="4" class="nav-link" href="#pantallaReportes" style="font-size: 18px;">
						<p><i class="fa fa-file-alt"></i> Reportes</p>
					</a>
				</li>	
				<li class="nav-item">
					<a id="5" class="nav-link" href="#pantallaPublicaciones" style="font-size: 18px;">
						<p><i class="fa fa-file-alt"></i> Publicaciones</p>
					</a>
				</li>
				<li class="nav-item">
					<a id="6" class="nav-link" href="#pantallaComentarios" style="font-size: 18px;">
						<p><i class="fa fa-file-alt"></i> Comentarios</p>
					</a>
				</li>							
			</ul>
		</div>
		<main class="col colmd mt-2">

			<section id="pantallaProducto">
				<h2>Registro y gestión de productos</h2>
				<div class="text-center">
					<form class="form-group" method="POST" action="/productos/registrar">
						@csrf
						<div class="wrapper-form form-p" style="">
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
						</div>
					</form>
					<table class="table mt-5">
						<thead class="thead-light">
							<th scope="col">Tipo de producto</th>
							<th scope="col">Producto</th>
							<th scope="col">Precio</th>
							<th scope="col">Cantidad</th>
							<th scope="col">Opciones</th>
						</thead>
						<tbody>
								@foreach($listadoProductos as $producto)
								<tr scope="row">
									<td>{{$producto->id_tipo_producto}}</td>
									<td>{{$producto->nombre}}</td>
									<td>{{$producto->precio}}</td>
									<td>{{$producto->cantidad}}</td>
									<td>
										<a href="/productos/editar/{{$producto->id}}" class="btn btn-warning">Editar</a>
										<a href="/productos/eliminar/{{$producto->id}}" class="btn btn-danger">Eliminar</a>
									</td>
								</tr>						
							@endforeach											
						</tbody>							
					</table>		
				</div>
				
			</section>

			<section id="pantallaHospedaje">
				<h2>Registro y gestión de hospedajes</h2>
				
					
				<div class="text-center">
					<form class="form-group" method="POST" action="/hospedajes/registrar">
				     @csrf
						<div class="wrapper-form form-h">
							<label>Ingrese el nombre:</label>
							<div class="form-group">
								<input type="text" name="nombre" class="form-group" style="width: 300px">
							</div>
							<button type="submit" class="btn btn-primary">Registrar hospedaje</button>
						</div>
					</form>
					<table class="table mt-5">
						<thead class="thead-light">
							<th scope="col">Nombre</th>
							<th scope="col">Opciones</th>
						</thead>
						<tbody>															
							@foreach($listadoHospedajes as $hospedaje)
								<tr scope="row">
									<td>{{$hospedaje->nombre}}</td>
									<td>							
										<a href="/hospedajes/editar/{{$hospedaje->id}}" class="btn btn-warning">Editar</a>
										<a href="/hospedajes/eliminar/{{$hospedaje->id}}" class="btn btn-danger">Eliminar</a>
									</td>
								</tr>							
							@endforeach												
						</tbody>								
					</table>	
				</div>
			</section>
			



			<section id="pantallaTiquete">
				<h2>Registro y gestión de tiquetes</h2>
				<div class="text-center">
					<div class="wrapper-form form-t">
						<form class="form-group" method="POST" action="/tiquetes/registrar">
							@csrf
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
					</div>
					<table class="table mt-5">
						<thead class="thead-light">
							<th scope="col">Número</th>
							<th scope="col">Precio</th>
							<th scope="col">Hospedaje</th>
							<th scope="col">Opciones</th>
						</thead>
						<tbody>
								@foreach($listadoTiquetes as $tiquete)
								<tr scope="row">
									<td>{{$tiquete->numero}}</td>
									<td>{{$tiquete->precio}}</td>
									<td>{{$tiquete->id_hospedaje}}</td>
									<td>
										<a href="/tiquetes/editar/{{$tiquete->id}}" class="btn btn-warning">Editar</a>
										<a href="/tiquetes/eliminar/{{$tiquete->id}}" class="btn btn-danger">Eliminar</a>
									</td>
								</tr>						
							@endforeach				
						</tbody>	
					</table>
				</div>
			</section>	
			<section id="pantallaReporte">
				<h1>Reportes</h1>
			</section>
			<section id="pantallaPublicaciones">
				<h1>Registro y gestión de publicaciones</h1>
				<form class="form-group" method="POST" action="/publicaciones/registrar">
					@csrf
					<div class="wrapper-form form-p" style="">
						<label>Título:</label>
						<div class="form-group">
							<input type="text" name="titulo" class="form-group">
						</div>
						<label>Resumen:</label>
						<div class="form-group">
							<input type="text" name="resumen" class="form-group">
						</div>
						<label>Texto:</label>
						<div class="form-group">
							<textarea name="texto"></textarea> 
						</div>
						<button type="submit" class="btn btn-primary">Registrar publicacion</button>	
					</div>
				</form>
				<table class="table mt-5">
					<thead class="thead-light">
						<th scope="col">Título</th>
						<th scope="col">Resumen</th>
						<th scope="col">Opciones</th>
					</thead>
					<tbody>
						@foreach($listadoPublicaciones as $publicacion)
							<tr scope="row">
								<td>{{$publicacion->titulo}}</td>
								<td>{{$publicacion->resumen}}</td>
								<td>
									<a href="/publicaciones/editar/{{$publicacion->id}}" class="btn btn-warning">Editar</a>
									<a href="/publicaciones/eliminar/{{$publicacion->id}}" class="btn btn-danger">Eliminar</a>
								</td>
							</tr>						
						@endforeach											
					</tbody>							
				</table>
			</section>
			<section id="pantallaComentarios">
				<h1>Comentarios</h1>
				<table class="table mt-5">
					<thead class="thead-light">
						<th scope="col">Turista</th>
						<th scope="col">Comentario</th>
						<th scope="col">Opciones</th>
					</thead>
					<tbody>
						@foreach($listadoComentarios as $comentario)
							<tr scope="row">
								<td>{{$comentario->nombre_turista}}</td>
								<td>{{$comentario->texto}}</td>
								<td>
									<a href="/comentarios/eliminar/{{$comentario->id}}" class="btn btn-danger">Eliminar</a>
								</td>
							</tr>						
						@endforeach											
					</tbody>							
				</table>
			</section>
		</main>	
	</div>
	<script src="{{ asset('js/jquery-3.3.1.min.js') }}"></script>
	<script type="text/javascript">
		$( document ).ready( function(){
			$("#1").click(function(){
				$( "#1" ).attr( "class", "nav-link active" );
				$( "#2" ).attr( "class", "nav-link" );
				$( "#3" ).attr( "class", "nav-link" );
				$( "#4" ).attr( "class", "nav-link" );
				$( "#5" ).attr( "class", "nav-link" );
				$( "#6" ).attr( "class", "nav-link" );
				$("#pantallaProducto").css("display", "block");
				$("#pantallaHospedaje").css("display", "none");
				$("#pantallaTiquete").css("display", "none");
				$("#pantallaReporte").css("display", "none");
				$("#pantallaPublicaciones").css("display", "none");
				$("#pantallaComentarios").css("display", "none");
			});
			$("#2").click(function(){
				$( "#1" ).attr( "class", "nav-link " );
				$( "#2" ).attr( "class", "nav-link active" );
				$( "#3" ).attr( "class", "nav-link" );
				$( "#4" ).attr( "class", "nav-link" );
				$( "#5" ).attr( "class", "nav-link" );
				$( "#6" ).attr( "class", "nav-link" );
				$("#pantallaHospedaje").css("display", "block");
				$("#pantallaProducto").css("display", "none");
				$("#pantallaTiquete").css("display", "none");
				$("#pantallaReporte").css("display", "none");
				$("#pantallaPublicaciones").css("display", "none");
				$("#pantallaComentarios").css("display", "none");
			});
			$("#3").click(function(){
				$( "#1" ).attr( "class", "nav-link " );
				$( "#2" ).attr( "class", "nav-link" );
				$( "#3" ).attr( "class", "nav-link active" );
				$( "#4" ).attr( "class", "nav-link" );
				$( "#5" ).attr( "class", "nav-link" );
				$( "#6" ).attr( "class", "nav-link" );
				$("#pantallaTiquete").css("display", "block");
				$("#pantallaProducto").css("display", "none");
				$("#pantallaHospedaje").css("display", "none");
				$("#pantallaReporte").css("display", "none");
				$("#pantallaPublicaciones").css("display", "none");
				$("#pantallaComentarios").css("display", "none");
			});
			$("#4").click(function(){
				$( "#1" ).attr( "class", "nav-link " );
				$( "#2" ).attr( "class", "nav-link" );
				$( "#3" ).attr( "class", "nav-link" );
				$( "#4" ).attr( "class", "nav-link active" );
				$( "#5" ).attr( "class", "nav-link" );
				$( "#6" ).attr( "class", "nav-link" );
				$("#pantallaReporte").css("display", "block");
				$("#pantallaHospedaje").css("display", "none");
				$("#pantallaTiquete").css("display", "none");
				$("#pantallaProducto").css("display", "none");
				$("#pantallaPublicaciones").css("display", "none");
				$("#pantallaComentarios").css("display", "none");
			});
			$("#5").click(function(){
				$( "#1" ).attr( "class", "nav-link " );
				$( "#2" ).attr( "class", "nav-link" );
				$( "#3" ).attr( "class", "nav-link" );
				$( "#4" ).attr( "class", "nav-link" );
				$( "#5" ).attr( "class", "nav-link active" );
				$( "#6" ).attr( "class", "nav-link" );
				$("#pantallaReporte").css("display", "none");
				$("#pantallaHospedaje").css("display", "none");
				$("#pantallaTiquete").css("display", "none");
				$("#pantallaProducto").css("display", "none");
				$("#pantallaPublicaciones").css("display", "block");
				$("#pantallaComentarios").css("display", "none");
			});
			$("#6").click(function(){
				$( "#1" ).attr( "class", "nav-link " );
				$( "#2" ).attr( "class", "nav-link" );
				$( "#3" ).attr( "class", "nav-link" );
				$( "#4" ).attr( "class", "nav-link" );
				$( "#5" ).attr( "class", "nav-link" );
				$( "#6" ).attr( "class", "nav-link active" );
				$("#pantallaReporte").css("display", "none");
				$("#pantallaHospedaje").css("display", "none");
				$("#pantallaTiquete").css("display", "none");
				$("#pantallaProducto").css("display", "none");
				$("#pantallaPublicaciones").css("display", "none");
				$("#pantallaComentarios").css("display", "block");
			});

		} );
	</script>
</body>
</html>