<?php 

include("Conexion-be.php");


	    $FechaEntrega = $_POST['FechaEntrega'];
	    $FechaDevolucion = $_POST['FechaDevolucion'];
        date_default_timezone_set('America/Colombia');
        $FechaActual=date("Y-m-d H:i:s");
		$cliente= $_POST['cliente'];
        $ciudad= $_POST['ciudad'];
        $valor= $_POST['valor'];


	    $query = "INSERT INTO reserva(FechaEntrega, FechaDevolucion, FechaAprovacion, cliente, ciudad, valor) VALUES ('$FechaEntrega','$FechaDevolucion','$FechaActual','$cliente','$ciudad','$valor')";

	    $resultado =$conexion->query($query);

        if($resultado) {
            echo'
			<script>						
				alert("Su reserva ha sido exitosa");
				window.location= "../principal/reserva.php"
			</script>
			';
			
        }else{
            echo '<script>						
				alert("Su registro ha fallado");
				window.location= "../principal/reserva.php"
			</script>';

        }
		mysqli_close($conexion);
	
  


?>