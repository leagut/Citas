<?php  
	if (!isset($_POST['oculto'])) {
		exit();
	}

	include 'model/conexion.php';
	$Nombre = $_POST['Nombre'];
	$Telefono = $_POST['Telefono'];
	$Correo = $_POST['Correo'];
	$Comentarios = $_POST['Comentarios'];
	$id_trabajador = $_POST['id_trabajador'];

	$sentencia = $bd->prepare("INSERT INTO empleados(Nombre,Telefono,Correo,Comentarios,id_trabajador) VALUES (?,?,?,?,?);");
	$resultado = $sentencia->execute([$Nombre,$Telefono,$Correo,$Comentarios,$id_trabajador]);

	if ($resultado === TRUE) {
		//echo "Insertado correctamente";
		header('Location: index.php');
	}else{
		echo "Error";
	}
?>