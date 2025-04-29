<?php 

include("Conexion-be.php");

if (isset($_POST['register'])) {
    if (strlen($_POST['name']) >= 1 && strlen($_POST['email']) >= 1 && strlen($_POST['password']) >= 1 && strlen($_POST['identificacion'] ) >= 1 && strlen($_POST['licencia']) >= 1 && strlen($_POST['direccion']) >= 1 && strlen($_POST['fecha']) >= 1 && strlen($_POST['sexo']) >= 1 && strlen($_POST['telefono']) >= 1) {
	    $name = trim($_POST['name']);
	    $email = trim($_POST['email']);
		$password = trim($_POST['password']);
	    $identificacion = trim($_POST['identificacion']);
		$licencia = trim($_POST['licencia']);
		$direccion = trim($_POST['direccion']);
		$fecha = trim($_POST['fecha']);
		$sexo = trim($_POST['sexo']);
		$telefono = trim($_POST['telefono']);

	    $consulta = "INSERT INTO usuarios(NOMBRE, CONTRASEÑA, EMAIL, IDENTIFICACION, LICENCIA, DIRECCION, FechaNacimiento, SEXO, TELEFONO) VALUES ('$name','$password','$email','$identificacion','$licencia','$direccion','$fecha','$sexo','$telefono')";

	    $resultado = mysqli_query($conexion,$consulta);
	
    }
}	

?>