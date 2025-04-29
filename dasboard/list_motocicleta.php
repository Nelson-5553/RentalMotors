<?php include_once "../vistas/superior.php"?>
<script type="text/javascript">

function confirmar(){

return confirm ('¿Esta seguro? se eliminaran los datos');

}

</script>
<div class="container">
    <h1>Lista Motocicletas</h1>
</div>
<div>
<table>
		<thead>
			<tr>
				<th>ID</th><th>placa</th><th>color</th><th>modelo</th><th>marca</th><th>kilometraje</th><th>categoria</th><th>descripcion</th><th>cliente</th>
			</tr>
		</thead>
<?php
include("../PHP/Conexion-be.php");
$consulta = mysqli_query($conexion, "SELECT * FROM motocicleta");
$resultado = mysqli_num_rows($consulta);
if ($resultado>0) {
	
while ($data = mysqli_fetch_array($consulta)){
?>
<div id="main-container">

		

			<tr>
				<td><?php echo $data['id']?></td>
				<td><?php echo $data['placa']?></td>
				<td><?php echo $data['color']?></td>
				<td><?php echo $data['modelo']?></td>
				<td><?php echo $data['marca']?></td>
				<td><?php echo $data['kilometraje']?></td>
				<td><?php echo $data['categoria']?></td>
                <td><?php echo $data['descripcion']?></td>
				<td><?php echo $data['cliente']?></td>
				<td><?php echo"<a href='../PHP/eliminar_motos.php?id=".$data['id']."' onclick='return confirmar()'>ELIMINAR</a>";?></td>
			</tr>
		
		
	
	<?php
}
}
?>
</table>
</div>
</div>

<?php include_once "../vistas/inferior.php"?>