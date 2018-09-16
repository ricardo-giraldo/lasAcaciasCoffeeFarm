<!DOCTYPE html>
<html>
<head>
	<title>Editar hospedaje</title>
</head>
<body>
	<center>
	<div  style="background: #E48B0D; margin: 10px; padding: 10px; border-radius: 10px; height: 200px; width: 600px;">
		
		<h2>Gestión de hospedaje</h2>
		
		</br>
		
		<form class="form-group" method="PUT" action="/hospedajes/actualizar/{{$hospedaje->id}}">
			
			<table>

					<tr>
						<td><label>hospedaje:</label></td>
						<td><label>{{$hospedaje->nombre}}</label>
							<td><label>nombre:</label></td>
						<td><input type="text" name="nombre" class="form-group"></td></td>
					</tr>
					<tr>
						<td>{!!Form::submit('Actualizar',['class'=>'btn btn-primary'])!!}</td>
					</tr>
			
			</table>
	</form>
</div>
	
</center>
</body>
</html>