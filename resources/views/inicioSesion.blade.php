<!DOCTYPE html>
<html>
<head>
	<title>Inicio de sesi&oacute;n</title>
</head>
<body>
	{!!Form::open(['route'=>'inicioSesion.store', 'method'=>'POST'])!!}

			<h2>Iniciar sesi&oacute;n en Las Acacias Coffee Farm</h2>

			<label>Ingrese su nombre de usuario:</label>
			<div class="form-group">
				{!!Form::text('email',null,['class'=>'form-control', 'placeholder'=>'usuario'])!!}
				
			</div>
			
			<label>Ingrese su contrase&ntilde;a:</label>
			<div class="form-group">
				{!!Form::password('password',['class'=>'form-control', 'placeholder'=>'contraseña'])!!}
			</div>
			{!!Form::submit('Iniciar sesion',['class'=>'btn btn-primary'])!!}

	{!!Form::close()!!}
</body>
</html>