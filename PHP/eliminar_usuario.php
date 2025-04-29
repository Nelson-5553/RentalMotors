<?php

$id=$_GET['ID'];
include("Conexion-be.php");

$sql="delete from usuarios where ID='".$id."'";
$resultado=mysqli_query($conexion,$sql);

if($resultado){

echo "<script>

alert('los datos se eliminaron correctamente');
location.assign('../dasboard/list_usuario.php');
</script>";

}


?>