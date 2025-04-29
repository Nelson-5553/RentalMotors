<?php include_once "../vistas/superior.php"?>

<script type="text/javascript">

function confirmar(){

return confirm ('¿Esta seguro? se eliminaran los datos');

}

</script>

<div class="container">
    <h1>lista de usuarios</h1>
</div>
<div>
<table>
		<thead>
			<tr>
				<th>ID</th><th>NOMBRE</th><th>Email</th><th>tipo</th><th>identificacion</th><th>licencia</th><th>direccion</th><th>FechaNacimiento</th><th>Sexo</th><th>Telefono</th>
			</tr>
		</thead>
<?php
include("../PHP/Conexion-be.php");
$consulta = mysqli_query($conexion, "SELECT * FROM usuarios");
$resultado = mysqli_num_rows($consulta);
if ($resultado>0) {
	
while ($data = mysqli_fetch_array($consulta)){
?>
<div id="main-container">

		

			<tr>
				<td><?php echo $data['ID']?></td>
				<td><?php echo $data['NOMBRE']?></td>
				<td><?php echo $data['EMAIL']?></td>
				<td><?php echo $data['TIPO']?></td>
				<td><?php echo $data['IDENTIFICACION']?></td>
				<td><?php echo $data['LICENCIA']?></td>
				<td><?php echo $data['DIRECCION']?></td>
				<td><?php echo $data['FechaNacimiento']?></td>
				<td><?php echo $data['SEXO']?></td>
                <td><?php echo $data['TELEFONO']?></td>
				<td><?php echo"<a href='../PHP/eliminar_usuario.php?ID=".$data['ID']."' onclick='return confirmar()'>ELIMINAR</a>";?></td>
			</tr>
		
		
	
	<?php
}
}
?>
</table>
</div>
</div>
<?php include_once "../vistas/inferior.php"?>