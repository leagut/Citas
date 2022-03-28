<?php
	include 'model/conexion.php';
	$sentencia = $bd->query("SELECT * FROM empleados;");
	$empleado = $sentencia->fetchAll(PDO::FETCH_OBJ);
	//print_r($empleado);
?>

<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Citas</title>
	<link rel="stylesheet" href="./estilos/index.css">
</head>
<body>
	<div class="tablon" >
	    <div class="ht"> 
			<div class="ht"  >
				<h3>Lista de Citas</h3>
				<table class="table-main" border=1px >
					<tr>
						<td>id</td>
						<td>Nombre</td>
						<td>telefono</td>
						<td>correo</td>
						<td>comentario</td>
						<td>user</td>
						<td>Editar</td>
						<td>Eliminar</td>

					</tr>

					<?php
						foreach ($empleado as $dato ){
							?>
								<tr>
									<td><?php echo $dato->id; ?></td>
									<td><?php echo $dato->Nombre; ?></td>
									<td><?php echo $dato->Telefono; ?></td>
									<td><?php echo $dato->Correo; ?></td>
									<td><?php echo $dato->Comentarios; ?></td>
									<td><?php echo $dato->id_trabajador; ?></td>
									<td><a href="editar.php?id=<?php echo $dato->id; ?>"> <img src="./estilos/3124772.png" alt="" width="20px"> </a></td>
									<td><a href="eliminar.php?id=<?php echo $dato->id; ?>"> <img src="./estilos/tr.png" alt="" width="20px"> </a></td>
								</tr>
							<?php
						} 
					?>

				</table>
	    </div>
		<hr>

			<div class="getcita">
				<h3>Ingresar Nueva Cita</h3>
				<form method="POST" action="insertar.php">
					<table>
						<tr>
							<td>Nombre: </td>
							<td><input type="text" name="Nombre"></td>
						</tr>
						<tr>
							<td>Telefono: </td>
							<td><input type="text" name="Telefono"></td>
						</tr>
						<tr>
							<td>Correo: </td>
							<td><input type="text" name="Correo"></td>
						</tr>
						<tr>
							<td>Comentarios: </td>
							<td><input type="text" name="Comentarios"></td>
						</tr>
						<tr>
							<td>id trabajador: </td>
							<td><input type="text" name="id_trabajador"></td>
						</tr>
						<input type="hidden" name="oculto" value="1">
						<tr>
							<td><input type="reset" name=""></td>
							<td><input type="submit" value="INGRESAR CITA"></td>
						</tr>
					</table>
				</form>
			</div>				
	</div>
</body>
</html>