<?php

$id=$_GET['id'];
include("Conexion-be.php");

$sql="delete from reserva where id='".$id."'";
$resultado=mysqli_query($conexion,$sql);

if($resultado){

echo "<script>

alert('los datos se eliminaron correctamente');
location.assign('../dasboard/list_reserva.php');
</script>";

}


?>