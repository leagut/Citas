<?php  
	if (!isset($_GET['id'])) {
		header('Location: index.php');
	}

	include 'model/conexion.php';
	$id = $_GET['id'];

	$sentencia = $bd->prepare("SELECT * FROM empleados WHERE id = ?;");
	$sentencia->execute([$id]);
	$persona = $sentencia->fetch(PDO::FETCH_OBJ); 
	//print_r($persona);

?>

<!DOCTYPE html>
<html>
<head>
	<title>Editar Alumno</title>
	<meta charset="utf-8">
</head>
<body>
	<center>
		<h3>Editar alumno:</h3>
		<form method="POST" action="editarProceso.php">
			<table>
				<tr>
					<td>Nombre</td>
				    <td><input type="text" name="txt2Nombre" value="<?php echo $persona->Nombre; ?>"> </td>	
				</tr>
				<tr>
					<td>Telefono</td>
				    <td><input type="text" name="txtTelefono" value="<?php echo $persona->Telefono; ?>"> </td>	
				</tr>
				<tr>
					<td>Correo</td>
				    <td><input type="text" name="txt2Correo" value="<?php echo $persona->Correo; ?>"> </td>	
				</tr>
				<tr>
					<td>Comentarios</td>
				    <td><input type="text" name="txt2Comentarios" value="<?php echo $persona->Comentarios; ?>"> </td>	
				</tr>
				<tr>
					<td>id_trabajador</td>
				    <td><input type="text" name="txt2id_trabajador" value="<?php echo $persona->id_trabajador; ?>"> </td>	
				</tr>
				<tr>
					<input type="hidden" name="oculto">
					<input type="hidden" name="id2" value="<?php echo $persona->id; ?>">
					<td colspan="2"><input type="submit" value="EDITAR CITA"></td>
				</tr>
			</table>
	</center>
</body>
</html>