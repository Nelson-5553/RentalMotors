<?php
 error_reporting (E_ALL ^ E_WARNING);
require 'Conexion-be.php';
session_start();


$email = $_POST["correo"];
$password = $_POST["clave"];

$q = "SELECT * from usuarios where EMAIL = '$email' and CONTRASEÑA = '$password' ";
$consulta = mysqli_query($conexion,$q);
$array = mysqli_fetch_array($consulta);
$_SESSION['usuario']=$array;



if ($array['TIPO']==1){ //CLIENTE

$_SESSION['username']= $email;    
header('Location: ../principal/paginaprincipal.php');


}elseif($array['TIPO']==2){//ADMINISTRADOR

   $_SESSION['username']= $email;    
   header('Location: ../dasboard/index.php');

}
/*
else{

   
      echo '<script>						
      alert("Credenciales incorrectas");
      window.location= "../principal/login.php"
   </script>';




}
mysqli_close($conexion);*/