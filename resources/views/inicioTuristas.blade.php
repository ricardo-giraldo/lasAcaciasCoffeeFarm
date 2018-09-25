<!DOCTYPE html>
<html>
<head>
	<title>Las Acacias Coffee Farm</title>
</head>
<body>
	<a id="2" class="nav-link" href="#pantallaPublicaciones" style="font-size: 18px;">
		<p><i class="fa fa-hotel"></i> Información</p>
	</a>
	<a id="2" class="nav-link" href="#pantallaComentarios" style="font-size: 18px;">
		<p><i class="fa fa-hotel"></i> Dejar un comentario</p>
	</a>

	<section id="pantallaPublicaciones">
		@foreach($listadoPublicaciones as $publicacion)
			<h2>{{$publicacion->titulo}}</h2>
			<h5>Creado el: {{$publicacion->created_at}}</h5>
			<p>{{$publicacion->texto}}</p>
		@endforeach
	</section>

	<section id="pantallaComentarios">
		<h2>Por favor deje un comentario</h2>
				
			<div class="text-center">
				<form class="form-group" method="POST" action="/comentarios/registrar">
				    @csrf
					<div class="wrapper-form form-h">
						<label>Ingrese su nombre:</label>
						<div class="form-group">
							<input type="text" name="nombre_turista" class="form-group" style="width: 300px">
						</div>
						<label>Comentario:</label>
						<div class="form-group">
							<textarea name="texto"></textarea>
						</div>
						<button type="submit" class="btn btn-primary">Registrar comentario</button>
					</div>
				</form>
	</section>
</body>
</html>
