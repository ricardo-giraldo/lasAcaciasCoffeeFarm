<!DOCTYPE html>
<html>
<head>
	<title>Editar producto</title>
</head>
<body>
	<center>
	<div  style="background: #E48B0D; margin: 10px; padding: 10px; border-radius: 10px; height: 200px; width: 600px;">
		
		<h2>Gestión de productos</h2>
		
		</br>
		
		<form class="form-group" method="PUT" action="/productos/actualizar/{{$producto->id}}">
			
			<table>

					<tr>
						<td><label>Producto:</label></td>
						<td><label>{{$producto->nombre}}</label></td>
					</tr>
					<tr>
						<td><label>Precio:</label></td>
						<td><input type="text" name="precio" class="form-group"></td>
					</tr>
					<tr>
						<td><label>Cantidad:</label></td>
						<td><input type="text" name="cantidad" class="form-group"></td>
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