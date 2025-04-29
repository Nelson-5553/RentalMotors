<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>RentalMotors</title>
    
    <link href="https://fonts.googleapis.com/css2?family=Roboto:ital,wght@0,100;0,300;0,400;0,500;0,700;0,900;1,100;1,300;1,400;1,500;1,700;1,900&display=swap" rel="stylesheet">


    <link rel="stylesheet" href="../assets/css/estilosLogin.css">
</head>
<body>


        <main>

            <div class="contenedor__todo">
                <div class="caja__trasera">
                    <div class="caja__trasera-login">
                        <h3>¿Ya tienes una cuenta?</h3>
                        <p>Inicia sesión para entrar en la página</p>
                        <button id="btn__iniciar-sesion">Iniciar Sesión</button>
                    </div>
                    <div class="caja__trasera-register">
                        <h3>¿Aún no tienes una cuenta?</h3>
                        <p>Regístrate para que puedas iniciar sesión</p>
                        <button id="btn__registrarse">Regístrarse</button>
                    </div>
                </div>

                <!--Formulario de Login y registro-->
                <div class="contenedor__login-register">
                    <!--Login-->
                    <form method="POST"  class="formulario__login">
                        <h2>Iniciar Sesión</h2>
                        <input type="text" name="correo" placeholder="Correo Electronico">
                        <input type="password" name="clave" placeholder="Contraseña">
                        <button type="sudmit">Entrar</button>
                
                        <button><a href="../index.html">Regresar</a></button>
                    </form>

                    <!--Register-->
                    <form  method="POST" class="formulario__register">
                         <h2>Regístrarse</h2>
                         <input type="text" name="name" placeholder="Nombre completo">
    	                 <input type="text" name="email" placeholder="Correo">
		                 <input type="password" name="password" placeholder="Contraseña">
		                 <input type="text" name="identificacion" placeholder="Identificacion">
		                 <input type="text" name="licencia" placeholder="Licencia">
		                 <input type="text" name="direccion" placeholder="Direccion">
                         <input type="date" name="fecha" placeholder="fecha de nacimiento" required>
		                <br><br>
		                <select type="text" name="sexo" placeholder="sexo">
			                <option>MASCULINO</option>
			                <option>FEMENINO</option>
                         </select>	
		                <input type="number" name="telefono" placeholder="numero de telefono" required>

                        <button name="register">Regístrarse</button>
                        
                    </form>
                    <?php
                    include("../PHP/registrar.php");
                    include("../PHP/loguear.php");
                    ?>
                </div>
            </div>
    
        </main>

        <script src="../assets/js/script.js"></script>
</body>
</html>