<?php  
	if (!isset($_POST['oculto'])) {
		header('Location:index.php');
	}

	include 'model/conexion.php';
	$id2 = $_POST['id2'];
	$Nombre2 = $_POST['txt2Nombre'];
	$Telefono2 = $_POST['txtTelefono'];
	$Correo2 = $_POST['txt2Correo'];
	$Comentarios2 = $_POST['txt2Comentarios'];
	$id_trabajador2 = $_POST['txt2id_trabajador'];

	$sentencia = $bd->prepare("UPDATE empleados SET Nombre = ?,Telefono = ?, Correo = ?, Comentarios = ?, id_trabajador = ? WHERE id = ?;");
	$resultado = $sentencia->execute([$Nombre2,$Telefono2,$Correo2,$Comentarios2,$id_trabajador2, $id2]);

	if ($resultado === TRUE) {
		header('Location: index.php');
	}else{
		echo "Error";
	}

?>