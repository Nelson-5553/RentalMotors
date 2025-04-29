<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../css2/estilos2.css">
    <title>HACER UNA RESERVA</title>
</head>
<body>

<nav class="nav">
        <ul class="list">

        <img src="../imglogos/logo.png" alt="Logo" width="300px" height="280px">

            <li class="list__item">
                <div class="list__button">
                    <img src="../imglogos/home.png" class="list__img">
                    <a href="paginaprincipal.php" class="nav__link"><h3>Inicio</h3></a>
                </div>
            </li>

            <li class="list__item list__item--click">
                <div class="list__button list__button--click">
                    <img src="../imglogos/categoria.png" class="list__img">
                    <a href="motocicletas.php" class="nav__link"><h3>Motocicletas</h3></a>
                    <img src="../imglogos/circulo.png" class="list__arrow">
                </div>

                <ul class="list__show">
                <div style="overflow: auto; width: 400px; height: 110px">
                    <li class="list__inside">
                        <a href="#urbana" class="nav__link nav__link--inside"><h4>Urbanas</h4></a>
                    </li>
                    <li class="list__inside">
                        <a href="#deportivas" class="nav__link nav__link--inside"><h4>Deporitivas</h4></a>
                    </li>
                    <li class="list__inside">
                        <a href="#semiautomatica" class="nav__link nav__link--inside"><h4>Semi automaticas</h4></a>
                    </li>
                    <li class="list__inside">
                        <a href="#automaticas" class="nav__link nav__link--inside"><h4>Automáticas</h4></a>
                    </li>
                    <li class="list__inside">
                        <a href="#altagama" class="nav__link nav__link--inside"><h4>Alta gama</h4></a>
                    </li>
                    <li class="list__inside">
                        <a href="#electricas" class="nav__link nav__link--inside"><h4>Eléctricas</h4></a>
                    </li>
                </ul>

            </li>

            <li class="list__item">
                <div class="list__button">
                    <img src="../imglogos/expediente.png" class="list__img">
                    <a href="registro_motos.php" class="nav__link"><h3>Registrar moto</h3></a>
                </div>
            </li>

            <li class="list__item list__item--click">
                <div class="list__button list__button--click">
                    <img src="../imglogos/calendario.png" class="list__img">
                    <a href="#" class="nav__link"><h3>Mis reservas</h3></a>
                </div>
            </li>


            <li class="list__item">
                <div class="list__button">
                    <img src="../imglogos/libro.png" class="list__img">
                    <a href="reserva.php" class="nav__link"><h3>Reservar</h3></a>
                </div>
            </li>

        </ul>
    </nav>
    <script src="main.js"></script>

<div class="container">
    <div class="title">Renta tu motocicleta hoy mismo</div>
    <div class="content">
    <form action="../PHP/registrar_reserva.php" method="POST">
        <div class="user-details">
            
                <?php
                session_start();
                $arrayu = $_SESSION['usuario'];
                ?>

            
        <div class="input-box">
            <span class="details">cliente</span>
            <input type="text" value="<?php echo"$arrayu[1]";?>" name="cliente" placeholder="" readonly="readonly" required>
        </div>


        <div class="input-box">
            <span class="details">Fecha de reserva</span>
            <input type="date" name="FechaEntrega" placeholder="" required>
        </div>
        <div class="input-box">
            <span class="details">Fecha de devolución</span>
            <input type="date" name="FechaDevolucion" placeholder="" required>
        </div>
       
        

        <div class="input-box">
            <span class="details">Ciudad</span>
            <input type="text" name="ciudad" placeholder="" required>
        </div>
       
        <div class="input-box">
            <span class="details">Valor al dia</span>
            <input type="text" name="valor" value="70000" readonly="readonly" required>
        </div>
        <div class="input-box">
        
        </div>
        <div class="">
        <input type="checkbox">Aceptar <a href="../term.html" required>terminos y condiciones</input>
        </div>

        <div class="button">
            <input type="submit" value="Reservar"><br>
  
        </div>
    </form>
    
    </div>
</div>
</body>
</html>