<?php 

include("Conexion-be.php");


	    $placa = $_POST['placa'];
	    $modelo = $_POST['modelo'];
        $marca = $_POST['marca'];
		$color = $_POST['color'];
	    $kilo = $_POST['kilo'];
		$categoria = $_POST['categoria'];
		$descripcion = $_POST['descripcion'];
        $FOTO = addslashes(file_get_contents($_FILES['FOTO']['tmp_name']));
		$cliente = $_POST['cliente'];

	    $query = "INSERT INTO motocicleta(placa, color, modelo, marca, kilometraje, categoria, descripcion, cliente, FOTO) VALUES ('$placa','$color','$modelo','$marca','$kilo','$categoria','$descripcion','$cliente','$FOTO')";

	    $resultado =$conexion->query($query);

        if($resultado) {
            echo'
			<script>						
				alert("Su registro ha sido exitoso");
				window.location= "../principal/registro_motos.php"
			</script>
			';
			
        }else{
            echo '<script>						
				alert("Su registro ha fallado");
				window.location= "../principal/registro_motos.php"
			</script>';

        }
		mysqli_close($conexion);
  


?>