<?php include_once "../vistas/superior.php"?>

<script type="text/javascript">

function confirmar(){

return confirm ('¿Esta seguro? se eliminaran los datos');

}

</script>

<div class="container">
    <h1>lista de reservas</h1>
</div>
<div>
<table>
		<thead>
			<tr>
				<th>ID</th><th>FechaEntrega</th><th>FechaDevolucion</th><th>FechaAprobacion</th><th>cliente</th><th>Motocicleta</th><th>Ciudad</th><th>Valor</th>
			</tr>
		</thead>
<?php
include("../PHP/Conexion-be.php");
$consulta = mysqli_query($conexion, "SELECT * FROM reserva");
$resultado = mysqli_num_rows($consulta);
if ($resultado>0) {
	
while ($data = mysqli_fetch_array($consulta)){
?>
<div id="main-container">

		

			<tr>
				<td><?php echo $data['id']?></td>
				<td><?php echo $data['FechaEntrega']?></td>
				<td><?php echo $data['FechaDevolucion']?></td>
				<td><?php echo $data['FechaAprovacion']?></td>
				<td><?php echo $data['cliente']?></td>
				<td><?php echo $data['motocicleta']?></td>
				<td><?php echo $data['ciudad']?></td>
				<td><?php echo $data['valor']?></td>
				<td><?php echo"<a href='../PHP/eliminar_reserva.php?id=".$data['id']."' onclick='return confirmar()'>ELIMINAR</a>";?></td>
			</tr>
		
		
	
	<?php
}
}
?>
</table>
</div>
</div>
<?php include_once "../vistas/inferior.php"?>