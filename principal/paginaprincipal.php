<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Página web RentalMotors</title>
    <link rel="shortcut icon" href="img/LogoRentalMotors.png" type="image/x-icon">
    <link rel="stylesheet" href="../css2/index.css">
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,700,800&display=swap" rel="stylesheet"> 
</head>

<body>
    <header>
            <nav id="principio">
            <a href="#">Inicio</a>
            <a href="motocicletas.php">Motocicletas</a>
            <a href="registro_motos.php">Registrar motocicleta</a>
            <a href="reserva.php">Reservar</a>
            <a href='../PHP/salir.php'>Cerrar sesión</a>
            <a href=''> 
                <?php

                session_start();
                $email = $_SESSION['username'];

                if(!isset($email)){

                header('location: index.php');

                }else{

                echo "$email";

                }

            ?>
            </a>
            
        </nav>
        <section class="textos-header">
            <h1>El mejor sitio para rentar tu motocicleta</h1>
            <h2>Ahora transportarse es mucho mas fácil con RentalMotors</h2>
        </section>
        <div class="wave" style="height: 150px; overflow: hidden;"><svg viewBox="0 0 500 150" preserveAspectRatio="none"
                style="height: 100%; width: 100%;">
                <path d="M0.00,49.98 C150.00,150.00 349.20,-50.00 500.00,49.98 L500.00,150.00 L0.00,150.00 Z"
                    style="stroke: none; fill: #fff;"></path>
            </svg></div>
    </header>
    <main>
        <section class="contenedor sobre-nosotros">
            <h1 class="titulo">RentalMotors</h1>
            <div class="contenedor-sobre-nosotros">
                <img src="../imglogos/logo.png" alt="" class="imagen-about-us">
                <div class="contenido-textos"><br><br>
                <h3><span>1</span>Quienes somos</h3>
                    <p>Somos una plataforma web en donde podras poner en servicio tus motocicletas
                        para que generes ingresos extras, tambien velamos por el bienestar de cada usuario.</p>
                    <h3><span>2</span>Que hacemos</h3>
                    <p>Somos una plataforma dedicada a la renta de motocicletas, estamos dispuestos a brindar
                        este espacio para todas aquellas personas con motocicletas para que brinden el servicio
                        de alquiler hacia quienes lo necesiten.
                    </p>
                </div>
            </div>
        </section>
        
        <section class="portafolio">
            <div class="contenedor">
                <h2 class="titulo">Motocicletas</h2>
                <div class="galeria-port">
                    <div class="imagen-port">
                        <img src="../imgMotos/pulsar.jpg" alt="">
                        <div class="hover-galeria">
                            <p>Marca: Bajaj</p>
                            <p>Modelo: Pulsar Ns</p>
                            <p>Cilindraje: 160cc</p>
                            <p>Año: 2022</p>
                            <p>Valor: $25.000</p>
                            <button><a href="reserva.php">Reservar ahora</a></button>
                            
                        </div>
                    </div>
                    <div class="imagen-port">
                        <img src="../imgMotos/fz250.jpg" alt="">
                        <div class="hover-galeria">
                            <p>Marca: Yamaha</p>
                            <p>Modelo: Fz</p>
                            <p>Cilindraje: 250cc</p>
                            <p>Año: 2022</p>
                            <p>Valor: $25.000</p>
                            <button><a href="reserva.php">Reservar ahora</a></button>
                        
                        </div>
                    </div>
                    <div class="imagen-port">
                        <img src="../imgMotos/ct100.jpg" alt="">
                        <div class="hover-galeria">
                            <p>Marca: Bajaj</p>
                            <p>Modelo: Boxer CT</p>
                            <p>Cilindraje: 100cc</p>
                            <p>Año: 2022</p>
                            <p>Valor: $20.000</p>
                            <button><a href="reserva.php">Reservar ahora</a></button>
                        
                        </div>
                    </div>
                    <div class="imagen-port">
                        <img src="../imgMotos/tvs.jpg" alt="">
                        <div class="hover-galeria">
                            <p>Marca: TVS</p>
                            <p>Modelo: Sport</p>
                            <p>Cilindraje: 100cc</p>
                            <p>Año: 2022</p>
                            <p>Valor: $20.000</p>
                            <button><a href="reserva.php">Reservar ahora</a></button>
                        
                        </div>
                    </div>
                    <div class="imagen-port">
                        <img src="../imgMotos/apache.jpg" alt="">
                        <div class="hover-galeria">
                            <p>Marca: TVS</p>
                            <p>Modelo: Apache RTR</p>
                            <p>Cilindraje: 160cc</p>
                            <p>Año: 2023</p>
                            <p>Valor: $25.000</p>
                            <button><a href="reserva.php">Reservar ahora</a></button>
                        
                        </div>
                    </div>
                    <div class="imagen-port">
                        <img src="../imgMotos/cr125.jpg" alt="">
                        <div class="hover-galeria">
                            <p>Marca: AKT</p>
                            <p>Modelo: CR4</p>
                            <p>Cilindraje: 125cc</p>
                            <p>Año: 2022</p>
                            <p>Valor: $25.000</p>
                            <button><a href="reserva.php">Reservar ahora</a></button>
                        
                        </div>
                    </div>
                    <div class="imagen-port">
                        <img src="../imgMotos/enduro.jpg" alt="">
                        <div class="hover-galeria">
                            <p>Marca: AKT</p>
                            <p>Modelo: Enduro</p>
                            <p>Cilindraje: 200cc</p>
                            <p>Año: 2022</p>
                            <p>Valor: $30.000</p>
                            <button><a href="reserva.php">Reservar ahora</a></button>
                        
                        </div>
                    </div>
                    <div class="imagen-port">
                        <img src="../imgMotos/discover.jpg" alt="">
                        <div class="hover-galeria">
                            <p>Marca: Bajaj</p>
                            <p>Modelo: Discover ST</p>
                            <p>Cilindraje: 125cc</p>
                            <p>Año: 2022</p>
                            <p>Valor: $25.000</p>
                            <button><a href="reserva.php">Reservar ahora</a></button>
                        
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <section class="about-services">
            <div class="contenedor">
                <h2 class="titulo">Rentar una motocicleta es muy fácil</h2>
                <div class="servicio-cont">
                    <div class="servicio-ind">
                </div>
                <div><img src="../imglogos/iconos.png" ></div>
            </div>
            
        </section>

        </main>
        <footer>
            <style>
                .titulo{
                    margin: center;
                    color: black;
                }
            </style>
            <h1 class="titulo">Nuestras redes sociales</h1>
        <div class="contenedor-footer">
            <div class="content-foo">
                <img src="../imglogos/facebook.png" width="100px" height="100px">
                <p>RentalMotors</p>
            </div>

            <div class="content-foo">
                <img src="../imglogos/instagram.png" width="90px" height="90px">
                <p>@Rental_Motors</p>
            </div>

            <div class="content-foo">
                <img src="../imglogos/whatsapp.png" width="90px" height="90px">
                <p>Contactanos directamente</p>
            </div>
        </div>
        <h2 class="titulo-final">&copy; RentalMotors | Estudiantes de Tecnológico Comfenalco </h2>
        <a href="#principio"><img src="../imglogos/flecha_arriba.png" id="botonArriba" alt="Arriba"></a>
        <script src="js/boton-arriba.js"></script>
    </footer>
</body>

</html>