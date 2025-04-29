<?php
include("PHP/Conexion-be.php");
?>
<!DOCTYPE html>
<html lang="es">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
	<title>Motocicletas</title>

	<link rel="stylesheet" href="css2/motocicleta.css">
	<link href="https://fonts.googleapis.com/css?family=Open+Sans:400,600,700" rel="stylesheet">

	<script src="js/jquery-3.2.1.js"></script>
	<script src="js/script.js"></script>
</head>
<body link="black">
	
<div class="wrap">
		<h1>Escoge una moto</h1>
		<div class="store-wrapper">
			<div class="category_list">
				<h2> Categorias </h2>
				
				<a href="index.html" class="category_item" category="automaticas">INICIO</a>
			</div>
			
	<section class="lista" >
			
			<?php
$consulta = mysqli_query($conexion, "SELECT * FROM motocicleta");
$resultado = mysqli_num_rows($consulta);
if ($resultado>0) {
	
while ($data = mysqli_fetch_array($consulta)){
?>
<div class="lista-hijo">
<center>
	<table border="2" padding="">
	
	
	<tr>
	
		<td><img src="data:image/jpg;base64,<?php echo base64_encode($data['FOTO']) ?>" width="200" height="200px"  ></td>
	</tr>
	<tr>
		<td bgcolor="7a64f5"><center><a href=""><?php echo $data['modelo']?></a></center></td>
	</tr>
	<tr>
		<td bgcolor="7a64f5"><center><a href=""><?php echo $data['marca']?></a></center></td>
	</tr>
		
	</table>
</center>		
</div>
<?php
}
}

?>

	</section>
		</div>
</div>		
</body>
</html>

